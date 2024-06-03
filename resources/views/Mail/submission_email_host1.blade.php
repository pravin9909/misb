<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
           Hi,<br><br>
           Veuillez trouver ci-dessous les informations sur les détails des candidats.<br><br>
           Family Name: {{ $body->familyName }}<br>
           First Name: {{ $body->firstName }}<br>
           Passport Number: {{ $body->passportNumber }}<br>
           Telephone: {{ $body->telephone }}<br>
           Email: {{ $body->email }}<br>
           Address: {{ $body->address }}<br>
           City: {{ $body->city }}<br>
           Zipcode: {{ $body->zipcode}}<br>
           DOB: {{ $body->dob }}<br>
           Nationality: {{ $body->nationality }}<br>
           Qualification: {{ $body->qualification }}<br>
           School: {{ $body->School }}<br>
           Level of French: {{ $body->level_french }}<br>
           Level of English: {{ $body->level_english }}<br>
           Intake Year: {{ $body->intake_year }}<br>
           Program Select: {{ $body->programSelect }}<br>
           Course Select: {{ $body->programSelected }}<br>
           Residence:{{ $body->pay_de_residence }} <br>
           Reference:{{ $body->agent }} <br>
           Language:{{ $body->langSelect }} <br> 
           VISA: <a href="{{ asset('/assets/application/visa')}}/{{$body->visa}}" download="Visa">{{ $body->visa }}</a><br>
           Diploma: <a href="{{ asset('/assets/application/diploma') }}/{{ $body->diploma }}" download="diploma">{{ $body->diploma }}</a><br>
           passportsize: <a href="{{ asset('/assets/application/passportsize') }}/{{ $body->passportsize }}" download="passportsize">{{ $body->passportsize }}</a><br>
           ID Card: <a href="{{ asset('/assets/application/idcard') }}/{{ $body->idcard }}" download="idcard">{{ $body->idcard }}</a><br>
           MoI: <a href="{{ asset('/assets/application/moi') }}/{{ $body->moi }}" download="moi">{{ $body->moi }}</a><br>
           Motivatial Letter: <a href="{{ asset('/assets/application/motivational_letter') }}/{{ $body->motivational_letter }}" download="motivationalLetter">{{ $body->motivational_letter }}</a><br>
           Curriculum Vitae: <a href="{{ asset('/assets/application/cv') }}/{{ $body->curriculum_vitae }}" download="curriculum_vitae">{{ $body->curriculum_vitae }}</a><br>

</body>
</html>