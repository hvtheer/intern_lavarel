@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">Permission Group</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('permission-group.create') }}">
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
                            <th style="width: 40%;" scope="col">Name</th>
                            <th style="width: 40%;" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($permissionGroups))
                        @foreach($permissionGroups as $permissionGroup)
                        <tr>
                            <td>
                                {{$permissionGroup['id']}}
                            </td>
                            <td>
                                {{$permissionGroup['name']}}
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button" class="btn btn-primary btn-sm">Info</button>
                                <form class="d-inline" method="POST" action="">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            {{ $permissionGroups->links() }}
            </div> 
        </div> 
    </div>
</div>

@endsection
