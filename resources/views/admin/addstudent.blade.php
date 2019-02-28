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
                <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" name="student_name"  aria-describedby="emailHelp" placeholder="Student Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Father Name</label>
                        <input type="text" class="form-control p-input" name="student_fathername"  aria-describedby="emailHelp" placeholder="Student Father Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Mother Name</label>
                        <input type="text" class="form-control p-input" name="student_mothername"  aria-describedby="emailHelp" placeholder="Student Mother Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control p-input" id="exampleInputEmail1" name="student_email" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control p-input" name="student_phone"  aria-describedby="emailHelp" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control p-input" name="student_address"  aria-describedby="emailHelp" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department</label>
                        <select class="form-control p-input" name="student_department">
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password" name="student_password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admission Year</label>
                        <input type="date" class="form-control p-input" name="student_admissoinyear"  aria-describedby="emailHelp" placeholder="Admission Year">
                    </div>

                    <div class="form-group">
                        <label>Upload file</label>
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                <input type="file"  name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection