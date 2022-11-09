@extends ('layouts.master')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">{{__('mail.sendMailToUser')}}</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index')}}">{{__('button.back')}}</a>
        </nav>
        <form action="{{ route('send') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <label for="Name">{{__('mail.name')}}</label>
            <select class="selectpicker form-control" name="email">
                <option value="all">{{__('mail.allUsers')}}</option>
                @if(!empty($users))
                    @foreach($users as $user)
                    <option value="{{ $user->email }}">{{ $user->name }}</option>
                    @endforeach
                @endif
            </select>
            <div>
                <label for="Attachment">{{__('mail.attachment')}}</label>
                <input class="form-control" type="file" id="attachment" name="attachment">
            </div>
            <div class="add-button" style="margin-top: 5%;">
                <button type="submit" class="btn btn-primary btn-sm">{{__('button.send')}}</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection