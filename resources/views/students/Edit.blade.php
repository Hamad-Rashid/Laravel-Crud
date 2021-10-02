@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Students</h2>
        </div>
        <div class="pull-right">
        <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input. <br><br>
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif

<form action="{{route('students.update','$student->id')}}" method="POST">

@csrf
@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Name:</strong>
            <input type="text" class="form-control" value="{{$student->studname}}" name="studname" placeholder="Student Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course</strong>
            <input type="text" class="form-control" value="{{$student->course}}" name="course" placeholder="course">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fee</strong>
            <input type="text" class="form-control" value="{{$student->fee}}" name="fee" placeholder="fee">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection