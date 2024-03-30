<div class="sidebar">
    <ul>
        @admin
            <li @routeactive('homes.index')><a href="{{ route('homes.index')}}"><i class="fa-regular fa-gauge"></i>
            Консоль</a></li>
            <li @routeactive('categories.index')><a href="{{ route('categories.index')}}"><i class="fa-regular
            fa-layer-group"></i> Категории</a></li>
            <li @routeactive('brands.index')><a href="{{ route('brands.index')}}"><i class="fa-regular fa-font-awesome"></i> Бренды</a></li>
            <li @routeactive('products.index')><a href="{{ route('products.index')}}"><i class="fa-brands
            fa-product-hunt"></i> Продукции</a></li>
            <li @routeactive('properties.index')><a href="{{ route('properties.index')}}"><i class="fa-regular fa-list"></i> Свойства</a></li>
            <li @routeactive('coupons.index')><a href="{{ route('coupons.index')}}"><i class="fa-regular
            fa-percent"></i> Купоны</a></li>
            <li @routeactive('orders.index')><a href="{{ route('orders.index')}}"><i class="fa-regular
            fa-cart-shopping"></i> Заказы</a></li>
            <li @routeactive('contacts.index')><a href="{{ route('contacts.index')}}"><i class="fa-regular
            fa-address-book"></i> Контакты</a></li>
            <li @routeactive('profile.edit')><a href="{{ route('profile.edit') }}"><i class="fa-regular
            fa-address-card"></i> Профиль</a></li>
        @else
            <li @routeactive('person.orders.index')><a href="{{ route('person.orders.index')}}"><i class="fa-regular
            fa-cart-shopping"></i> Заказы</a></li>
            <li><a href="{{ route('profile.edit') }}"><i class="fa-regular fa-address-card"></i> Профиль</a></li>
        @endadmin
    </ul>
</div>
