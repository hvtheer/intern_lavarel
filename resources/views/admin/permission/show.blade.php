@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">{{__('permission.information')}}</a>
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
                            <th style="width: 10%;" scope="col">{{__('permission.id')}}</th>
                            <th style="width: 15%;" scope="col">{{__('permission.name')}}</th>
                            <th style="width: 15%;" scope="col">{{__('permission.key')}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.PGID')}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.createdAt')}}</th>
                            <th style="width: 20%;" scope="col">{{__('permission.updatedAt')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($permission))
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
                                {{$permission->created_at}}
                            </td>
                            <td>
                                {{$permission->updated_at}}
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div> 
        </div> 
    </div>
</div>

@endsection
