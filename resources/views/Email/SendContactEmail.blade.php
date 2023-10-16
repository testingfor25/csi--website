@component('mail::message')
<img src="{{ asset('/storage/Circuit real LOGO (2450 x543-24.9).png') }}" style="width: 500px; height 300px;" class="img-fluid" alt="csi-logo">
<br />
<br />
<br />
<h3>First Name: {{ $firstname }} </h3>
<h3>Last Name: {{ $lastname }} </h3>
<h3>Company: {{ $company }} </h3>
<h3>Position: {{ $position }} </h3>
<h3>Contact Number: {{ $contact_number }} </h3>
<h3>Email: {{ $email }} </h3>
<h3>Message : {{ $contact_message }}</h3>

Thanks,<br>
{{ config('app.name') }}
@endcomponent