<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel=“stylesheet” href=“https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css”>
<title>Intern Laravel</title>

</head>
<body>
    <div class="header">
        <b id="header-left">GOL SOFT</b>
        <p id="header-right">HEADER</p>
    </div>
    <div class="sidebar">
        <div class="menu">
            <p id="head-sidebar">System</p>
            <a href="{{ route('admin.user.index') }}">
                <p>User management</p>
            </a>
            <a href="{{ route('admin.role.index') }}">
                <p>Role management</p>
            </a>
            <a href="{{ route('admin.permission.index') }}">
                <p>Permission management</p>
            </a>
            <p id="head-sidebar">Catalog</p>
            <a href="{{ route('admin.product.index') }}">
                <p>Product management</p>
            </a>
            <a href="{{ route('admin.category.index') }}">
                <p>Category management</p>
            </a>
        </div>
    </div>
    @yield('content')
    <div class="container footer">
        <div>
            <p>FOOTER</p>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>