@extends ('layout')
@section ('content')
<div class="main">
    <div class="container">
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create a User</a>
            <a class="btn btn-primary" type="submit" href="{{ route('admin.user.index')}}">Back</a>
        </nav>
        <form action="{{ route('admin.user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password Confirm</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputAddress1">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress1">
            </div>
            <div class="form-group">
                <label for="exampleInputFacebook1">Facebook link</label>
                <input type="text" class="form-control" id="exampleInputFacebook1" placeholder="https://example.com">
                @error('facebook')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Youtube</label>
                <input type="text" class="form-control" id="exampleInputYoutube1" placeholder="https://example.com">
                @error('youtube')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button type="button" class="btn btn-secondary btn-sm">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection