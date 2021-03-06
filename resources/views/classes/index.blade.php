@extends('layouts.master')

@section('content')

<h1>Classes</h1>

<a class="" href="{{ route('class_create') }}">Create</a>

@include('layouts.alerts')

<table class="table table-striped">
  <thead>
    <th>Title</th>
    <th>Number</th>
    <th></th>
    <th></th>
  </thead>

@foreach($classes as $class)
      <tr>
        <td>{{$class['class_title']}}</td>
        <td>{{$class['class_num']}}</td>
        <td>
            <form action="{{action('ClassesController@destroy', $class['id'])}}" method="post">
              @csrf
              <input name="_method" type="hidden" value="EDIT">
              <button class="btn btn-warning" type="submit">Edit</button>
            </form>
          </td>
        <td>
          <form action="{{action('ClassesController@destroy', $class['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        
      </tr>
      @endforeach

@endsection