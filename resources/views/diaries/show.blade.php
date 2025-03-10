
<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <p>raksts: {{ $diary->body }}</p>
  <br><p>Datums: {{ $diary->date }}</p>
</x-layout>