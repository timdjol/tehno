@extends('layouts.master')

@section('title', 'Каталог')

@section('content')

    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"
            integrity="sha512-cWEytOR8S4v/Sd3G5P1Yb7NbYgF1YAUzlg1/XpDuouZVo3FEiMXbeWh4zewcYu/sXYQR5PgYLRbhf18X/0vpRg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css"
          integrity="sha512-bjwk1c6AQQOi6kaFhKNrqoCNLHpq8PT+I42jY/il3r5Ho/Wd+QUT6Pf3WGZa/BwSdRSIjVGBsPtPPo95gt/SLg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <div class="main">
        <div class="container">
            <div class="catalog__address">
                <div class="catalog__address-path">
                    Каталог
                </div>
                <!-- <div class="catalog__address-price">Показать:</div> -->
            </div>
            <div class="catalog">
                <div class="left-panel">
                    @include('layouts.filter')
                </div>
                <div class="right-panel">
                    @if($products->isNotEmpty())
                        @foreach($products as $product)
                            @include('layouts.card', compact('product'))
                        @endforeach
                        <div class="row">
                            <div class="col-md-12">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    @else
                        <h2>@lang('main.not_found')</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
