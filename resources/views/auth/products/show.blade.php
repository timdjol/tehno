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
                               <td>Краткое описание</td>
                               <td>{!! $product->short !!}</td>
                           </tr>
                           <tr>
                               <td>Характеристики</td>
                               <td>{!! $product->charac !!}</td>
                           </tr>
                           <tr>
                               <td>Категория</td>
                               <td>{{ $product->category->title }}</td>
                           </tr>
                           <tr>
                               <td>Бренд</td>
                               <td>{{ $product->brand->title }}</td>
                           </tr>
                           @if($product->type)
                               <tr>
                                   <td>Тип</td>
                                   <td>{{ $product->type }}</td>
                               </tr>
                           @endif
                           @if($product->camera)
                               <tr>
                                   <td>Количество камер</td>
                                   <td>{{ $product->camera }}</td>
                               </tr>
                           @endif
                           @if($product->height)
                               <tr>
                                   <td>Высота</td>
                                   <td>{{ $product->height }}</td>
                               </tr>
                           @endif
                           @if($product->weight)
                               <tr>
                                   <td>Ширина</td>
                                   <td>{{ $product->weight }}</td>
                               </tr>
                           @endif
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
