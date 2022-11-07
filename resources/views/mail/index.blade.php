@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Send email to user</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index')}}">Back</a>
        </nav>
        <form action="{{ route('send') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <label for="Name">Name</label>
            <select class="selectpicker form-control" name="email" title="Choose one of the following...">
                <option value="all">All users</option>
                @if(!empty($users))
                    @foreach($users as $user)
                    <option value="{{ $user->email }}">{{ $user->name }}</option>
                    @endforeach
                @endif
            </select>
            <div>
                <label for="Attachment">Attachment</label>
                <input class="form-control" type="file" id="attachment" name="attachment">
            </div>
            <div class="add-button" style="margin-top: 5%;">
                <button type="submit" class="btn btn-primary btn-sm">Send</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection