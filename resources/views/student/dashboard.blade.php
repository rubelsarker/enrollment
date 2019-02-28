@extends('student_layout')
@section('content')
    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">All students</h2>
                @php
                    $student=DB::table('student_table')
                    ->count('student_id');
                @endphp
                <p style="font-size: 30px; font-weight: bold;text-align: center; color: green;">{{$student}}</p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-1" class="card-float-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">All Teacher</h2>
                @php
                    $teacher=DB::table('teachers_table')
                    ->count('teacher_id');
                @endphp
                <p style="font-size: 30px; font-weight: bold;text-align: center; color: greenyellow;">{{$teacher}}</p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-2" class="card-float-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Tution Fee</h2>
                <p style="font-size: 30px; font-weight: bold;text-align: center; color: greenyellow;">10000</p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-3" class="card-float-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Revenue</h2>
                <p style="font-size: 30px; font-weight: bold;text-align: center; color: greenyellow;">500</p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-4" class="card-float-chart"></div>
            </div>
        </div>
    </div>
    </div>





@endsection