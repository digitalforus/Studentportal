@component('mail::message')
New Registration

A New Student has just joined Femsam Educational Consultancy.
Login tn to your dashboard to viewb his or her profile.

@component('mail::button', ['url' => 'https://intense-spire-64762.herokuapp.com/admin/login'])
Log in
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
