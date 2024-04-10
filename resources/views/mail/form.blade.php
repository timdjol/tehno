<p>@lang('mail.dear') {{ $user->name }}</p>

<ul>
    <li>Номер телефона: {{$user->phone }}</li>
    <li>Сообщение: {{$user->message }}</li>
</ul>