@extends('layout')
@section('content')
<div class="main">
    <div class="card bg-light">
        <div class="container">
            <nav class="navbar justify-content-between">
                <a class="navbar-brand">User List</a>
                <div class="">
                    <a class="btn btn-default bg-white" style="border: 1px solid black;" type="submit" href="{{ url('admin/user/mail') }}">
                        Send mail
                    </a>
                    <a class="btn btn-primary" type="submit" href="{{url('admin/user/create')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                        </svg>
                        Add new
                    </a>
                </div>
            </nav>
            <table class="table table-hover table-bordered" style="background-color: white">
                <thead>
                    <tr>
                        <th style="width: 10%;" scope="col">User</th>
                        <th style="width: 30%;" scope="col">Name</th>
                        <th style="width: 30%;" scope="col">Email</th>
                        <th style="width: 20%;" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach(session()->get('user') as $key=>$value) --}}
                    <tr>
                        <th style="width:50px" id="user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </th>
                        <td>
                            Product
                            {{-- {{$value['name']}} --}}
                        </td>
                        <td>
                            huhu 
                            {{-- {{$value['name']}} --}}
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
            <div>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><</span>
        
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">></span>
                        </a>
                    </li>
                </ul>
            </div> 
        </div> 
    </div> 
</div>
@stop()