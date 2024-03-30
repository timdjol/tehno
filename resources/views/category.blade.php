@extends('layouts.master')

@section('title', $category->title)

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="page products category">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <h4>Фильтр</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1>{{$category->title }}</h1>
                    @if($category->products->map->skus->flatten()->isNotEmpty())
                        @foreach($category->products->map->skus->flatten()->unique('product_id') as $sku)
                            @include('layouts.card', compact('sku'))
                        @endforeach
                    @else
                        <div class="alert alert-danger">Продукций не найдено</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
