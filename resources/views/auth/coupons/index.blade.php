@extends('auth.layouts.master')

@section('title', 'Купоны')

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
                            <h1>Купоны</h1>
                        </div>
                        <div class="col-md-5">
                            <div class="btn-wrap">
                                <a href="{{ route('coupons.create') }}" class="btn add"><i class="fa-regular fa-plus"></i> Добавить</a>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Код</th>
                            <th>Описание</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->id }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->description }}</td>
                                <td>
                                    <form action="{{ route('coupons.destroy', $coupon) }}" method="post">
                                        <ul>
                                            <li><a class="btn view" href="{{ route('coupons.show', $coupon)
                                            }}"><i class="fa-regular fa-eye"></i></a></li>
                                            <li><a class="btn edit" href="{{ route('coupons.edit', $coupon)
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
                    {{ $coupons->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection
