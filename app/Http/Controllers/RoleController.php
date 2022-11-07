<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Repositories\Admin\Role\RoleRepository;

class RoleController extends Controller
{
    protected $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        $role = $this->roleRepository->paginate();

        return view('admin.role.index', [
            'roles' => $role,
        ]);
    }

    public function create()
    {
        return view('admin.role.form');
    }

    public function store(RoleRequest $request)
    {
        $this->roleRepository->save($request->validated());
        return redirect()->back()->with('message', 'Thêm mới thành công');
    }

    public function show($id)
    {
        if (!$role = $this->roleRepository->findById($id)) {
            abort(404);
        }

        return view('admin.role.show', [
            'role' => $role
        ]);
    }

    public function edit($id)
    {
        if (!$role = $this->roleRepository->findById($id)) {
            abort(404);
        }

        return view('admin.role.form', [
            'role' => $role
        ]);
    }

    public function update(RoleRequest $request, $id)
    {
        $this->roleRepository->save($request->all(), ['id' => $id]);
        return redirect()->back()->with('message', 'Sửa thành công!');
    }

    public function destroy($id)
    {
        $this->roleRepository->deleteById($id);
        return redirect()->back()->with('message', 'Xoá thành công!');
    }
}
