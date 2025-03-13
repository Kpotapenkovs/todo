
<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>

  <h2><a href="/todos/{{$todo->id}}/edit" class="a">rediģēt</a></h2>

  <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
</x-layout>

