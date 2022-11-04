<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\MailService;
use Illuminate\Http\Request;
use App\Repositories\Admin\User\UserRepository;

class UserController extends Controller
{
    protected $userRepository;
    protected $mailService;

    public function __construct(UserRepository $userRepository, MailService $mailService)
    {
        $this->userRepository = $userRepository;
        $this->mailService = $mailService;
    }

    public function index()
    {
        return view('admin.user.index', [
            'users' => $this->userRepository->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.user.form');
    }

    public function store(UserRequest $request)
    {
        $this->userRepository->save($request->validated());
        return redirect()->back()->with('message', 'Thêm mới thành công');
    }

    public function show($id)
    {
        if (!$user = $this->userRepository->findById($id)) {
            abort(404);
        }

        return view('admin.user.show', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        if (!$user = $this->userRepository->findById($id)) {
            abort(404);
        }

        return view('admin.user.form', [
            'user' => $user
        ]);
    }

    public function update(userRequest $request, $id)
    {
        $this->userRepository->save($request->all(), ['id' => $id]);
        return redirect()->back()->with('message', 'Sửa thành công!');
    }

    public function destroy($id)
    {
        $this->userRepository->deleteById($id);
        return redirect()->back()->with('message', 'Xoá thành công!');
    }

    public function sendMailUserProfile(Request $request)
    {
        $users = $this->userRepository->getAll();
        $email = $request->email;
        $attachment = null;
        $attachment = $request->file('attachment');

        if ($email == 'all') {
            foreach ($users as $user) {
                $this->mailService->sendUserProfile($user, $attachment);
            };
        } else {
            $user = $users->firstWhere('email', $email);
            $this->mailService->sendUserProfile($user, $attachment);
        }

        return redirect()->back()->with(
            'message',
            'The mail was successfully sent! Please check you email!'
        );
    }

    public function formSendMail()
    {
        return view('mail.index', [
            'users' => $this->userRepository->getAll(),
        ]);
    }
}
