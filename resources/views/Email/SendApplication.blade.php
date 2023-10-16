@component('mail::message')
<img src="{{ asset('/storage/Circuit real LOGO (2450 x543-24.9).png') }}" style="width: 500px; height 300px;" class="img-fluid" alt="csi-logo">
<br />
<br />
<br />
<h3>First Name: {{ $firstname }} </h3>
<h3>Last Name: {{ $lastname }} </h3>
{{-- <h3>Email: {{ $email }} </h3> --}}
<h3>Position Applying For: {{ $position_applying_for }} </h3>

Thanks,<br>
{{ config('app.name') }}
@endcomponent