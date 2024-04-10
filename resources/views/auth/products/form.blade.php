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
                        <div class="row">
                            <div class="col-md-6">
                                @include('auth.layouts.error', ['fieldname' => 'category_id'])
                                <div class="form-group">
                                    <label for="">Категория</label>
                                    <select name="category_id" id="category">
                                        <option value="64">Выбрать</option>
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Дочерняя категория</label>
                                    <select name="subcategory_id" id="subcategory">
                                        @isset($product->subcategory_id)
                                            <option
                                                    value="{{$product->subcategory_id}}">{{$product->subcategory_id}}</option>
                                        @else
                                            <option>Выбрать</option>
                                        @endisset
                                    </select>
                                </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $('#category').on('change', function () {
                                            var categoryID = $(this).val();
                                            if (categoryID) {
                                                $.ajax({
                                                    url: '/admin/subcatories/' + categoryID,
                                                    type: "GET",
                                                    data: {"_token": "{{ csrf_token() }}"},
                                                    dataType: "json",
                                                    success: function (data) {
                                                        if (data) {
                                                            $('#subcategory').empty();
                                                            $('#subcategory').append('<option hidden>Выбрать</option>');
                                                            $.each(data, function (key, course) {
                                                                $('select[name="subcategory_id"]').append('<option ' +
                                                                    'value="' + course.title + '">' + course.title + '</option>');
                                                            });
                                                        } else {
                                                            $('#course').empty();
                                                        }
                                                    }
                                                });
                                            } else {
                                                $('#subcategory').empty();
                                            }
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-md-6">
                                @include('auth.layouts.error', ['fieldname' => 'brand_id'])
                                <div class="form-group">
                                    <label for="">Бренд</label>
                                    <select name="brand_id">
                                        <option>Выбрать</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                    @isset($product)
                                                        @if($product->brand_id == $brand->id)
                                                            selected
                                                    @endif
                                                    @endisset
                                            >{{ $brand->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @include('auth.layouts.error', ['fieldname' => 'price'])
                                <div class="form-group">
                                    <label for="">Цена</label>
                                    <input type="number" name="price" value="{{ old('price', isset($product) ?
                                    $product->price :
                                    null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                @include('auth.layouts.error', ['fieldname' => 'count'])
                                <div class="form-group">
                                    <label for="">Количество на складе</label>
                                    <input type="number" name="count" value="{{ old('count', isset($product) ?
                                    $product->count :
                                    null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Тип</label>
                                    <input type="text" name="type" value="{{ old('type', isset($product) ?
                                $product->type : null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Количество камер</label>
                                    <input type="text" name="camera" value="{{ old('camera', isset($product) ?
                                $product->camera : null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Высота</label>
                                    <input type="text" name="height" value="{{ old('height', isset($product) ?
                                $product->height : null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ширина</label>
                                    <input type="text" name="weight" value="{{ old('weight', isset($product) ?
                                $product->weight : null) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                @include('auth.layouts.error', ['fieldname' => 'charac'])
                                <div class="form-group">
                                    <label for="">Характеристики</label>
                                    <textarea name="charac" id="editor" rows="3">{{ old('charac', isset($product) ?
                            $product->charac : null) }}</textarea>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Краткое описание</label>
                                    <textarea name="short" rows="3">{{ old('short', isset($product) ?
                            $product->short : null) }}</textarea>
                                </div>
                            </div>
                            <legend>Цвета</legend>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Выбрать цвет</label>
                                    <input type="color" name="color" value="{{ old('color', isset($product) ?
                            $product->color : null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение для цвета</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagecolor1) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagecolor1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Выбрать цвет #2</label>
                                    <input type="color" name="color2" value="{{ old('color2', isset($product) ?
                            $product->color2 : null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение для цвета #2</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagecolor2) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagecolor2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Выбрать цвет #3</label>
                                    <input type="color" name="color3" value="{{ old('color3', isset($product) ?
                            $product->color3 : null) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение для цвета #3</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagecolor3) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagecolor3">
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <legend>Преимущества</legend>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="van1">Изображение для преимущества №1</label>
                                        @isset($product->imgvant1)
                                            <img src="{{ Storage::url($product->imgvant1) }}" alt="">
                                        @endisset
                                        <input type="file" id="van1" name="imgvant1">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Преимущество №1</label>
                                        <input type="text" name="vantdescr" value="{{ old('vantdescr', isset($product) ?
                                        $product->vantdescr : null) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="van2">Изображение для преимущества №2</label>
                                        @isset($product->imgvant2)
                                            <img src="{{ Storage::url($product->imgvant2) }}" alt="">
                                        @endisset
                                        <input type="file" id="van2" name="imgvant2">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Преимущество №2</label>
                                        <input type="text" name="vantdescr2" value="{{ old('vantdescr2', isset
                                        ($product) ? $product->vantdescr2 : null) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="van3">Изображение для преимущества №3</label>
                                        @isset($product->imgvant3)
                                            <img src="{{ Storage::url($product->imgvant3) }}" alt="">
                                        @endisset
                                        <input type="file" id="van3" name="imgvant3">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Преимущество №3</label>
                                        <input type="text" name="vantdescr3" value="{{ old('vantdescr3', isset
                                        ($product) ? $product->vantdescr3 : null) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="van4">Изображение для преимущества №4</label>
                                        @isset($product->imgvant4)
                                            <img src="{{ Storage::url($product->imgvant4) }}" alt="">
                                        @endisset
                                        <input type="file" id="van4" name="imgvant4">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Преимущество №4</label>
                                        <input type="text" name="vantdescr4" value="{{ old('vantdescr4', isset
                                        ($product) ? $product->vantdescr4 : null) }}">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <legend>Описания</legend>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №1</label>
                                    <textarea name="descr1" id="editor2" rows="3">{{ old('descr1', isset($product) ?
                            $product->descr1 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #1</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr1) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №2</label>
                                    <textarea name="descr2" id="editor6" rows="3">{{ old('descr2', isset($product) ?
                            $product->descr2 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #2</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr2) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №3</label>
                                    <textarea name="descr3" id="editor3" rows="3">{{ old('descr2', isset($product) ?
                            $product->descr3 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #3</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr3) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №4</label>
                                    <textarea name="descr4" id="editor4" rows="3">{{ old('descr4', isset($product) ?
                            $product->descr4 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #4</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr4) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №5</label>
                                    <textarea name="descr5" id="editor5" rows="3">{{ old('descr5', isset($product) ?
                            $product->descr5 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #5</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr5) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №6</label>
                                    <textarea name="descr6" id="editor7" rows="3">{{ old('descr6', isset($product) ?
                            $product->descr6 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #6</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr6) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Описание №7</label>
                                    <textarea name="descr7" id="editor8" rows="3">{{ old('descr7', isset($product) ?
                            $product->descr7 : null) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Изображение #7</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->imagedescr7) }}" alt="">
                                    @endisset
                                    <input type="file" name="imagedescr7">
                                </div>
                            </div>
                        </div>
                            <legend>Изображения</legend>
                        <div class="row">
                            <div class="col-md-6">
                                @include('auth.layouts.error', ['fieldname' => 'image'])
                                <div class="form-group">
                                    <label for="">Изображение</label>
                                    @isset($product)
                                        <img src="{{ Storage::url($product->image) }}" alt="">
                                    @endisset
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Доп изображения</label>
                                    @isset($images)
                                        @foreach($images as $image)
                                            <img src="{{ Storage::url($image->image) }}" alt="">

                                        @endforeach
                                    @endisset
                                    <input type="file" name="images[]" multiple="true">
                                </div>
                            </div>
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
                                .create(document.querySelector('#editor2'))
                                .catch(error => {
                                    console.error(error);
                                });
                            ClassicEditor
                                .create(document.querySelector('#editor3'))
                                .catch(error => {
                                    console.error(error);
                                });
                            ClassicEditor
                                .create(document.querySelector('#editor4'))
                                .catch(error => {
                                    console.error(error);
                                });
                            ClassicEditor
                                .create(document.querySelector('#editor5'))
                                .catch(error => {
                                    console.error(error);
                                });
                            ClassicEditor
                                .create(document.querySelector('#editor6'))
                                .catch(error => {
                                    console.error(error);
                                });
                            ClassicEditor
                                .create(document.querySelector('#editor7'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                        @csrf
                        <button class="more">Отправить</button>
                        <a href="{{ url()->previous() }}" class="btn delete cancel">Отмена</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
