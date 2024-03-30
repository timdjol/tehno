@extends('auth.layouts.master')

@section('title', 'Категории')

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
                            <h1>Категории</h1>
                        </div>
                        <div class="col-md-5">
                            <div class="btn-wrap">
                                <a class="btn add" href="{{ route('categories.create') }}"><i class="fa-regular
                            fa-plus"></i> Добавить</a>
                            </div>
                        </div>
                    </div>
                        <p>Отображено: {{ $allcat->count() }} категорий</p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Родитель</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>
                                    @if($category->parent_id)
                                        @php $parent = \App\Models\Category::where('id', $category->parent_id)
                                        ->firstOrFail()
                                        @endphp
                                        {{ $parent->title }}
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category) }}" method="post">
                                        <ul>
                                            <li><a class="btn edit" href="{{ route('categories.edit', $category)
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
                </div>
            </div>
        </div>
    </div>

@endsection
