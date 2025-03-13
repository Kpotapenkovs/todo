<x-layout>

<x-slot:title>
rediģēt
</x-slot:title>

<form method="POST" action="/todos/{{ $todo->id }}">
@csrf

@method('PUT')

<label>
<br>
rediģēt: 
<input name="content" value="{{$todo->content}}"/>
@error("content")
  <p>{{ $message }}</p>
@enderror
<br>
</label>

<label>
  Izpildīts:
  <input name="completed" type="hidden" value="0">
  <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>
  @error("completed")
  <p>{{ $message }}</p>
  @enderror   
</label>
<br>
  <button>rediģēt</button>
</form>

</x-layout>