<!-- sidebar -->
<div class="col-md-2 sidebar">
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
<!-- /sidebar -->