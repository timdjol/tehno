@extends('layouts.master')

@section('title', 'Бренды')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="page products catalog category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Бренды</h1>
                </div>
            </div>
            <div class="row">
                @foreach($brands as $brand)
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="catalog-item">
                            <a href="{{ route('brand', $brand->code) }}">
                                {{$brand->title}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
