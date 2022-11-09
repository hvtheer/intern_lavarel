@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
    @if(empty($permissionGroup))
            <a class="navbar-brand">{{__('permission-group.createAPermissionGroup')}}</a>
            <a class="btn btn-primary" type="submit" href="{{ route('permission-group.index') }}">{{__('button.back')}}</a>
        </nav>
        <form action="{{ route('permission-group.store') }}" method="post">
    @else
            <a class="navbar-brand">{{__('permission-group.editAPermissionGroup')}}</a>
            <a class="btn btn-primary" type="submit" href="{{ route('permission-group.index') }}">{{__('button.back')}}</a>
        </nav>
        <form action="{{ route('permission-group.update', $permissionGroup->id) }}"  method="post">
        @method('PUT')
    @endif
            @csrf
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif

            <div class="form-group">
                <label for="InputName">{{__('permission-group.name')}}</label>
                @if(empty($permissionGroup))
                <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name') }}">
                @else
                <input type="text" class="form-control" id="InputName" name="name" value="{{ $permissionGroup->name }}">
                @endif
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">{{__('button.save')}}</button>
            </div>
        </form>
    </div>
</div>
@endsection