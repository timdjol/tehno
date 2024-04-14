<div class="filter__title mob_filter_title">
    <img
            class="filter__icon"
            src="{{route('index')}}/img/front/icons/icon_filter.svg"
            alt=""
    />
    <p>ФИЛЬТР</p>
</div>
<div class="filter-wrap">
    <div class="filter__title">
        <img
                class="filter__icon"
                src="{{route('index')}}/img/front/icons/icon_filter.svg"
                alt=""
        />
        <p>ФИЛЬТР</p>
    </div>
    <form action="{{ route('catalog') }}" method="get">

        <div class="dropdown">
            <div class="dropdown-toggle">
                <p>Цена от</p>
                <img
                        class="dropdown-icon"
                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                        alt=""
                />
            </div>
            <div class="dropdown-menu">
                <label
                ><input
                            class="dropdown-menu-inputtext"
                            type="text" name="price_from" value="{{ request()->price_from }}"
                    />

                </label>
            </div>
        </div>

        <div class="dropdown">
            <div class="dropdown-toggle">
                <p>Цена до</p>
                <img
                        class="dropdown-icon"
                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                        alt=""
                />
            </div>
            <div class="dropdown-menu">
                <label
                ><input
                            class="dropdown-menu-inputtext"
                            type="text" name="price_to" value="{{ request()->price_to }}"
                    />

                </label>
            </div>
        </div>

        <div class="dropdown">
            <div class="dropdown-toggle">
                <p>Тип</p>
                <img
                        class="dropdown-icon"
                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                        alt=""
                />
            </div>
            <div class="dropdown-menu">
                <div class="round">
                    <label
                    ><input type="checkbox" name="type" value="Однодверный"/>
                        <p>Однодверный</p>
                    </label>
                </div>

                <div class="round">
                    <label
                    ><input type="checkbox" name="type" value="Двухдверный"/>
                        <p>Двухдверный</p>
                    </label>
                </div>

                <div class="round">
                    <label
                    ><input type="checkbox" name="type" value="Многодверный"/>
                        <p>Многодверный</p>
                    </label>
                </div>

                <div class="round">
                    <label
                    ><input type="checkbox" name="type" value="Встраиваемый"/>
                        <p>Встраиваемый</p>
                    </label>
                </div>

                <div class="round">
                    <label
                    ><input type="checkbox" name="type" value="Отдельностоящий"/>
                        <p>Отдельностоящий</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- фильтр -->
        <div class="dropdown">
            <div class="dropdown-toggle">
                <p>Количество камер</p>
                <img
                        class="dropdown-icon"
                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                        alt=""
                />
            </div>
            <div class="dropdown-menu">
                <div class="round">
                    <label
                    ><input type="checkbox" name="camera" value="Однокамерный"/>
                        <p>Однокамерный</p>
                    </label>
                </div>

                <div class="round">
                    <label
                    ><input type="checkbox" name="camera" value="Двухкамерный"/>
                        <p>Двухкамерный</p>
                    </label>
                </div>

                <div class="round">
                    <label
                    ><input type="checkbox" name="camera" value="Трехкамерный"/>
                        <p>Трехкамерный</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- фильтр -->
        <div class="dropdown">
            <div class="dropdown-toggle">
                <p>Высота</p>
                <img
                        class="dropdown-icon"
                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                        alt=""
                />
            </div>
            <div class="dropdown-menu">
                <label
                ><input
                            class="dropdown-menu-inputtext"
                            type="text" name="height" value="{{ request()->height }}"
                    />
                    <p>см</p>
                </label>
            </div>
        </div>

        <!-- фильтр -->
        <div class="dropdown">
            <div class="dropdown-toggle">
                <p>Ширина</p>
                <img
                        class="dropdown-icon"
                        src="{{route('index')}}/img/front/icons/icon_arrow.svg"
                        alt=""
                />
            </div>
            <div class="dropdown-menu">
                <label
                ><input
                            class="dropdown-menu-inputtext"
                            type="text" name="width" value="{{ request()->width }}"
                    />
                    <p>см</p>
                </label>
            </div>
        </div>

        <div class="form-group btn-wrap filter-actions">
            <button class="more btn btn-primary">Применить</button>
            <a href="{{ route('catalog') }}" class="reset btn btn-danger">Сброс</a>
        </div>
    </form>
</div>