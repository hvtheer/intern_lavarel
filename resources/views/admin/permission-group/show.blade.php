@extends('layouts.master')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <div class="card bg-light">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand">{{__('permission-group.information')}}</a>
                    <div>
                        <a class="btn btn-primary" type="submit" href="{{ route('permission-group.create') }}">
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
                            <th style="width: 20%;" scope="col">{{__('permission-group.id')}}</th>
                            <th style="width: 30%;" scope="col">{{__('permission-group.name')}}</th>
                            <th style="width: 25%;" scope="col">{{__('permission-group.createdAt')}}</th>
                            <th style="width: 25%;" scope="col">{{__('permission-group.updatedAt')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($permissionGroup))
                        <tr>
                            <td>
                                {{$permissionGroup->id}}
                            </td>
                            <td>
                                {{$permissionGroup->name}}
                            </td>
                            <td>
                                {{$permissionGroup->created_at}}
                            </td>
                            <td>
                                {{$permissionGroup->updated_at}}
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
