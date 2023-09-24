@extends('app')

@section('contant')
    <img src={{asset("/image/drapeau.jpg")}} alt="drepeau de mon pays" class="h-32 shadow-md rounded mt-12">
    <h1 class="text-3xl sm:text-5xl font-semibold mt-5 text-indigo-800">Hello from cameroun</h1>
    <p class="text-lg text-gray-500">It's currently {{ date('H:i:s') }}</p>

@endsection
