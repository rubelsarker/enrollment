@extends('layout')
@section('content')

    <div class="col-12 col-lg-6 grid-margin" style="margin: 0 auto">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" style="text-align: center;color: #7DA0B1;font-weight: bold;">Add Student</h2>
                <p class="alert-success">
                    <?php
                    $exception=Session::get('exception');
                    if($exception){
                        echo $exception;
                        Session::put('exception',null);
                    }
                    ?>

                </p>
                <form class="forms-sample" method="post" action="{{URL::to('/update_student',$student_profile->student_id)}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" name="student_name"  aria-describedby="emailHelp" value="{{($student_profile->student_name)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Father Name</label>
                        <input type="text" class="form-control p-input" name="student_fathername"  aria-describedby="emailHelp" value="{{($student_profile->student_fathername)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Mother Name</label>
                        <input type="text" class="form-control p-input" name="student_mothername"  aria-describedby="emailHelp" value="{{($student_profile->student_mothername)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control p-input" id="exampleInputEmail1" name="student_email" aria-describedby="emailHelp" value="{{($student_profile->student_email)}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control p-input" name="student_phone"  aria-describedby="emailHelp"value="{{($student_profile->student_phone)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control p-input" name="student_address"  aria-describedby="emailHelp"value="{{($student_profile->student_address)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password"  aria-describedby="emailHelp" value="{{($student_profile->student_password)}}">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Admission Year</label>
                        <input type="date" class="form-control p-input" name="student_admissoinyear"  aria-describedby="emailHelp" value="{{($student_profile->student_admissoinyear)}}">
                    </div>



                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection