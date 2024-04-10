@extends('layouts.master')
@section('title', '404')
@section('content')
<section class="page-404">
    <img src="{{route('index')}}/img/front/404.webp" alt="404" />
    <p class="page-404__text">
        Кажется, вы попали на страницу, которая не существует. Мы
        извиняемся за неудобства! Пожалуйста, вернитесь на главную
        страницу, чтобы продолжить свое путешествие по миру бытовой
        техники
    </p>
    <h4><a href="{{route('index')}}">Вернуться на главную страницу</a></h4>
</section>

<style>
    .page{
        padding: 150px 0;
    }
    .page-not .text-wrap{
        text-align: center;
    }
    .page-not h4{
        margin: 20px 0 40px
    }
    .page-not a{
        color: #ab8e83;
        text-decoration: none;
    }
</style>
@endsection
