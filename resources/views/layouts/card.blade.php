<div class="catalog__card">
    <!-- каталог-блок-1 -->
    <div class="catalog__images">
        <img data-color="{{ $product->color }}" data-id="{{ $product->id }}"
                class="catalog__image intro catalog__active"
                src="{{ Storage::url($product->imagecolor1) }}"
         alt=""/>
        <img data-color="{{ $product->color2 }}" data-id="{{ $product->id }}"
                class="catalog__image intro"
                src="{{ Storage::url($product->imagecolor2) }}"
        />
        <img data-color="{{ $product->color3 }}" data-id="{{ $product->id }}"
                class="catalog__image intro"
                src="{{ Storage::url($product->imagecolor3) }}"
        />
        <!-- кнопка для модалки -->
        <a class="catalog__openModalBtn" href="#!"
        >Быстрый просмотр</a
        >

        <!-- модалка быстрого просмотра -->
        <div class="catalog__modal">
            <div class="catalog__modal-content">
                                        <span class="catalog__close"
                                        >&times;</span
                                        >
                <div class="catalog__fast-view">
                    <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" data-loop="true"
                         data-autoplay="3000">
                        <img src="{{ Storage::url($product->image) }}" alt="">
                        @php
                            $images = \App\Models\Image::where('product_id', $product->id)->get();
                        @endphp
                        @foreach($images as $image)
                            <img loading=lazy src="{{ Storage::url($image->image) }}" alt="">
                        @endforeach

                    </div>
                    <div class="fast-view-table">
                        <div
                                class="catalog__card-text-title"
                        >{{ $product->title }}
                        </div>
                        <div
                                class="catalog__card-text-numbers"
                        >
                            {{ $product->price }} сом
                        </div>
                        {!! $product->charac !!}
                        <a
                                class="catalog__card-description-btn"
                                href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                        >Узнать больше</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- каталог-блок-2 -->
    <div class="catalog__card-text">
        <div class="catalog__card-text-title">
            {{ $product->title }}
        </div>

        <div class="catalog__card-text-color">
            <p>Цвет:</p>
            <div class="catalog__icons">
                @if($product->color != '#000000')
                    <div class="catalog__icon btn" data-color="{{ $product->color }}" style="background-color: {{ $product->color }}"
                         data-id="{{
                    $product->id }}"></div>
                @endif
                @if($product->color2 != '#000000')
                    <div class="catalog__icon btn" data-color="{{ $product->color2 }}" style="background-color: {{
                    $product->color2 }}"
                         data-id="{{
                    $product->id }}"></div>
                @endif
                @if($product->color3 != '#000000')
                    <div class="catalog__icon btn" data-color="{{ $product->color3 }}" style="background-color: {{
                    $product->color3 }}"
                         data-id="{{
                    $product->id }}"></div>
                @endif
            </div>
        </div>
        <div class="catalog__card-text-numbers">
            {{ $product->price }} сом
        </div>
        <div class="catalog__card-text-text">
            @php
                $short = \Illuminate\Support\Str::words($product->short, 10, ' ...');
            @endphp
            {{ $short }}
        </div>
    </div>

    <!-- каталог-блок-3 -->
    <div class="catalog__card-description">
        {!! $product->charac !!}
        <a
                class="catalog__card-description-btn"
                href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
        >Узнать больше</a
        >
    </div>
</div>
