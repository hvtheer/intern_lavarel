@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
    @if(empty($permission))
            <a class="navbar-brand">Create a Permission</a>
            <a class="btn btn-primary" type="submit" href="{{ route('permission.index') }}">Back</a>
        </nav>
        <form action="{{ route('permission.store') }}" method="post">
    @else
            <a class="navbar-brand">Edit a Permission Group</a>
            <a class="btn btn-primary" type="submit" href="{{ route('permission.index') }}">Back</a>
        </nav>
        <form action="{{ route('permission.update', $permission->id) }}"  method="post">
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
                @if(empty($permission))
                <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name') }}">
                @else
                <input type="text" class="form-control" id="InputName" name="name" value="{{ $permission->name }}">
                @endif
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputKey">Key</label>
                @if(empty($permission))
                <input type="text" class="form-control" id="InputKey" name="key" value="{{ old('key') }}">
                @else
                <input type="text" class="form-control" id="InputKey" name="key" value="{{ $permission->key }}">
                @endif
                @error('key')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputPGId">PG ID</label>
                @if(empty($permission))
                <input type="text" class="form-control" id="InputPGId" name="permission_group_id" value="{{ old('permission_group_id') }}">
                @else
                <input type="text" class="form-control" id="InputPGId" name="permission_group_id" value="{{ $permission->permission_group_id }}">
                @endif
                @error('permission_group_id')
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