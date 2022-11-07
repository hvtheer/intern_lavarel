@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">Permission List</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('permission.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg>
                            Add new
                        </a>
                    </div>
                </nav>
                <table class="table table-hover table-bordered bg-white">
                    <thead>
                        <tr>
                            <th style="width: 20%;" scope="col">ID</th>
                            <th style="width: 20%;" scope="col">Name</th>
                            <th style="width: 20%;" scope="col">Key</th>
                            <th style="width: 20%;" scope="col">PerGroup ID</th>
                            <th style="width: 20%;" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($permissions))
                        @foreach($permissions as $permission)
                        <tr>
                            <td>
                                {{$permission->id}}
                            </td>
                            <td>
                                {{$permission->name}}
                            </td>
                            <td>
                                {{$permission->key}}
                            </td>
                            <td>
                                {{$permission->permission_group_id}}
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('permission.edit', $permission->id) }}">Edit</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('permission.show', $permission->id) }}">Info</a>
                                <form class="d-inline" method="post" action="{{ route('permission.destroy', $permission->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete this permission?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="pagination justify-content-center">
                    {{ $permissions->links() }}
                </div>
            </div> 
        </div> 
    </div>
</div>

@endsection
