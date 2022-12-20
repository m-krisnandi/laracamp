@component('mail::message')
# Register Camp: {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank you for register on <b>{{ $checkout->Camp->title }}</b>, please see payment intruction by click the button below.

{{-- use invoice --}}
{{-- @component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)]) --}}
{{-- Get Invoice
@endcomponent --}}

{{-- no invoice --}}
@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent