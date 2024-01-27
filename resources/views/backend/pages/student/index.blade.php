@extends('backend.layouts.app')
@section('title')
    Exam One
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
                                <h5 class="m-b-10">Exam One</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Exam One</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="container">
                <div class="row mx-3">
                    <div class="col-12">
                        <form action="{{ route('submit.examOne') }}">
                            @foreach ($data as $item)
                                <div class="col-12">
                                <h5 class="mt-5">{{ $item->id }}. {{ $item->question }}</h5>
                                <hr>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="{{ $item->id }}"
                                                    id="gridRadios1" value="{{ $item->ans_one }}" checked="">
                                                <label class="form-check-label" for="">{{ $item->ans_one }}</label>
                                            </div>
                                            <div class="form-check py-2">
                                                <input class="form-check-input" type="radio" name="{{ $item->id }}"
                                                    id="gridRadios2" value="{{ $item->ans_two }}">
                                                <label class="form-check-label" for="">{{ $item->ans_two }}</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="{{ $item->id }}"
                                                    id="gridRadios3" value="{{ $item->ans_three }}">
                                                <label class="form-check-label" for="">{{ $item->ans_three }}</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="{{ $item->id }}"
                                                    id="gridRadios3" value="{{ $item->ans_four }}">
                                                <label class="form-check-label" for="">{{ $item->ans_four }}</label>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            @endforeach
                            

                            <div class="form-group row pt-5">
                                <div class="col-12">
                                    <button type="submit" class="btn  btn-primary">Submit Your Asnwer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->

        </div>
    </div>
@endsection
