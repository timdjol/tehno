@extends('auth.layouts.master')

@isset($delivery)
    @section('title', 'Редактировать информацию о доставке')
@else
    @section('title', 'Создать информацию о доставке')
@endisset

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @isset($delivery)
                        <h1>Редактировать информацию о доставке</h1>
                    @else
                        <h1>Создать информацию о доставке</h1>
                    @endisset
                    <form method="post" enctype="multipart/form-data"
                          @isset($delivery)
                              action="{{ route('deliveries.update', $delivery) }}"
                          @else
                              action="{{ route('deliveries.store') }}"
                            @endisset
                    >
                        @isset($delivery)
                            @method('PUT')
                        @endisset
                        @include('auth.layouts.error', ['fieldname' => 'title'])
                        <div class="form-group">
                            <label for="title">Описание</label>
                            <textarea name="title" id="title" rows="5"></textarea>
                        </div>
                            @include('auth.layouts.error', ['fieldname' => 'image'])
                        <div class="form-group">
                            <label for="image">Изображение</label>
                            @isset($delivery)
                                <img src="{{ Storage::url($delivery->image) }}" alt="">
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
