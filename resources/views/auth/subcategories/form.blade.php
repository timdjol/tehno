@extends('auth.layouts.master')

@isset($subcategory)
    @section('title', 'Редактировать подкатегорию ' . $subcategory->title)
@else
    @section('title', 'Создать подкатегорию')
@endisset

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @isset($subcategory)
                        <h1>Редактировать подкатегорию {{ $subcategory->title }}</h1>
                    @else
                        <h1>Создать подкатегорию</h1>
                    @endisset
                    <form method="post"
                          @isset($subcategory)
                              action="{{ route('subcategories.update', $subcategory) }}"
                          @else
                              action="{{ route('subcategories.store') }}"
                            @endisset
                    >
                        @isset($subcategory)
                            @method('PUT')
                        @endisset
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input type="text" name="title" value="{{ old('title', isset($subcategory) ?
                            $subcategory->title : null) }}">
                        </div>
                            <div class="form-group">
                                <label for="cat">Родительская категория</label>
                                <select name="category_id" id="cat">
                                    <option>Выбрать</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @csrf
                        <button class="more">Отправить</button>
                        <a href="{{url()->previous()}}" class="btn delete cancel">Отмена</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


