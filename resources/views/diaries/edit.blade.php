<x-layout>

<x-slot:title>
rediģēt
</x-slot:title>

<form method="POST" action="/diaries/{{ $diary->id }}">
@csrf

@method('PUT')

<label>
<br>
rediģēt: 
    <input name="title" value="{{$diary->title}}"/>
    @error("title")
    <p>{{ $message }}</p>
    @enderror
    <br>
    <br>
<label>
raksts:
    <input name="body" value="{{$diary->body}}"/>
    @error("body")
    <p>{{ $message }}</p>
    @enderror
</label>
<br>
<br>
</label>

<label>
  datums:
  <input name="date" type="date" value="{{$diary->date}}">
  @error("date")
  <p>{{ $message }}</p>
  @enderror   
</label>
<br>
  <button>rediģēt</button>
</form>

</x-layout>