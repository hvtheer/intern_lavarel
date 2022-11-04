@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">Information</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('user.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg>
                            Add new
                        </a>
                    </div>
                </nav>
                <table class="table table-hover table-bordered bg-white">
                    @if(!empty($user))
                        <tr>
                            <th scope="col">ID</th>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Username</th>
                            <td>{{$user->username}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Phone</th>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Address</th>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr>
                            <th scope="col">School ID</th>
                            <td>{{$user->school_id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Type</th>
                            <td>{{$user->type}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Parent ID</th>
                            <td>{{$user->parent_id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Verified at</th>
                            <td>{{$user->verified_at}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Description</th>
                            <td>{{$user->description}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Created at</th>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Updated at</th>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                    @endif
                </table>
            </div> 
        </div> 
    </div>
</div>

@endsection
