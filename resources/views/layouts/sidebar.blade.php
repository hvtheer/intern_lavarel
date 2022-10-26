<!-- sidebar -->
<div class="col-md-2 sidebar">
    <div class="menu">
        <p id="head-sidebar">System</p>
        <a href="{{ route('user.index') }}">
            <p>User management</p>
        </a>
        <a href="{{ route('role.index') }}">
            <p>Role management</p>
        </a>
        <a href="{{ route('permission.index') }}">
            <p>Permission management</p>
        </a>
        <p id="head-sidebar">Catalog</p>
        <a href="{{ route('product.index') }}">
            <p>Product management</p>
        </a>
        <a href="{{ route('category.index') }}">
            <p>Category management</p>
        </a>
        <p id="head-sidebar">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Log out') }}</p>
        </a>
        </p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
    </div>
</div>
<!-- /sidebar -->