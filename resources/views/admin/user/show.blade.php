@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">{{__('user.information')}}</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('user.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg>
                            {{__('button.addNew')}}
                        </a>
                    </div>
                </nav>
                <table class="table table-hover table-bordered bg-white">
                    @if(!empty($user))
                        <tr>
                            <th scope="col">{{__('user.id')}}</th>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.name')}}</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.email')}}</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.username')}}</th>
                            <td>{{$user->username}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.phone')}}</th>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.address')}}</th>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.type')}}</th>
                            <td>{{$user->type}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.description')}}</th>
                            <td>{{$user->description}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.createdAt')}}</th>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        <tr>
                            <th scope="col">{{__('user.updatedAt')}}</th>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                    @endif
                </table>
            </div> 
        </div> 
    </div>
</div>

@endsection
