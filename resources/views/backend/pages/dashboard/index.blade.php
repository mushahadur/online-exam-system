@extends('backend.layouts.app')
@section('title')
Admin Dashboard 
@endsection
@section('contain')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
           
              
                <!-- widget-success-card start -->
               
            <div class="col-md-6 mx-auto">
              
                <!-- widget-success-card start -->
                <div class="card ">
                    <div class="row-table">
                        <div class="col-md-6 card-body">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>English - Exam</h4>
                            <a href="{{ route('english') }}"><h6 class="text-primary">This is Your New Exam Link</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection