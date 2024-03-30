@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="page cart basket">
        <div class="container">
            @if(session()->has('success'))
                <p class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{ session()->get('warning') }}</p>
            @endif
            <div class="col-md-12">
                <h1>@lang('basket.basket')</h1>
                <table>
                    <tr>
                        <td>Изображение</td>
                        <td>Наименование</td>
                        <td>Количество</td>
                        <td>Стоимость</td>
                        <td>Всего</td>
                    </tr>
                    @foreach($order->skus as $sku)
                        <tr>
                            <td>
                                <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code,
                                $sku->id]) }}">
                                    <img src="{{ Storage::url($sku->product->image) }}" alt="{{ $sku->product->title
                                    }}">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code,
                                $sku->id]) }}">{{ $sku->product->title }}</a>
                                @isset($sku->product->properties)
                                    @foreach($sku->propertyOptions as $propertyOption)
                                        <p style="margin-bottom: 0; font-size: 12px;">{{
                                        $propertyOption->property->title}}: {{ $propertyOption->title }}</p>
                                    @endforeach
                                @endisset

                            </td>
                            <td>
                                <form action="{{ route('basket-remove', $sku) }}" method="post">
                                    <button type="submit" class="btn btn-danger">-</button>
                                    @csrf
                                </form>
                                <span class="badge">{{ $sku->countInOrder }}</span>
                                <form action="{{ route('basket-add', $sku) }}" method="post">
                                    <button type="submit" class="btn btn-success">+</button>
                                    @csrf
                                </form>
                            </td>
                            <td>{{ $sku->price }} сом</td>
                            <td>{{ $sku->price * $sku->countInOrder }} сом</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">Итого</td>
                        @if($order->hasCoupon())
                            <td><strike>{{ $order->getFullSum(false) }} сом</strike> <b>{{ $order->getFullSum() }}
                                    сом</b></td>
                        @else
                            <td>{{ $order->getFullSum() }} сом</td>
                        @endif
                    </tr>
                </table>
                @if(!$order->hasCoupon())
                    <div class="row">
                        <div class="col-md-4">
                            <div class="coupon">
                                <form action="{{ route('set-coupon') }}" method="post">
                                    @error ('coupon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Промокод</label>
                                        <input type="text" name="coupon">
                                        <button class="more btn btn-primary">Применить</button>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <p>Купон был использован {{ $order->coupon->code }}</p>
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <div class="btn-wrap orderbtn">
                            <a href="{{ route('order') }}" class="more btn btn-primary">Оформить</a>
                        </div>
                    </div>
                    <div class="col-md-8 btns">
                        <div class="btn-wrap">
                            <ul>
                                <li><a href="{{ route('catalog') }}" class="more btn btn-primary">Продолжить</a></li>
                                <li><a href="{{ route('basket-reset') }}" class="more delete btn
                                btn-danger">Очистить</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
