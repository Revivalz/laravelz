
<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>

    <x-slot:content>
    {{ $diary->body }}
  </x-slot:content>
  <p>{{ $diary->body }}</p>
</x-layout>
