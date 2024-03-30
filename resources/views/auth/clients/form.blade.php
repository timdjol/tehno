@extends('auth.layouts.master')

@isset($client)
    @section('title', 'Редактировать')
@else
    @section('title', 'Создать')
@endisset

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @isset($client)
                        <h1>Редактировать</h1>
                    @else
                        <h1>Создать</h1>
                    @endisset
                    <form method="post" enctype="multipart/form-data"
                          @isset($client)
                              action="{{ route('clients.update', $client) }}"
                          @else
                              action="{{ route('clients.store') }}"
                            @endisset
                    >
                        @isset($client)
                            @method('PUT')
                        @endisset

                        <div class="form-group">
                            <label for="">Изображение</label>
                            @isset($client)
                                <img src="{{ Storage::url($client->image) }}" alt="">
                            @endisset
                            <input type="file" name="image">
                        </div>


                        @csrf
                        <button class="more">Отправить</button>
                        <a href="{{ url()->previous() }}" class="btn delete cancel">Отмена</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
