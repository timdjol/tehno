@extends('layouts.master')

@section('title', $product->title)

@section('content')

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
                    {{ $product->category->title }}
                </div>
                <!-- <div class="catalog__address-price">Показать:</div> -->
            </div>

            <div class="product">
                <div class="product__card">
                    <div class="product__card-bluetitle-up">
                        {{ $product->title }}
                    </div>
                    <div class="product-card" style="gap: 40px">
                        <div class="product-card-img">
                            <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" data-loop="true"
                                 data-autoplay="3000">
                                <img src="{{ Storage::url($product->image) }}" alt="">
                                @foreach($images as $image)
                                    <img loading=lazy src="{{ Storage::url($image->image) }}" alt="">
                                @endforeach

                            </div>
                        </div>

                        <div class="product-info">
                            <h2>
                                {{ $product->title }}
                            </h2>
                            <p>
                                {!! $product->short !!}
                            </p>
                            <div class="cat">Категория: <a href="{{ route('category', $product->category->code) }}">{{
                                $product->category->title }}</a>
                            </div>
                            <div class="brand">Бренд: <a href="{{ route('brand', $product->brand->code) }}">{{
                            $product->brand->title }}</a></div>

                            <div class="product-info-price">
                                <p>Цена:</p>
                                <span> {{ $product->price }} сом</span>
                            </div>

                            @if($product->isAvailable() == 1)
                                <div class="stock in">@lang('product.stock')</div>
                            @endif
                            <form action="{{ route('basket-add', $product) }}" method="post">
                                <button class="more btn btn-primary" type="submit">Добавить в корзину</button>
                                @csrf
                            </form>
                        </div>
                    </div>

                    <div class="product__card-props">
                        @if($product->imgvant1)
                            <div class="product__card-props-item">
                                <img src="{{ Storage::url($product->imgvant1) }}" alt=""/>
                                <p>{{ $product->vantdescr }}</p>
                            </div>
                        @endif
                        @if($product->imgvant2)
                            <div class="product__card-props-item">
                                <img src="{{ Storage::url($product->imgvant2) }}" alt=""/>
                                <p>{{ $product->vantdescr2 }}</p>
                            </div>
                        @endif
                        @if($product->imgvant3)
                            <div class="product__card-props-item">
                                <img src="{{ Storage::url($product->imgvant3) }}" alt=""/>
                                <p>{{ $product->vantdescr3 }}</p>
                            </div>
                        @endif
                        @if($product->imgvant4)
                            <div class="product__card-props-item">
                                <img src="{{ Storage::url($product->imgvant4) }}" alt=""/>
                                <p>{{ $product->vantdescr4 }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="product__card-description-one">
                        <div class="product__text-center">
                            {!! $product->descr1 !!}
                        </div>
                        <div class="product__title-img">
                            <img src="{{ Storage::url($product->imagedescr1) }}" alt=""/>
                        </div>
                    </div>

                    <div class="product__card-description-one">
                        <div class="product__text-center">
                            {!! $product->descr2 !!}
                        </div>
                        <div class="product__title-img">
                            <img src="{{ Storage::url($product->imagedescr2) }}" alt=""/>
                        </div>
                    </div>

                    <div class="product__card-description">
                        <div class="product__info">
                            <div class="product__text">
                                {!! $product->descr3 !!}
                            </div>
                        </div>
                        <img src="{{ Storage::url($product->imagedescr3) }}" alt=""/>
                    </div>

                    <div class="product__card-description">
                        <img src="{{ Storage::url($product->imagedescr4) }}" alt=""/>
                        <div class="product__info">
                            <div class="product__text">
                                {!! $product->descr4 !!}
                            </div>
                        </div>
                    </div>

                    <div class="product__card-description">
                        <div class="product__info">
                            <div class="product__text">
                                {!! $product->descr5 !!}
                            </div>
                        </div>
                        <img src="{{ Storage::url($product->imagedescr5) }}" alt=""/>
                    </div>

                    <div class="product__card-description">
                        <img src="{{ Storage::url($product->imagedescr6) }}" alt=""/>
                        <div class="product__info">
                            <div class="product__text">
                                {!! $product->descr6 !!}
                            </div>
                        </div>
                    </div>

                    <div class="product__card-description-one">
                        <div class="product__text-center">
                            {!! $product->descr7 !!}
                        </div>
                        <img src="{{ Storage::url($product->imagedescr7) }}" alt=""/>
                        <!-- <div class="product__title-img">

                        </div> -->
                    </div>

                    <div class="product__card-bluetitle-bottom"></div>
                </div>
            </div>
        </div>
    </div>



    <style>
        .product__card-description-one img {
            margin: 10px 0;
        }

        .single .properties {
            margin: 20px 0;
        }

        .single .colors .color {
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            margin-right: 8px;
            position: relative;
            border: 1px solid #ddd;
        }

        .single .colors .color.current::after {
            content: "";
            position: absolute;
            width: 40px;
            height: 40px;
            left: -5px;
            top: -5px;
            border: 1px solid #ab8e83;
            border-radius: 50%;
        }

        .single .colors a {
            text-decoration: none;
        }
    </style>

@endsection

