    @extends('layout')
    
    @section('content')


        {{-- <h2>Add Task</h2>   --}}
    
    <form action="/tasks" method="post">

        {{ csrf_field() }}

        <legend>New Task</legend>

        <div class="form-group">
          <label for="title">Task Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Give the task a title</small>
        </div>

        <div class="form-group">
          <label for="description">Task Description</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    
          
    @endsection

    