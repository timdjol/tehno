@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редактировать категорию ' . $category->name)
@else
    @section('title', 'Создать категорию')
@endisset

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @isset($category)
                        <h1>Редактировать категорию {{ $category->title }}</h1>
                    @else
                        <h1>Создать категорию</h1>
                    @endisset
                    <form method="post"
                          @isset($category)
                              action="{{ route('categories.update', $category) }}"
                          @else
                              action="{{ route('categories.store') }}"
                            @endisset
                    >
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input type="text" name="title" value="{{ old('title', isset($category) ? $category->title :
                             null) }}">
                        </div>
                        <div class="form-group" id="check">
                            @foreach([
                          'parent' => 'Родительская категория',
                        ] as $field => $title)
                                <div class="form-group form-label">
                                    <input type="checkbox" name="{{ $field }}" id="{{ $field }}"
                                           @if (isset($product) && $product->$field === 1)
                                               checked="checked"
                                            @endif>
                                    <label for="{{ $field }}">{{ $title }}</label>
                                </div>
                            @endforeach
                        </div>
                            @isset($parents)
                            <div class="form-group" id="form">
                                <label for="parent_id">Выбрать из родительской</label>
                                <select name="parent_id" id="parent_id">
                                    <option value="0">Выбрать</option>
                                    @foreach($parents as $parent)
                                        <option value="{{ $parent->id }}">{{ $parent->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endisset
                        @csrf
                        <button class="more">Отправить</button>
                        <a href="{{url()->previous()}}" class="btn delete cancel">Отмена</a>
                    </form>
                        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

                        <script>
                            $('#check label').click(function(){
                                $('#form').toggle();
                            });
                        </script>
                </div>
            </div>
        </div>
    </div>

@endsection


