@extends('student_layout')
@php
    function convert_dep($val){
        $value=[
        1=>'CSE',
        2=>'EEE',
        ];
        return $value[$val];
    }
@endphp

@section('content')

    <div class="content-wrapper">
        <h1 class="page-title">User Profile</h1>
        <div class="row user-profile">
            <div class="col-lg-8 side-left">
                <div class="card mb-4">
                    <div class="card-body avatar">
                        <h2 class="card-title">Info</h2>
                        <img src="{{url('')}}/{{$student_profile->student_image}}" alt="">
                        <p class="name">{{strtoupper($student_profile->student_name)}}</p>
                        <p class="designation">-  {{convert_dep($student_profile->student_department)}}  -</p>
                        <a class="email" href="#">{{$student_profile->student_email}}</a>
                        <a class="number" href="#">{{$student_profile->student_phone}}</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body overview">

                        <div class="wrapper about-user">
                            <h2 class="card-title mt-4 mb-3">About</h2>
                            <p>The total information of the student is given below</p>
                        </div>
                        <div class="info-links">
                            <a class="website" href="https://www.bootstrapdash.com/">
                                <i class="icon-globe icon"> Father Name:</i>
                                <span>{{$student_profile->student_fathername}}</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
