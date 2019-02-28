@php
    $student=DB::table('student_table')
    ->count('student_id');
@endphp
@extends('student_layout')
@section('content')

    <div class="col-12 col-lg-6 grid-margin" style="margin: 0 auto">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" style="text-align: center;color: #7DA0B1;font-weight: bold;">Setting</h2>
                <p class="alert-success">
                                    @php
                                    $exception=Session::get('exception');
                                       if($exception){
                                         echo $exception;
                                           Session::put('exception',null);
                                      }
                                      @endphp

                </p>
                <form class="forms-sample" method="post" action="{{URL::to('/student_own_update')}}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password"  aria-describedby="emailHelp" value="{{($student_profile->student_password)}}">
                    </div>






                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>






@endsection