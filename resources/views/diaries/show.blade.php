
<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>

  <h2><a href="/diaries/{{$diary->id}}/edit" class="a">rediģēt</a></h2>

  <p>raksts: {{ $diary->body }}</p>
  <br><p>Datums: {{ $diary->date }}</p>

  <form method="POST" action="{{$diary->id}}">
  @csrf
  @method("delete")
  <input type="submit" name="delete" value="dzēst">

  </form>

</x-layout>