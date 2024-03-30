<div class="row products-item">
    <div class="col-md-3">
        <div class="img-wrap">
            <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                <img src="{{ Storage::url($sku->product->image) }}" alt="">
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <h4>{{ $sku->product->title }}</h4>
        @isset($sku->product->properties)
            @foreach($sku->propertyOptions as $propertyOption)
                <p style="margin-bottom: 0">{{ $propertyOption->property->title }}: {{ $propertyOption->title }}</p>
            @endforeach
        @endisset
        <div class="price">{{ $sku->price }} сом</div>
        @if($sku->isAvailable())
            <form action="{{ route('basket-add', $sku) }}" method="POST">
                <button class="more btn btn-primary" type="submit">Купить</button>
                @csrf
            </form>
        @else
            <p>Недоступно</p>
        @endif
    </div>

</div>