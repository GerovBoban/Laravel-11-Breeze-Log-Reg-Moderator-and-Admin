<x-mail::message>
    # Introduction

    The body of your message.

    Thanks,<br>
    {{ config('app.name') }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    {{-- Thanks,<br>
    {{ config('app.name') }} --}}

</x-mail::message>


{{-- @component('mail::mesage')
    Tralala
    @component('mail::button', ['url' => 'link'])
        More Details
    @endcomponent
    Thanks, <br>
    Laravel...
@endcomponent --}}
