@extends('backend.layouts.app')
@section('title')
    Exam - Paper
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
                                <li class="breadcrumb-item"><a href="#"><i
                                            class="feather icon-home px-3"></i>Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#!">{{ $examName->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="container">
                <div class="row mx-3">
                    <div class="d-flex justify-content-end ">
                        <div style=" background-color: #e2cb1f;
                        padding: 10px;
                        text-align: center;" id="timer-container">
                            <div id="timer"></div>
                        </div>
                    </div>


                    <div class="col-12">
                        <form action="{{ route('examSubmit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="exam_id" value="{{ $examName->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            @foreach ($data as $key =>  $item)
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mt-5">{{$key + 1 }}. {{ $item->name }}</h5>
                                        <h5 class="mt-5">Mark - {{ $item->question_mark }}</h5>
                                    </div>

                                    <hr>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $item->id }}" id="gridRadios1"
                                                        value="{{ $item->ans_one }}" checked="">
                                                    <label class="form-check-label"
                                                        for="">{{ $item->ans_one }}</label>
                                                </div>
                                                <div class="form-check py-2">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $item->id }}" id="gridRadios2"
                                                        value="{{ $item->ans_two }}">
                                                    <label class="form-check-label"
                                                        for="">{{ $item->ans_two }}</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $item->id }}" id="gridRadios3"
                                                        value="{{ $item->ans_three }}">
                                                    <label class="form-check-label"
                                                        for="">{{ $item->ans_three }}</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $item->id }}" id="gridRadios3"
                                                        value="{{ $item->ans_four }}">
                                                    <label class="form-check-label"
                                                        for="">{{ $item->ans_four }}</label>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set the countdown time in seconds
            let countdownTime = 600; // 10 minutes

            // Get elements
            let timerElement = document.getElementById('timer');

            // Function to update the timer display
            function updateTimer() {
                let minutes = Math.floor(countdownTime / 60);
                let seconds = countdownTime % 60;

                timerElement.innerHTML = `Time Remaining: ${minutes}m ${seconds}s`;

                if (countdownTime <= 0) {
                    timerElement.innerHTML = "Time's up!";
                    // Perform actions when the timer reaches zero (e.g., submit the exam)
                } else {
                    countdownTime--;
                }
            }

            // Function to start the countdown timer
            function startTimer() {
                // Update the timer every second
                let timerInterval = setInterval(function() {
                    updateTimer();

                    // Stop the timer when it reaches zero
                    if (countdownTime <= 0) {
                        clearInterval(timerInterval);
                    }
                }, 1000);
            }

            // Start the timer immediately on page load
            startTimer();
        });
    </script>
@endsection
