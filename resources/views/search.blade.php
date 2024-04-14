@extends('layouts.master')

@section('title', 'Поиск')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <div class="page products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Поиск по слову "@php echo $_GET['search'] @endphp"</h1>
                </div>
            </div>
            @if($search->isNotEmpty())
                @foreach($search->sortByDesc('updated_at') as $product)
                    @include('layouts.card', compact('product'))
                @endforeach
            @else
                <div class="alert alert-danger">Продукции не найдены</div>
            @endif
        </div>
    </div>

@endsection
