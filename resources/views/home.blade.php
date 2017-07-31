@extends('layouts.user-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                  @component('components.logged')
                  @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
