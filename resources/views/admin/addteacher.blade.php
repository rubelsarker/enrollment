@extends('layout')
@section('content')

    <div class="col-12 col-lg-6 grid-margin" style="margin: 0 auto">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" style="text-align: center;color: #7DA0B1;font-weight: bold;">Add Teacher</h2>
                <p class="alert-success">
                    <?php
                    $exception=Session::get('exception');
                    if($exception){
                        echo $exception;
                        Session::put('exception',null);
                    }
                    ?>

                </p>
                <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Name</label>
                        <input type="text" class="form-control p-input" name="teacher_name"  aria-describedby="emailHelp" placeholder="Teacher Name">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control p-input" name="teacher_address"  aria-describedby="emailHelp" placeholder="Address">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control p-input" name="teacher_phone"  aria-describedby="emailHelp" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department</label>
                        <select class="form-control p-input" name="teacher_department">
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection