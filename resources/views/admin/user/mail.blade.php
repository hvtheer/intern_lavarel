@extends ('layout')
@section ('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Send email to user</a>
            <a class="btn btn-primary" type="submit" href="{{url('admin/user')}}">Back</a>
        </nav>
        <form style="margin-top: 5%;" method="post">
            <div class="select">
                <select class="custom-select col-12" name="email" required>
                    <option selected value="all_user">Select a User or All</option>
                    {{-- @foreach($users as $user)
                        <option value="{{$user['email']}}">{{$user['name']}}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">Send</button>
            </div>
        </form>
    </div>
</div>
<!--main-->

@endsection