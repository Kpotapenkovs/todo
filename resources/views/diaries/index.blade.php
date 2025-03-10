<x-layout>

<x-slot:title> diaries </x-slot:title>

<h1 class="virsraksts_center">diaries</h1>

<h2><a href="/diaries/create" class="a">izveidot</a></h2>

<div>
  

<ul>
  @foreach ($diaries as $diary)
  <li><br><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a><hr></li>
  @endforeach
</ul>

</div>


</x-layout>