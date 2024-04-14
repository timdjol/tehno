<div class="catalog__card">
    <!-- каталог-блок-1 -->
    <div class="catalog__images">
        <img
                class="catalog__image catalog__active"
                src="{{ Storage::url($product->imagecolor1) }}"
        />
        <img
                class="catalog__image"
                src="{{ Storage::url($product->imagecolor2) }}"
        />
        <img
                class="catalog__image"
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
                    <img
                            class="catalog__image catalog__active"
                            src="{{ Storage::url($product->image) }}"
                    />
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
                    <div class="catalog__icon white" style="background-color: {{ $product->color }}"></div>
                @endif
                @if($product->color2 != '#000000')
                    <div class="catalog__icon grey" style="background-color: {{ $product->color2 }}"></div>
                @endif
                @if($product->color3 != '#000000')
                    <div class="catalog__icon red" style="background-color: {{ $product->color3 }}"></div>
                @endif
            </div>
        </div>
        <div class="catalog__card-text-numbers">
            {{ $product->price }} сом
        </div>
        <div class="catalog__card-text-text">
            {{ $product->short }}
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
