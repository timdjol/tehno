@extends('layouts.master')

@section('title', $skus->product->title)

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <div class="page single">
        <div class="container">
            <div class="row">
                    <div class="col-md-4 col-12">
                        <a href="{{ Storage::url($skus->product->image) }}">
                            <img src="{{ Storage::url($skus->product->image) }}" alt="">
                        </a>
                        @foreach($images as $image)
                            <div class="col-md-6">
                                <a href="{{ Storage::url($image->image) }}">
                                    <div class="img" style="background-image: url({{ Storage::url($image->image) }})
                                "></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                <div class="col-md-8">
                    <h1>{{ $skus->product->title }}</h1>
                    <div class="cat">
                        <a href="{{ route('category', $skus->product->category->code) }}">{{
                    $skus->product->category->title }}</a>
                    </div>
                    <div class="price">{{ $skus->price }} сом</div>
                    @if($skus->isAvailable() == 1)
                        <div class="stock in">В наличии</div>
                    @endif


                    @isset($skus->product->properties)
                        <div class="properties">
                            @foreach($skus->propertyOptions as $propertyOption)
                                <div class="text">{{ $propertyOption->property->title }}: {{ $propertyOption->title
                                }}</div>
                            @endforeach
                        </div>
                    @endisset


                    <div class="colors">
                        <ul>
                            @foreach($relatedsku as $sku)
                                @isset($sku->product->properties)
                                    @foreach($sku->propertyOptions->where('property_id', 1) as $propertyOption)
                                        <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code,
                                         $sku]) }}"><span class="color @if($sku->id == $skus->id ){{ 'current' }}@endif"
                                                          style="background-color: {{ $propertyOption->color }}"></span>
                                        </a>
                                    @endforeach
                                @endisset
                            @endforeach
                        </ul>
                    </div>

                    <div class="btn-wrap">
                        <div class="buy">
                            @if($skus->isAvailable())
                                <form action="{{ route('basket-add', $skus) }}" method="post">
                                    <button class="more btn btn-primary" type="submit">Купить</button>
                                    @csrf
                                </form>
                            @else
                                <span>Недоступен</span><br>
                                <span>Подписаться</span>
                                @if($errors->get('email'))
                                    <div class="alert alert-warning">
                                        {!! $errors->get('email')[0] !!}
                                    </div>
                                @endif
                                <form action="{{ route('subscription', $skus) }}" method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                    @csrf
                                    <button class="more">@lang('product.send')</button>
                                </form>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="descr">
                        <h2>Описание</h2>
                        {!! $skus->product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



    @if($category->products->map->skus->flatten()->isNotEmpty())
        <div class="products related">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Похожие</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($category->products->map->skus->flatten()->unique('product_id') as $sku)
                        @if($sku->product->id === $skus->product->id)

                        @else
                            <div class="col-md-3">
                                @include('layouts.card', compact('sku'))
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="products view viewblock">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Недавно просмотренные</h2>
                </div>
            </div>
            @foreach($recentlies->unique('product_id') as $sku)
                @include('layouts.card', compact('sku'))
            @endforeach
        </div>
    </div>

@endsection

