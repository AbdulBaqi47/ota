@extends('layout.app')
@section('content')
    <div class="col-12">
        <div class="dashboard_header mb_50">
            <div class="row">
                <div class="col-lg-6">
                    <div class="dashboard_header_title">
                        <h3> Admin Dashboard</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dashboard_breadcam text-end">
                        <p><a href="index-2.html">Dashboard</a> <i class="fas fa-caret-right"></i>Overview</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-3 widget-chart">
            <div class="icon-wrapper rounded-circle">
                <div class="icon-wrapper-bg bg-primary"></div>
                <i class="ti-settings text-primary"></i>
            </div>
            <div class="widget-numbers"><span>46k</span></div>
            <div class="widget-subheading">Total Tenants</div>
            <div class="widget-description text-success">
                <i class="fa fa-angle-up ">
                </i>
                <span class="ps-1"><span>176%</span></span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3 widget-chart">
            <div class="icon-wrapper rounded-circle">
                <div class="icon-wrapper-bg bg-danger"></div>
                <i class="ti-settings text-danger"></i>
            </div>
            <div class="widget-numbers"><span>5,82k</span></div>
            <div class="widget-subheading">Subscribed Tenants</div>
            <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                <i class="fa fa-angle-up ">
                </i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3 widget-chart">
            <div class="icon-wrapper rounded-circle">
                <div class="icon-wrapper-bg bg-info"></div>
                <i class="ti-settings text-info"></i>
            </div>
            <div class="widget-numbers"><span>62k</span></div>
            <div class="widget-subheading">Un-Subscribed Tenants</div>
            <div class="widget-description text-info">
                <i class="fa fa-arrow-right ">
                </i>
                <span class="ps-1">175.5%</span>
            </div>
        </div>
    </div>
@endsection
