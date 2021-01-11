@extends('template')
@section('content')

@if (session()->has('message'))
<div class="alert alert-success">
    <strong>Bien noté!</strong>
    {{ session('message') }}
  </div>
@endif
<form method="POST" action="{{ route('tasks.store') }}">
@csrf
    <div class="form-group">
        <label for="title"> Titre:</label>
        <input type="text" class="form-control" type="text" id=title name="title" :value="old('title')" placeholder="Titre de la tâche" required autofocus />
    </div>
    <div class="form-group">
        <label for="detail"> Description de la tache :</label>
        <textarea class="form-control" id="detail" rows="5" style="width: 100%" name="detail" placeholder="detail de la tache "> {{ old('detail') }} </textarea>
    </div>
    <button type="submit" class="btn btn-primary"> envoyer </button>
</form>

@endsection


