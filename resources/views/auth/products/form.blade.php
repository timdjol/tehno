@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать  ' . $product->title)
@else
    @section('title', 'Создать продукцию')
@endisset

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @isset($product)
                        <h1>Редактировать продукцию {{ $product->title }}</h1>
                    @else
                        <h1>Создать продукцию</h1>
                    @endisset
                    <form method="post" enctype="multipart/form-data"
                          @isset($product)
                              action="{{ route('products.update', $product) }}"
                          @else
                              action="{{ route('products.store') }}"
                            @endisset
                    >
                        @isset($product)
                            @method('PUT')
                        @endisset
                        @include('auth.layouts.error', ['fieldname' => 'title'])
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input type="text" name="title" value="{{ old('title', isset($product) ? $product->title :
                             null) }}">
                        </div>
                        @include('auth.layouts.error', ['fieldname' => 'category_id'])
                        <div class="form-group">
                            <label for="">Категория</label>
                            <select name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @isset($product)
                                                @if($product->category_id == $category->id)
                                                    selected
                                            @endif
                                            @endisset
                                    >{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @include('auth.layouts.error', ['fieldname' => 'description'])
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea name="description" id="editor" rows="3">{{ old('description', isset($product) ?
                            $product->description : null) }}</textarea>
                        </div>
                        <script src="https://cdn.tiny.cloud/1/yxonqgmruy7kchzsv4uizqanbapq2uta96cs0p4y91ov9iod/tinymce/6/tinymce.min.js"
                                referrerpolicy="origin"></script>
                        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });
                            ClassicEditor
                                .create(document.querySelector('#editor1'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                        @include('auth.layouts.error', ['fieldname' => 'property_id[]'])
                        <div class="form-group">
                            <label for="">Свойства продукции:</label>
                            <select name="property_id[]" multiple>
                                @foreach($properties as $property)
                                    <option value="{{ $property->id }}"
                                            @isset($product)
                                                @if($product->properties->contains($property->id))
                                                    selected
                                            @endif
                                            @endisset
                                    >{{ $property->title }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">Изображение</label>
                            @isset($product)
                                <img src="{{ Storage::url($product->image) }}" alt="">
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
