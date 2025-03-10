
<x-layout>

<x-slot:title> todos </x-slot:title>

<h1 class="virsraksts_center">todos</h1>


<form>

<h2><a href="/todos/create" class="a">izveidot</a></h2>

</form>

<div>


  <ul>
    @foreach ($todos as $todo)
      <li><br><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a><hr></li>
    @endforeach
  </ul>


</div>

</x-layout>
