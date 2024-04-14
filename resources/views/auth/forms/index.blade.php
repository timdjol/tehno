@extends('auth/layouts.master')

@section('title', 'Заявки с форм')

@section('content')

    <div class="page admin form">
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
                    <h1>Заявки с форм</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Сообщение</th>
                            <th>Дата</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            <tr>
                                <td>{{ $form->id }}</td>
                                <td>{{ $form->name }}</td>
                                <td><a href="tel:{{ $form->phone }}">{{ $form->phone }}</a></td>
                                <td>{{ $form->message }}</td>
                                <td>{{ $form->created_at }}</td>
                                <td>
                                    <ul>
                                        <form action="{{ route('forms.destroy', $form) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Вы уверены, что хотите удалить?')" class="btn delete"><i class="fa-regular fa-trash"></i></button>
                                        </form>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $forms->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection
