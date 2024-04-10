@extends('auth.layouts.master')

@section('title', 'Подкатегория ' . $subcategory->title)

@section('content')

    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                </div>
            </div>
        </div>
    </div>

@endsection
