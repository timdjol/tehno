@extends('layouts.master')

@section('title', 'Корзина')

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
                <div class="catalog__address-path">Корзина</div>
                <!-- <div class="catalog__address-price">Показать:</div> -->
            </div>
            <div class="shoppingcart">
                <div class="shoppingcart__cards">
                    <!-- карточка товара -->
                    @foreach($order->products as $product)
                        <div class="shoppingcart__card">
                            <div class="shoppingcart__card-photo">
                                <img
                                        src="{{ Storage::url($product->image) }}"
                                        alt=""
                                />
                            </div>
                            <div class="shoppingcart__descp">
                                <p>
                                    <b
                                    >{{ $product->title }}</b
                                    >
                                </p>

                                <p>{{ $product->short }}</p>
                            </div>

                            <div class="shoppingcart__card-price">
                                <div class="shoppingcart__card-price-num">
                                    <span>{{ $product->price }} сом</span>
{{--                                    <div class="counter-wrap">--}}
{{--                                        <form action="{{ route('basket-remove', $product) }}" method="post">--}}
{{--                                            <button type="submit" class="btn btn-danger"--}}
{{--                                                    @php--}}
{{--                                                        if($product->countInOrder <= 1){--}}

{{--                                                        }--}}
{{--                                                    @endphp--}}
{{--                                            >-</button>--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                        <span class="badge">{{ $product->countInOrder }}</span>--}}
{{--                                        <form action="{{ route('basket-add', $product) }}" method="post">--}}
{{--                                            <button type="submit" class="btn btn-success">+</button>--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                    <div class="remove">--}}
{{--                                        <a href="{{ route('basket-reset') }}" class="more delete">@lang('basket.clear')</a>--}}
{{--                                    </div>--}}
                                </div>

                                {{--                            <div class="shoppingcart__card-btn">Убрать</div>--}}
                            </div>
                        </div>
                    @endforeach

                </div>



                <div class="shoppingcart__order">
                    <div class="shoppingcart__order-block">
                        <div class="order-title">Итого:</div>
                        <div class="order-sum">{{ $order->getFullSum() }} сом</div>
                    </div>
                    <a href="{{ route('order') }}" class="more btn btn-success">Оформить заказ</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .shoppingcart__order .more {
            display: flex;
            margin: 0 auto;
            padding: 20px 35px;
            background-color: var(--color-orange);
            border-radius: 30px;
            border: none;
            cursor: pointer;
            transition: 0.2s ease;
        }
    </style>

@endsection
