@extends('layouts.master')

@section('title', 'Поиск')

@section('content')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"
            integrity="sha512-cWEytOR8S4v/Sd3G5P1Yb7NbYgF1YAUzlg1/XpDuouZVo3FEiMXbeWh4zewcYu/sXYQR5PgYLRbhf18X/0vpRg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css"
          integrity="sha512-bjwk1c6AQQOi6kaFhKNrqoCNLHpq8PT+I42jY/il3r5Ho/Wd+QUT6Pf3WGZa/BwSdRSIjVGBsPtPPo95gt/SLg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <div class="page products search-results">
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
