@extends('auth/layouts.master')

@section('title', 'Консоль')

@section('content')

    <div class="page admin dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth/layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @if(session()->has('success'))
                        <p class="alert alert-success">{{ session()->get('success') }}</p>
                    @endif
                    @if(session()->has('warning'))
                        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                    @endif
                    <h1>Добро пожаловать {{ $user->name }}</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="dashboard-item">
                                <div class="num">{{ $order->count() }}</div>
                                <h5>Количество <br> заказов</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dashboard-item">
                                <div class="num">{{ $user->count() }}</div>
                                <h5>Количество <br> пользователей</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dashboard-item">
                                <div class="num">{{ $product->count() }}</div>
                                <h5>Количество <br> продукций</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dashboard-item">
                                <div class="num">{{ $categories->count() }}</div>
                                <h5>Количество <br> категорий</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dashboard-item">
                                <div class="num">{{ $coupon->count() }}</div>
                                <h5>Количество <br> купонов</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home">
                                @foreach($homes as $home)
                                    <h4>{{ $home->title }}</h4>
                                    <p>{{ $home->descr }}</p>
                                    {!! $home->contacts !!}
                                    <div class="btn-wrap">
                                        <a href="{{ route('homes.edit', $home) }}" class="more"><i class="fa-regular
                                        fa-pen-to-square"></i> Редактировать</a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="faq">
                                <h2>FAQ</h2>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Вопрос</th>
                                        <th>Ответ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($faqs as $faq)
                                        <tr>
                                            <td>{{ $faq->title }}</td>
                                            <td>
                                                <form action="{{ route('faqs.destroy', $faq) }}" method="post">
                                                    <ul>
                                                        <li><a class="btn edit" href="{{ route('faqs.edit', $faq)
                                            }}"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn delete"><i class="fa-regular fa-trash"></i>
                                                        </button>
                                                    </ul>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="btn-wrap">
                                    <a class="btn add" href="{{ route('faqs.create') }}"><i
                                                class="fa-regular fa-plus"></i>
                                        Добавить вопрос</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection