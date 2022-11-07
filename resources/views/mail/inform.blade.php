<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')
</head>
<body style ="margin: 50px;">
    <div class="start-header">
        <h1>Hello, {{ $user->name }} </h1>
        <p>This email send from system</p>
        <p>Please check your information. Is it correctly ?</p>
    </div>

    <div class="information">
        <hr>
        <p>Name : </p>
        <p>{{ $user->name }}</p>
        <hr>
        <p>Email : </p>
        <p>{{ $user->email }}</p>
        <hr>
        <p>Address : </p>
        <p>{{ $user->address }}</p>
    </div>
</body>
</html>
