@extends('auth.layouts.master')

@section('title', 'Продукции')

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @if(session()->has('success'))
                        <p class="alert alert-success">{{ session()->get('success') }}</p>
                    @endif
                    @if(session()->has('warning'))
                        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                    @endif
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h1>Продукции</h1>
                        </div>
                        <div class="col-md-5">
                            <div class="btn-wrap">
                                <a href="{{ route('products.create') }}" class="btn add"><i class="fa-regular
                            fa-plus"></i> Добавить</a>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Изображение</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Бренд</th>
                            <th>Цена</th>
                            {{--                            <th>Кол-во пред</th>--}}
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{ Storage::url($product->image) }}" alt=""></td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->title }}</td>
                                <td>{{ $product->brand->title }}</td>
                                <td>{{ $product->price }} сом</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product) }}" method="post">
                                        <ul>
                                            <li><a class="btn view" href="{{ route('products.show', $product)
                                            }}"><i class="fa-regular fa-eye"></i></a></li>
                                            <li><a class="btn edit" href="{{ route('products.edit', $product)
                                            }}"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Вы уверены, что хотите удалить?')" class="btn delete"><i class="fa-regular fa-trash"></i></button>
                                        </ul>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    .admin table img{
        max-width: 100px !important;
    }
    .admin form .delete{
        padding: 8px 10px !important;
    }
</style>