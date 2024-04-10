<div class="sidebar">
    <ul>
        @admin
            <li @routeactive('home*')><a href="{{ route('homes.index')}}"><i class="fa-regular fa-gauge"></i>
            Консоль</a></li>
            <li @routeactive('categor*')><a href="{{ route('categories.index')}}"><i class="fa-regular
            fa-layer-group"></i> Категории</a></li>
            <li @routeactive('subcat*')><a href="{{ route('subcategories.index')}}"><i class="fa-regular fa-list"></i> Подкатегории</a></li>
            <li @routeactive('brand*')><a href="{{ route('brands.index')}}"><i class="fa-regular
            fa-font-awesome"></i> Бренды</a></li>
            <li @routeactive('product*')><a href="{{ route('products.index')}}"><i class="fa-brands
            fa-product-hunt"></i> Продукции</a></li>
            <li @routeactive('coupon*')><a href="{{ route('coupons.index')}}"><i class="fa-regular
            fa-percent"></i> Купоны</a></li>
            <li @routeactive('order*')><a href="{{ route('orders.index')}}"><i class="fa-regular
            fa-cart-shopping"></i> Заказы</a></li>
            <li @routeactive('form*')><a href="{{ route('forms.index')}}"><i class="fa-regular fa-envelope"></i> Заявки с форм</a></li>
            <li @routeactive('contact*')><a href="{{ route('contacts.index')}}"><i class="fa-regular
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
