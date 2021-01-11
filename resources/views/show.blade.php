<div class="row">
    <p class="text-2xl">Titre</p>
    <p>{{ $task->title }}</p>
    <p class="text-2xl">Détail</p>
    <p>{{ $task->detail }}</p>
    <p class="text-2xl">Etat</p>
    <p>
      @if($task->state)
        La tâche a été accomplie !
      @else
        La tâche n'a pas encore été accomplie.
      @endif
    </p>
    <p class="text-2xl">Date de création</p>
    <p>{{ $task->created_at->format('d/m/Y') }}</p>
    @if($task->created_at != $task->updated_at)
      <p class="text-2xl">Dernière mise à jour</p>
      <p>{{ $task->updated_at->format('d/m/Y') }}</p>
    @endif
  </div>
