<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

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

        return view('admin.user.index', [
            'users' => $this->getSessionUsers(),
        ]);

        // Session::push('users', $request->only(['name', 'email', 'phone', 'address']));
        // return redirect()->route('admin.user.index')->with('message', 'Thêm thành công');
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
        $users = $request->email == 'all' ? collect(Session::get('users')) : collect(Session::get('users'))->where('email', $request->email);

        $path = public_path('uploads');
        $attachment = $request->file('attachment');

        if(!empty($attachment)) {
            $name = time().'.'.$attachment->getClientOriginalExtension();

            if(!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $filename = $path.'/'.$name;

            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $filename);
            }
        }else {
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $filename='/');
            }
        }
        
        return redirect()->back()->with('message', 'Gửi mail thành công');
    }

    public function formSendMail()
    {
        return view('mail.index', [
            'users'=> $this->getSessionUsers(),
        ]);
    }
}