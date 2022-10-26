<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facedes\Files;

class UserController extends Controller
{
    protected $mailService;

    public function index()
    {
        return view('admin.user.index', [
            'users' => $this->getSessionUsers(),
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        Session::push('users', $request->validated());

        return redirect()->back()->with('message', 'Thêm mới thành công');
    }

    private function getSessionUsers()
    {
        return collect(Session::get('users'));
    }

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function sendMailUserProfile(Request $request)
    {
        if ($request->email == 'all') {
            $users = $this->getSessionUsers();
        } else {
            $users = $this->getSessionUsers()->where('email', $request->email);
        }
        
        $path = public_path('uploads');
        $filename = $request->file('attachment');

        if (!empty($filename)) {
            $name = time().'.'.$filename->getClientOriginalExtension();

            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $filename->move($path, $name);

            $attachment = $path.'/'.$name;

            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $attachment);
            }
        } else {
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $attachment='/');
            }
        }

        return redirect()->back()->with('message', 'The mail was successfully sent! Please check you email!');
    }

    public function formSendMail()
    {
        return view('mail.index', [
            'users' => $this->getSessionUsers(),
        ]);
    }
}
