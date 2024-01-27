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
                                <h5 class="m-b-10">{{ Auth::user()->name }}  - Your Result Shit
                                </h5>
                            </div> 
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home px-3"></i>Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#!">Result Shit</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Your Result Shit</h5>
                                    <span class="d-block m-t-5"></span>
                                </div>
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Si_No</th>
                                                    <th>Exam Name</th>
                                                    <th>Exam Mark</th>
                                                    <th>Exam Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key =>  $item)
                                                <tr>
                                                    <td>{{$key + 1 }}</td>
                                                    <td>{{ $item->exam_id }}</td>
                                                    <td>{{ $item->mark }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Customers end -->
            
            <!-- [ Main Content ] end -->

        </div>
    </div>
@endsection
