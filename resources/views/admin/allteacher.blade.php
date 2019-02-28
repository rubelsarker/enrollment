@extends('layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">All Teacher </h2>
            <p class="alert-success">
                <?php
                $exception=Session::get('exception');
                if($exception){
                    echo $exception;
                    Session::put('exception',null);
                }
                ?>

            </p>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>

                            <th>Department</th>
                            <th>Action</th>



                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allteacher_info as $v_teacher)
                            <tr>
                                <td>{{$v_teacher->teacher_id}}</td>
                                <td>{{$v_teacher->teacher_name}}</td>
                                <td>{{$v_teacher->teacher_address}}</td>
                                <td>{{$v_teacher->teacher_phone}}</td>

                                <td>
                                    @if($v_teacher->teacher_department==1)
                                        {
                                        <span class="label label-success">{{'CSE'}}</span>}
                                    @elseif($v_teacher->teacher_department==2){
                                    <span class="label label-success">{{'EEE'}}</span>}
                                    @else
                                        <span class="label label-success">{{'not defined'}}</span>}
                                    @endif
                                </td>


                                <td>

                                    <a href="#" id="delete"> <button class="btn btn-outline-danger">Delete</button></a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

