@extends('backend.layouts.app')
@section('title')
    Exam - Result
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
                                <h5 class="m-b-10">{{ $examName->name }} - Exam
                                </h5>
                            </div> 
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home px-3"></i>Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#!">{{ $examName->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                          
                            <!-- widget-success-card start -->
                            <div class="card flat-card widget-purple-card">
                                <div class="row-table">
                                    <div class="col-md-6 card-body">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>{{ $questions }} / {{ $data->mark }}</h4>
                                        <h6>Congratulations ! for Your Achievements</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- widget-success-card end -->
                        </div>
                        <div class="col-md-6">
                          
                            <!-- widget-success-card start -->
                            <div class="card ">
                                <div class="row-table">
                                    <div class="col-md-6 card-body">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>Math - Exam</h4>
                                        <a href=""><h6 class="text-primary">This is Your New Exam Link</h6></a>
                                    </div>
                                </div>
                            </div>
                            <!-- widget-success-card end -->
                        </div>
                    </div>
                </div>

                <!-- Latest Customers end -->
            
            <!-- [ Main Content ] end -->

        </div>
    </div>
@endsection
