@extends('layouts.master')

@section('title', 'Каталог')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <div class="page products category">
        <div class="container">
            @if(session()->has('success'))
                <p class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{ session()->get('warning') }}</p>
            @endif
            <div class="row">
                <div class="col-md-3">
                    <h3>Фильтр</h3>
                    <div class="filters">
                        <form action="{{ route('catalog') }}" method="get">
                            <div class="form-group form-label">
                                <label for="price_from">@lang('main.price_from')</label>
                                <input type="number" name="price_from" id="price_from"
                                       value="{{ request()->price_from }}">
                            </div>
                            <div class="form-group form-label">
                                <label for="price_to">@lang('main.price_to')</label>
                                <input type="number" name="price_to" label="price_to" value="{{ request()
                                        ->price_to }}">
                            </div>
                            <div class="form-group btn-wrap">
                                <button class="more btn btn-primary">@lang('main.filter')</button>
                                <a href="{{ route('catalog') }}" class="reset btn btn-danger">@lang('main.reset')</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1>Каталог</h1>
                    @if($skus->isNotEmpty())
                        @foreach($skus->unique('product_id') as $sku)
                            @include('layouts.card', compact('sku'))
                        @endforeach
                        <div class="row">
                            <div class="col-md-12">
                                {{ $skus->links('pagination::bootstrap-4') }}
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
