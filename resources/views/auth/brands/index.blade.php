@extends('auth.layouts.master')

@section('title', 'Бренды')

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
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Бренды</h1>
                        </div>
                        <div class="col-md-5">
                            <a class="btn add" href="{{ route('brands.create') }}"><i class="fa-regular
                            fa-plus"></i> Добавить</a>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->title }}</td>
                                <td>
                                    <form action="{{ route('brands.destroy', $brand) }}" method="post">
                                        <ul>
                                            <li><a class="btn edit" href="{{ route('brands.edit', $brand)
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
                    {{ $brands->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection
