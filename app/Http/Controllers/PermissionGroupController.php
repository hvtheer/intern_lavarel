<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionGroupRequest;
use App\Repositories\Admin\PermissionGroup\PermissionGroupRepository;

class PermissionGroupController extends Controller
{
    protected $permissionGroupRepository;

    public function __construct(PermissionGroupRepository $permissionGroupRepository)
    {
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    public function index()
    {
        $permissionGroup = $this->permissionGroupRepository->paginate();

        return view('admin.permission-group.index', [
            'permissionGroups' => $permissionGroup,
        ]);
    }

    public function create()
    {
        return view('admin.permission-group.create');
    }

    public function store(PermissionGroupRequest $request)
    {
        $this->permissionGroupRepository->save($request->validated());

        return redirect()->back()->with('message', 'Thêm mới thành công');
    }
}
