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
        return view('admin.permission-group.form');
    }

    public function store(PermissionGroupRequest $request)
    {
        $this->permissionGroupRepository->save($request->validated());
        return redirect()->back()->with('message', 'Thêm mới thành công');
    }

    public function show($id)
    {
        if (!$permissionGroup = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission-group.show', [
            'permissionGroup' => $permissionGroup
        ]);
    }

    public function edit($id)
    {
        if (!$permissionGroup = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission-group.form', [
            'permissionGroup' => $permissionGroup
        ]);
    }

    public function update(PermissionGroupRequest $request, $id)
    {
        $this->permissionGroupRepository->save($request->all(), ['id' => $id]);
        return redirect()->back()->with('message', 'Sửa thành công!');
    }

    public function destroy($id)
    {
        $this->permissionGroupRepository->deleteById($id);
        return redirect()->back()->with('message', 'Xoá thành công!');
    }
}
