<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Repositories\Admin\Permission\PermissionRepository;

class PermissionController extends Controller
{
    protected $permissionRepository;

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function index()
    {
        $permission = $this->permissionRepository->paginate();

        return view('admin.permission.index', [
            'permissions' => $permission,
        ]);
    }

    public function create()
    {
        return view('admin.permission.form');
    }

    public function store(PermissionRequest $request)
    {
        $this->permissionRepository->save($request->validated());
        return redirect()->back()->with('message', 'Thêm mới thành công');
    }

    public function show($id)
    {
        if (!$permission = $this->permissionRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission.show', [
            'permission' => $permission
        ]);
    }

    public function edit($id)
    {
        if (!$permission = $this->permissionRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission.form', [
            'permission' => $permission
        ]);
    }

    public function update(PermissionRequest $request, $id)
    {
        $this->permissionRepository->save($request->all(), ['id' => $id]);
        return redirect()->back()->with('message', 'Sửa thành công!');
    }

    public function destroy($id)
    {
        $this->permissionRepository->deleteById($id);
        return redirect()->back()->with('message', 'Xoá thành công!');
    }
}
