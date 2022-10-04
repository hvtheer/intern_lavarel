@extends ('layout')
@section ('content')
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Send email to user</a>
            <a class="btn btn-primary" type="submit" href="{{ route('admin.user.index')}}">Back</a>
        </nav>
        <form style="margin-top: 5%;" action="{{ route('send') }}" method="post">
            @csrf
            <label for="Name">Name</label>
            <select class="selectpicker form-control" name="email">
                <option value="all">Select a user</option>
                @if(!empty($users))
                    @foreach($users as $user)
                    <option value="{{ $user['email'] }}">{{ $user['name'] }}</option>
                    @endforeach
                @endif
            </select>
            {{-- <div style="margin: 5%;">
                <input class="form-control" type="file" id="attachment" name="attachment">
            </div> --}}
            <div class="add-button" style="margin-top: 5%;">
                <button type="submit" class="btn btn-primary btn-sm">Send</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection