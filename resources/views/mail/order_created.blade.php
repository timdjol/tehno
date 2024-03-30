<p>@lang('mail.dear') {{ $name }}</p>

<p>@lang('mail.order_sum') {{ $fullSum }} сом @lang('mail.order_create')</p>

<table>
    <tbody>
    @foreach($order->skus as $sku)
        <tr>
            <td>
                <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku->id]) }}">
                    <img src="{{ Storage::url($sku->product->image) }}" alt="{{ $sku->product->title }}">
                    {{ $sku->product->title }}
                </a>
            </td>
            <td>
                <span class="badge">{{ $sku->countInOrder }}</span>
            </td>
            <td>{{ $sku->price }} сом</td>
            <td>{{ $sku->getPriceForCount() }} сом</td>
        </tr>
    @endforeach
    </tbody>
</table>