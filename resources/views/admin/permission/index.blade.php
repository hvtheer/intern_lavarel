@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">{{__('permission.permissionList')}}</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('permission.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg>
                            {{__('button.addNew')}}
                        </a>
                    </div>
                </nav>
                <table class="table table-hover table-bordered bg-white">
                    <thead>
                        <tr>
                            <th style="width: 20%;" scope="col">{{__('permission.id)}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.name')}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.key')}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.PGID')}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($permissions))
                        @foreach($permissions as $permission)
                        <tr>
                            <td>
                                {{$permission->id}}
                            </td>
                            <td>
                                {{$permission->name}}
                            </td>
                            <td>
                                {{$permission->key}}
                            </td>
                            <td>
                                {{$permission->permission_group_id}}
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('permission.edit', $permission->id) }}">{{__('button.edit')}}</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('permission.show', $permission->id) }}">{{__('button.info')}}</a>
                                <form class="d-inline" method="post" action="{{ route('permission.destroy', $permission->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete this permission?')" class="btn btn-danger btn-sm">{{__('button.delete')}}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="pagination justify-content-center">
                    {{ $permissions->links() }}
                </div>
            </div> 
        </div> 
    </div>
</div>

@endsection
