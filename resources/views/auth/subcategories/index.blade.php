@extends('auth.layouts.master')

@section('title', 'Подкатегории')

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
                            <h1>Подкатегории</h1>
                        </div>
                        <div class="col-md-5">
                            <div class="btn-wrap">
                                <a class="btn add" href="{{ route('subcategories.create') }}"><i class="fa-regular
                            fa-plus"></i> Добавить</a>
                            </div>
                        </div>
                    </div>
{{--                    <p>Отображено: {{ $subcategories->count() }} подкатегорий</p>--}}
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Родительская категория</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subcategories as $subcategory)
                            <tr>
                                <td>{{ $subcategory->id }}</td>
                                <td>{{ $subcategory->title }}</td>
                                <td>{{ $subcategory->category->title }}</td>
                                <td>
                                    <form action="{{ route('subcategories.destroy', $subcategory) }}" method="post">
                                        <ul>
                                            <li><a class="btn edit" href="{{ route('subcategories.edit', $subcategory)
                                            }}"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn delete"><i class="fa-regular fa-trash"></i></button>
                                        </ul>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $subcategories->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection
