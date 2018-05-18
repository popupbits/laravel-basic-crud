@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <span class="badge badge-danger">{{$todo->due}}</span>
    <hr />
    <p>{{$todo->body}}</p>

<a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
<br />

{!! Form::open(['action' => ['TodosController@destroy',$todo->id], 'method'=>'post', 'class'=>'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
{!! Form::close() !!}
@endsection