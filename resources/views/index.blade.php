@extends('layouts.master')

@section('title', 'Главная страница')

@if(session()->has('success'))
    <p class="alert alert-success">{{ session()->get('success') }}</p>
@endif
@if(session()->has('warning'))
    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
@endif

@section('content')

    <div class="main">
        <!-- ГЛАВНАЯ -->
        <div class="conatiner">
            <section id="home">
                <div class="home__photos-scale">
                    <div class="home__photos">
                        <div class="home__photos-hood">
                            <img src="{{route('index')}}/img/front/intro/hood.png" alt=""/>
                        </div>

                        <div class="home__photos-gas_stove">
                            <img src="{{route('index')}}/img/front/intro/gas_stove.png" alt=""/>
                        </div>

                        <div class="home__photos-fridge">
                            <img src="{{route('index')}}/img/front/intro/fridge.png" alt=""/>
                        </div>

                        <div class="home__photos-vacuum_cleaner">
                            <img
                                    src="{{route('index')}}/img/front/intro/vacuum_cleaner.png"
                                    alt=""
                            />
                        </div>
                    </div>
                </div>

                @foreach($homes as $home)
                    <div class="home__title">
                        <div class="home__title-one">
                            {{ $home->title }}
                        </div>
                        <div class="home__title-two">
                            {{ $home->descr }}
                        </div>
                        <a href="{{ route('catalog') }}" class="home__button">Перейти в каталог</a>
                    </div>
                @endforeach
            </section>
        </div>

        <!-- КЛИЕНТЫ -->
        <div id="clients" class="title">КЛИЕНТЫ</div>
        <div class="container">
            <section class="clients__content">
                @foreach($clients as $client)
                    <div class="items item_{{ $loop->iteration }}">
                        <img
                                class="responsive"
                                src="{{ Storage::url($client->image) }}"
                        />
                    </div>
                @endforeach


            </section>
        </div>

        <!-- ДОСТАВКА -->
        <div id="delivery" class="title">ДОСТАВКА</div>
        <div class="container">
            <section class="delivery__content">
                @foreach($deliveries as $delivery)
                    <div class="delivery__card">
                        <img
                                class="delivery__card-img"
                                src="{{ Storage::url($delivery->image) }}"
                                alt=""
                        />
                        <div class="delivery__card-info">
                            <div class="delivery__card-title">{{ $loop->iteration }}-этап</div>
                            <div class="delivery__card-text">
                                {{ $delivery->title }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>

        <!-- КОНТАКТЫ -->
        <div id="contacts" class="title">КОНТАКТЫ</div>
        <div class="container">
            <section class="contacts__content">
                {!! $home->contacts !!}
                <div class="contacts__card-button">
                    <div class="interior">
                        <a class="btn__modal" href="#open-modal-2"
                        >Оставить заявку</a
                        >
                    </div>
                    <div id="open-modal-2" class="modal-window">
                        <div class="modal-window-inside">
                            <a href="#!" title="Close" class="modal-close">
                                <svg
                                        version="1.1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 24 24"
                                        style="enable-background: new 0 0 24 24"
                                        xml:space="preserve"
                                >
                                        <path
                                                class="st0"
                                                d="M4.4,19.6L19.6,4.4"
                                        />
                                    <path
                                            class="st0"
                                            d="M4.4,4.4l15.3,15.3"
                                    />
                                    </svg>
                            </a>
                            <div class="modal-form">
                                <form action="{{ route('form_mail') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="title" value="Консультация">
                                    <div class="modal-form-title text-align">
                                        Оставить заявку
                                    </div>
                                    <input type="text" placeholder="Ваше имя" name="name"/>
                                    <input name="phone"
                                            type="tel"
                                            placeholder="Ваш WhatsApp"
                                    / required>
                                    <textarea name="message"
                                            for=""
                                            placeholder="Я присматриваю..."
                                    ></textarea>
                                    <button>Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- FAQ -->
        <div id="faq" class="title">FAQ</div>
        <div class="container">
            <section class="faq__content">
                <div class="accordion-container">
                    @foreach($faqs as $faq)
                        <div class="accordion-item">
                            <button class="accordion-header">
                                {{ $faq->title }}
                                <span class="icon">+</span>
                            </button>
                            <div class="accordion-content">
                                {!! $faq->description !!}
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
        </div>
    </div>


@endsection
