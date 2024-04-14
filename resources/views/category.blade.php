@extends('layouts.master')

@section('title')

@section('content')


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"
            integrity="sha512-cWEytOR8S4v/Sd3G5P1Yb7NbYgF1YAUzlg1/XpDuouZVo3FEiMXbeWh4zewcYu/sXYQR5PgYLRbhf18X/0vpRg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css"
          integrity="sha512-bjwk1c6AQQOi6kaFhKNrqoCNLHpq8PT+I42jY/il3r5Ho/Wd+QUT6Pf3WGZa/BwSdRSIjVGBsPtPPo95gt/SLg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <div class="main category">
        <div class="container">
            @if(session()->has('success'))
                <p class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{ session()->get('warning') }}</p>
            @endif
            <div class="catalog__address">
                <div class="catalog__address-path">
                    <h1>{{$category->title }}</h1>
                </div>
                <!-- <div class="catalog__address-price">Показать:</div> -->
            </div>
            <div class="catalog">
                <div class="left-panel">
                    @include('layouts.filter')
                </div>
                <div class="right-panel">
                    @if($category->products->isNotEmpty())
                        @foreach($category->products->sortByDesc('updated_at') as $product)
                            @include('layouts.card', compact('product'))
                        @endforeach
                    @else
                        <div class="not-found">Продукций не найдено</div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection

