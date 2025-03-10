<x-layout>

<x-slot:title>Izveidot uzdevumu</x-slot:title>

<h1>Izveidot uzdevumu</h1>

<form method="POST" action="/diaries">
@csrf
  <input name="title" />
  @error("title")
  <p>{{ $message }}</p>
  @enderror
  <input name="body" />
  @error("body")
  <p>{{ $message }}</p>
  @enderror
  <input type="date" name="date" />
  @error("date")
  <p>{{ $message }}</p>
  @enderror
  <button>Saglabāt</button>
</form>

</x-layout>