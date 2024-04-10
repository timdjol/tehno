<p>@lang('mail.dear') {{ $name }}</p>

<p>@lang('mail.order_sum') {{ $fullSum }} сом @lang('mail.order_create')</p>

<table>
    <tbody>
    @foreach($order->products as $product)
        <tr>
            <td>
                <a href="{{ route('product', [$product->category->code, $product->code, $sku->id]) }}">
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}">
                    {{ $product->title }}
                </a>
            </td>
            <td>
                <span class="badge">{{ $product->countInOrder }}</span>
            </td>
            <td>{{ $product->price }} сом</td>
            <td>{{ $product->getPriceForCount() }} сом</td>
        </tr>
    @endforeach
    </tbody>
</table>