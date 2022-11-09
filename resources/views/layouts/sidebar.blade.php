<!-- sidebar -->
<div class="col-md-2 sidebar">
    <div class="menu">
        <p id="head-sidebar">{{__('sidebar.system')}}</p>
        <a href="{{ route('user.index') }}">
            <p>{{__('sidebar.userManagement')}}</p>
        </a>
        <a href="{{ route('role.index') }}">
            <p>{{__('sidebar.roleManagement')}}</p>
        </a>
        <a href="{{ route('permission.index') }}">
            <p>{{__('sidebar.permissionManagement')}}</p>
        </a>
        <a href="{{route('permission-group.index')}}">
            <p>{{__('sidebar.permissionGroupManagement')}}</p>
        </a>
        <p id="head-sidebar">{{__('sidebar.catalog')}}</p>
        <a href="{{ route('product.index') }}">
            <p>{{__('sidebar.productManagement')}}</p>
        </a>
        <a href="{{ route('category.index') }}">
            <p>{{__('sidebar.categoryManagement')}}</p>
        </a>
        <p id="head-sidebar">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('sidebar.logOut') }}</p>
        </a>
        </p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
        <a href="{{ route('lang',['lang' => 'vi']) }}">VI</a>
        <a href="{{ route('lang',['lang' => 'en' ]) }}">EN</a>
    </div>
</div>
<!-- /sidebar -->