@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
    @if (empty($user))
            <a class="navbar-brand">{{__('user.createAUser')}}</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index') }}">{{__('button.back')}}</a>
        </nav>
        <form action="{{ route('user.store') }}" method="post">
    @else
            <a class="navbar-brand">{{__('user.editAUser')}}</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index') }}">{{__('button.back')}}</a>
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
                        <label for="InputName">{{__('user.name')}}</label>
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
                        <label for="InputUsername">{{__('user.username')}}</label>
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
                        <label for="InputEmail">{{__('user.email')}}</label>
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
                        <label for="InputPhone">{{__('user.phone')}}</label>
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
                        <label for="exampleInputPassword1">{{__('user.password')}}</label>
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
                        <label for="exampleInputPassword1">{{__('user.passwordConfirm')}}</label>
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
                <label for="InputAddress">{{__('user.address')}}</label>
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
                <label for="exampleFormControlTextarea1">{{__('user.description')}}</label>
                @if(empty($user))
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" value="{{ old('description') }}" rows="3"></textarea>
                @else
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" value="{{ $user->description }}" rows="3"></textarea>
                @endif
            </div>

            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">{{__('button.save')}}</button>
                <button type="button" class="btn btn-secondary btn-sm">{{__('button.reset')}}</button>
            </div>
        </form>
    </div>
</div>
@endsection