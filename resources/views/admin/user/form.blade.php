@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
    @if (empty($user))
            <a class="navbar-brand">Create a user</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index') }}">Back</a>
        </nav>
        <form action="{{ route('user.store') }}" method="post">
    @else
            <a class="navbar-brand">Edit a user Group</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index') }}">Back</a>
        </nav>
        <form action="{{ route('user.update', $user->id) }}"  method="post">
        @method('PUT')
    @endif
            @csrf
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="InputName">Name</label>
                        @if(empty($user))
                        <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name') }}">
                        @else
                        <input type="text" class="form-control" id="InputName" name="name" value="{{ $user->name }}">
                        @endif
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="InputUsername">Username</label>
                        @if(empty($user))
                        <input type="text" class="form-control" id="InputUsername" name="username" value="{{ old('username') }}">
                        @else
                        <input type="text" class="form-control" id="InputUsername" name="username" value="{{ $user->username }}">
                        @endif
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="InputEmail">Email</label>
                        @if(empty($user))
                        <input type="email" class="form-control" id="InputEmail" name="email" value="{{ old('email') }}">
                        @else
                        <input type="email" class="form-control" id="InputEmail" name="email" value="{{ $user->email }}">
                        @endif
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="InputPhone">Phone</label>
                        @if(empty($user))
                        <input type="text" class="form-control" id="InputPhone" name="phone" value="{{ old('phone') }}">
                        @else
                        <input type="text" class="form-control" id="InputPhone" name="phone" value="{{ $user->phone }}">
                        @endif
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password</label>
                        @if(empty($user))
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}">
                        @else
                        <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
                        @endif
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password Confirm</label>
                        @if(empty($user))
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="{{ old('password_confirm')}}">
                        @else
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="{{ $user->password }}">
                        @endif
                        @error('password_confirm')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="InputAddress">Address</label>
                @if(empty($user))
                <input type="text" class="form-control" id="InputAddress" name="address" value="{{ old('address') }}">
                @else
                <input type="text" class="form-control" id="InputAddress" name="address" value="{{ $user->address }}">
                @endif
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputDescription">Description</label>
                @if(empty($user))
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                @else
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                @endif
            </div>

            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button type="submit" class="btn btn-secondary btn-sm">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection