<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- <img src="{{ asset('backend_user/assets/img/gallerymy/peticia-dav.png')}}" alt="peticia.org logo" width="200" height="225"> --}}

    {{-- <img class="card-img-top w-50 h-50 rounded-0 mx-auto"  src="{{ asset('backend_user\assets\img\gallerymy\peticia-dav.png')}}" alt="PETICIA BEZ OBRÁZKA" /> --}}
    {{-- <img class="card-img-top w-50 h-50 rounded-0 mx-auto"  src="{{ $message->embed(asset('backend_user\assets\img\gallerymy\peticia-dav.png')) }}" alt="PETICIA BEZ OBRÁZKA" /> --}}

    {{-- <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot> --}}

{{-- <h1>Presaďte Váš názor prostredníctvom petície</h1> --}}
      {{ $slot }}
@endif
</a>
</td>
</tr>
