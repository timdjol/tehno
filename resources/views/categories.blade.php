@extends('layouts.master')

@section('title', 'Категории')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="page products catalog category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Все категории</h1>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="catalog-item">
                            <a href="{{ route('category', $category->code) }}">
                                {{$category->title}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
