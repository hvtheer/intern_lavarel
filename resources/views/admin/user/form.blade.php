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

            <div class="form-group">
                <label for="InputEmail">Email</label>
                @if(empty($user))
                <input type="text" class="form-control" id="InputEmail" name="email" value="{{ old('email') }}">
                @else
                <input type="text" class="form-control" id="InputEmail" name="email" value="{{ $user->email }}">
                @endif
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password Confirm</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="{{ old('password_confirm')}}">
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
                <label for="InputFacebook">Facebook</label>
                @if(empty($user))
                <input type="text" class="form-control" id="InputFacebook" name="facebook" value="{{ old('facebook') }}">
                @else
                <input type="text" class="form-control" id="InputFacebook" name="facebook" value="{{ $user->facebook }}">
                @endif
                @error('facebook')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputYoutube">Youtube</label>
                @if(empty($user))
                <input type="text" class="form-control" id="InputYoutube" name="youtube" value="{{ old('youtube') }}">
                @else
                <input type="text" class="form-control" id="InputYoutube" name="youtube" value="{{ $user->youtube }}">
                @endif
                @error('youtube')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                @if(empty($user))
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desription" value="{{ old('description') }}" rows="3"></textarea>
                @else
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desription" value="{{ $user->description }}" rows="3"></textarea>
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