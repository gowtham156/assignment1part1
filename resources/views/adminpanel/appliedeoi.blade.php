@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Express of Intrest of Students</div></div></div>

                <div class="panel-body">
                 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Number</th>
        <th>Student Name</th>
        <th>Student Intention</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
          @if(count($sid)>0)
           
               @foreach ($sid as $value) 
                  <tr>
      <td>{{$value->student_number}}</td>
        <td>{{$value->name}}</td>
      <td>{{$value->intent}}</td>
        <td><a href="{{url('activate/'.$value->student_number.'/')}}" class='btn btn-xs btn-info pull-right'>Activate</a></a></td>
    </tr>
       @endforeach
        @endif
      </tr>
    </tbody>
  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
