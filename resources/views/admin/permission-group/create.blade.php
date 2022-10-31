@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create a Permission Group</a>
            <a class="btn btn-primary" type="submit" href="{{ route('permission-group.index') }}">Back</a>
        </nav>
        <form action="{{ route('permission-group.store') }}" method="post">
            @csrf
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="form-group">
                <label for="InputName">Name</label>
                @if(empty($permissionGroup))
                <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name') }}">
                @else
                <input type="text" class="form-control" id="InputName" name="name" value="{{ $permissionGroup['name'] }}">
                @endif
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection