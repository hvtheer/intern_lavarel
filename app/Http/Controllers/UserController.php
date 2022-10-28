<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $users = $this->getSessionUsers();
        $email = $request->email;
        $attachment = null;
        $attachment = $request->file('attachment');

        if ($email == 'all'){
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $attachment);
            };
        }
        else {
            $user = $users->firstWhere('email', $email);
            $this->mailService->sendUserProfile($user, $attachment);
        }

        return redirect()->back()->with('message',
            'The mail was successfully sent! Please check you email!');
    }

    public function formSendMail()
    {
        return view('mail.index', [
            'users' => $this->getSessionUsers(),
        ]);
    }
}
