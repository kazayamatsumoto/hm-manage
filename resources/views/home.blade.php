@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('message.hm_manage_system')</div>
                <div class="card-body">
                    <a id='list' href="{{ route('add_top') }}"><i class="fa fa-list" aria-hidden="true"></i><span>@lang('message.hm_manage_add')</span></a>
                </div>
                <div class="card-body">
                    <a id='list' href="/cppu/user_master_list"><i class="fa fa-list" aria-hidden="true"></i><span>@lang('message.Effort_List')</span></a>
                </div>
                <div class="card-body">
                    <a id='list' href="/cppu/user_master_list"><i class="fa fa-list" aria-hidden="true"></i><span>@lang('message.Master_Maintenance')</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
