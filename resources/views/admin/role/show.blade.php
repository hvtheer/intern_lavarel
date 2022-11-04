@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">Information</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('role.create') }}">
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
                            <th style="width: 10%;" scope="col">ID</th>
                            <th style="width: 15%;" scope="col">Name</th>
                            <th style="width: 20%;" scope="col">Created at</th>
                            <th style="width: 20%;" scope="col">Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($role))
                        <tr>
                            <td>
                                {{$role->id}}
                            </td>
                            <td>
                                {{$role->name}}
                            </td>
                            <td>
                                {{$role->created_at}}
                            </td>
                            <td>
                                {{$role->updated_at}}
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div> 
        </div> 
    </div>
</div>

@endsection
