@extends('template')
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    <strong>Modification!</strong>
    {{ session('message') }}
</div>
@endif


    <form action="{{route('tasks.update', $task->id) }}" method="post">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="title"> Titre:</label>
        <input type="text" class="form-control" type="text" id=title name="title" :value="old('title', $task->title)" placeholder="Titre de la tâche" required autofocus />
    </div>

    <div class="form-group">
        <label for="detail"> Detail : </label>
        <textarea class="form-control" id="detail" rows="5" style="width: 100%" name="detail" placeholder="detail de la tache "> {{ old('detail' , $task->detail) }} </textarea>
        </textarea>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" id="state" name="state" @if(old('state', $task->state)) checked
         @endif> Tache accomplie</label>
    </div>


    <button type="submit" class="btn btn-success"> modifier </button>


    </form>
@endsection
