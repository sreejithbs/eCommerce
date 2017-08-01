@extends('partials.backEnd.master')
@section('heading', 'Admin Dashboard')
@section('content')

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box fadeInDown animated">
            <div class="bg-icon bg-icon-primary pull-left">
                <i class="md md-attach-money text-primary"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">31,570</b></h3>
                <p class="text-muted">Total Revenue</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-pink pull-left">
                <i class="md md-add-shopping-cart text-pink"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">280</b></h3>
                <p class="text-muted">Today's Sales</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-info pull-left">
                <i class="md md-equalizer text-info"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">0.16</b>%</h3>
                <p class="text-muted">Conversion</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-success pull-left">
                <i class="md md-remove-red-eye text-success"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">64,570</b></h3>
                <p class="text-muted">Today's Visits</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
