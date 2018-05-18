@extends('layouts.app')

@section('content')
    @if(count($todos) > 0)
        <div class="list-group">
            @foreach($todos as $todo)
                <div class="list-group-item">
                    <h3>
                        <input type="checkbox" {{$todo->done ? 'checked':''}} />
                        <a href="todo/{{$todo->id}}">
                            {{$todo->text}}
                        </a>
                        <span class="badge badge-pill badge-primary">{{$todo->due}}</span>
                    </h3>
                
                </div>
            @endforeach
        </div>
    @endif
@endsection