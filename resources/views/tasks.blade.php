@extends('layout')

    @section('content')
        
        @foreach ($tasks as $task)

            <div class="card text-white m-3">
                <div class="card-body p-0">
                <div class="top d-flex">
                    <h4 class="card-title bg-primary">{{ $task->title}}</h4>
                    <a class="btn btn-default btn-sm ml-auto" href="{{route('task.edit', $task->id)}}">Edit</a>

                    <form action="{{route('task.destroy', $task->id)}}" method="post">

                        {{csrf_field()}}
                        {{method_field('delete')}}

                        <input class="btn btn danger" type="submit" value="delete">
                    </form>
                </div>
                <p class="card-text text-primary">{{$task->description}}</p>
                </div>
            </div>

        @endforeach

    @endsection

       
    