@extends ('layout')
@section ('content')
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Send email to user</a>
            <a class="btn btn-primary" type="submit" href="{{ route('admin.user.index')}}">Back</a>
        </nav>
        <form style="margin-top: 5%;" method="post">
            @csrf
            <select class="custom-select typedropdown form-control" name="mail">
                <option value="all">Select a user</option>
                @if(!empty($users))
                    @foreach($users as $user)
                    <option value="{{ $user['email'] }}">{{ $user['name'] }}</option>
                    @endforeach
                @endif
                </select>
            <div class="add-button" style="margin-top: 5%;">
                <button type="submit" class="btn btn-primary btn-sm">Send</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection