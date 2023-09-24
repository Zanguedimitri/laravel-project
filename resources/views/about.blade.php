@extends('app')

@section('title',env('APP_NAME').' | About Us ')

@section('contant')
    <img src= {{asset("/image/junior.jpg")}} height="250px" width="250px" class="rounded-full my-12" alt="Il s'agit de moi">
    <P>Built with <span class="text-pink-500" > &hearts; </span> by ZANGUE DIMITRI</P>
    <p>
        <a class="hover:text-indigo-600 underline text-indigo-800" href={{Route("app_home")}}> Revenir à la page d'accueil</a>
    </p>

@endsection
