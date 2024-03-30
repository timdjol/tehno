@extends('auth.layouts.master')

@section('title', 'Продукция ' . $product->title)

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                   <div class="wrap">
                       <h1>Продукция {{ $product->title }}</h1>
                       <table class="table">
                           <tr>
                               <td>ID</td>
                               <td>{{ $product->id }}</td>
                           </tr>
                           <tr>
                               <td>Название</td>
                               <td>{{ $product->title }}</td>
                           </tr>
                           <tr>
                               <td>Описание</td>
                               <td>{!! $product->description !!}</td>
                           </tr>
                           <tr>
                               <td>Категория</td>
                               <td>{{ $product->category->title }}</td>
                           </tr>
                           <tr>
                               <td>Изображение</td>
                               <td><img src="{{ Storage::url($product->image) }}"></td>
                           </tr>
                           <tr>
                               <td>Изображения</td>
                               <td>
                                   @isset($images)
                                       @foreach($images as $image)
                                           <img src="{{ Storage::url($image->image) }}" alt="">
                                       @endforeach
                                   @endisset
                               </td>
                           </tr>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    .admin table img{
        max-width: 100px !important;
    }
</style>
