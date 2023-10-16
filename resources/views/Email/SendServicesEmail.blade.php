@component('mail::message')
<img src="{{ asset('/storage/Circuit real LOGO (2450 x543-24.9).png') }}" style="width: 500px; height 300px;" class="img-fluid" alt="csi-logo">
<br />
<br />
<br />
<h3>Customer Name : {{ $customer_name }} </h3>
<h3>Branch Name : {{ $branch_name }} </h3>
<h3>Address : {{ $address }} </h3>
<h3>Contact Person : {{ $contact_person }} </h3>
<h3>Contact Number : {{ $contact_number }} </h3>
<h3>Email : {{ $email }} </h3>
<h3>Warranty : {{ $warranty }}</h3>
<h3>Account Manager : {{ $account_manager }}</h3>
<h3>Product with Concern : {{ $product_concern }}</h3>
<h3>Trouble Description : {{ $product_description }}</h3>
<h3>Product Brand : {{ $product_brand }}</h3>
<h3>Model No.: {{ $model_no }}</h3>
<h3>Other Details : {{ $other_details }}</h3>

Thanks,<br>
{{ config('app.name') }}
@endcomponent