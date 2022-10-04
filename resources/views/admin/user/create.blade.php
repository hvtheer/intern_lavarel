@extends ('layout')
@section ('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create a User</a>
            <a class="btn btn-primary" type="submit" href="{{ route('admin.user.index')}}">Back</a>
        </nav>

        <form action="{{ route('admin.user.store') }}" method="post">
            @csrf
            {{-- @if ($errors->any())
                <div class="alert alert-danger text-center ">
                    Vui lòng kiểm tra lại dữ liệu
                </div>
            @endif --}}
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name')}}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputEmail">Email</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" value="{{ old('email')}}">
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
                <input type="text" class="form-control" id="InputAddress" name="address" value="{{ old('address')}}">
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Facebook link</label>
                <input type="text" class="form-control" id="facebook" placeholder="https://example.com" name="facebook" value="{{old('facebook')}}">
                @error('facebook')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Youtube</label>
                <input type="text" class="form-control" id="youtube" placeholder="https://example.com" name="youtube" value="{{old('youtube')}}">
                @error('youtube')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button type="submit" class="btn btn-secondary btn-sm">Reset</button>
            </div>
        </form>
    </div>
</div>
<!--main-->

@endsection