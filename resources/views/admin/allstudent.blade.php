@extends('layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">All Student </h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Image</th>
                            <th>Actoin</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allstudent_info as $v_student)
                        <tr>
                            <td>{{$v_student->student_id}}</td>
                            <td>{{$v_student->student_name}}</td>
                            <td>{{$v_student->student_phone}}</td>
                            <td>{{$v_student->student_address}}</td>
                            <td>
                                @if($v_student->student_department==1)
                                    {
                                    <span class="label label-success">{{'CSE'}}</span>}
                                    @elseif($v_student->student_department==2){
                                        <span class="label label-success">{{'EEE'}}</span>}
                                    @else
                                    <span class="label label-success">{{'not defined'}}</span>}
                                    @endif
                            </td>
                            <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius:50% "></td>

                            <td>
                                <a href="{{URL::to('/view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                               <a href="{{URL::to('/edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                               <a href="{{URL::to('/delete/'.$v_student->student_id)}}" id="delete"> <button class="btn btn-outline-danger">Delete</button></a>
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

