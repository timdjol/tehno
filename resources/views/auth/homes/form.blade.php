@extends('auth.layouts.master')

@isset($home)
    @section('title', 'Контакты')
@endisset

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    <form method="post" action="{{ route('homes.update', $home) }}">
                        @isset($home)
                            @method('PUT')
                        @endisset
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input type="text" name="title" value="{{ old('title', isset
                                                        ($home) ? $home->title : null) }}">
                        </div>
                        @error('descr')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="">Описание</label>
                            <input type="text" name="descr" value="{{ old('descr', isset
                                                        ($home) ? $home->descr : null) }}">
                        </div>
                        @error('contacts')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="">Контакты</label>
                            <textarea name="contacts" id="editor" rows="3">{{ old
                                                            ('contacts', isset($home) ? $home->contacts : null)
                                                            }}</textarea>
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
                        @csrf
                        <button class="more">Сохранить</button>
                        <a href="{{url()->previous()}}" class="btn delete cancel">Отмена</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

