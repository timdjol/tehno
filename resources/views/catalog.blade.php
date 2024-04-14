@extends('layouts.master')

@section('title', 'Каталог')

@section('content')

    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif


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
                    <div class="filter__title">
                        <img
                                class="filter__icon"
                                src="{{route('index')}}/img/front/icons/icon_filter.svg"
                                alt=""
                        />
                        <p>ФИЛЬТР</p>
                    </div>

                    <form action="{{ route('catalog') }}" method="get">

                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <p>Цена от</p>
                                <img
                                        class="dropdown-icon"
                                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                                        alt=""
                                />
                            </div>
                            <div class="dropdown-menu">
                                <label
                                ><input
                                            class="dropdown-menu-inputtext"
                                            type="text" name="price_from" value="{{ request()->price_from }}"
                                    />

                                </label>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <p>Цена до</p>
                                <img
                                        class="dropdown-icon"
                                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                                        alt=""
                                />
                            </div>
                            <div class="dropdown-menu">
                                <label
                                ><input
                                            class="dropdown-menu-inputtext"
                                            type="text" name="price_to" value="{{ request()->price_to }}"
                                    />

                                </label>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <p>Тип</p>
                                <img
                                        class="dropdown-icon"
                                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                                        alt=""
                                />
                            </div>
                            <div class="dropdown-menu">
                                <label
                                ><input type="checkbox" name="type"/>
                                    <p>Однодверный</p>
                                </label>

                                <label
                                ><input type="checkbox" name="type"/>
                                    <p>Двухдверный</p>
                                </label>

                                <label
                                ><input type="checkbox" name="type"/>
                                    <p>Многодверный</p>
                                </label>

                                <label
                                ><input type="checkbox" name="type"/>
                                    <p>Встраиваемый</p>
                                </label>

                                <label
                                ><input type="checkbox" name="type"/>
                                    <p>Отдельностоящий</p>
                                </label>
                            </div>
                        </div>

                        <!-- фильтр -->
                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <p>Количество камер</p>
                                <img
                                        class="dropdown-icon"
                                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                                        alt=""
                                />
                            </div>
                            <div class="dropdown-menu">
                                <label
                                ><input type="checkbox" name="camera"/>
                                    <p>Однодверный</p>
                                </label>

                                <label
                                ><input type="checkbox" name="camera"/>
                                    <p>Двухдверный</p>
                                </label>

                                <label
                                ><input type="checkbox" name="camera"/>
                                    <p>Многодверный</p>
                                </label>

                                <label
                                ><input type="checkbox" name="camera"/>
                                    <p>Встраиваемый</p>
                                </label>

                                <label
                                ><input type="checkbox" name="camera"/>
                                    <p>Отдельностоящий</p>
                                </label>
                            </div>
                        </div>

                        <!-- фильтр -->
                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <p>Высота</p>
                                <img
                                        class="dropdown-icon"
                                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                                        alt=""
                                />
                            </div>
                            <div class="dropdown-menu">
                                <label
                                ><input
                                            class="dropdown-menu-inputtext"
                                            type="text" name="height" value="{{ request()->height }}"
                                    />
                                    <p>см</p>
                                </label>
                            </div>
                        </div>

                        <!-- фильтр -->
                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <p>Ширина</p>
                                <img
                                        class="dropdown-icon"
                                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                                        alt=""
                                />
                            </div>
                            <div class="dropdown-menu">
                                <label
                                ><input
                                            class="dropdown-menu-inputtext"
                                            type="text" name="width" value="{{ request()->width }}"
                                    />
                                    <p>см</p>
                                </label>
                            </div>
                        </div>


                        <div class="form-group btn-wrap">
                            <button class="more btn btn-primary">@lang('main.filter')</button>
                            <a href="{{ route('catalog') }}" class="reset btn btn-danger">@lang('main.reset')</a>
                        </div>
                    </form>
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

    <style>
        .catalog form button, .catalog form .reset {
            color: var(--color-white);
            background-color: var(--color-blue-light);
            padding: 10px 30px;
            border-radius: 50px;
            font-size: var(--font-size-5);
            font-weight: var(--font-regular);
            text-align: center;
            text-transform: uppercase;
            transition: 0.2s ease;
            border: none;
            display: block;
            margin-top: 20px;
            margin-left: 20px
        }

        .catalog form .reset {
            background-color: #faca00;
            color: #000;
            width: auto;
            display: inline-block;
            padding: 2px 30px;
            margin-top: 10px;
        }
    </style>

@endsection
