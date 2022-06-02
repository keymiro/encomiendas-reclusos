<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de : INPEC</p>
    <p>Estes es un correó de notificación, donde se detalla la encomienda entregada</p>
    <p><Strong>TD recluso a quien va dirigida la encomienda : {{$msg['td_recluse']}}</Strong></p>
    <p><Strong>Codigo de encomienda: {{$msg['cod']}}</Strong></p>
    <p><Strong>Objectos aceptados : {{$msg['accepted_objects']}}</Strong></p>
    <p><Strong>Objectos rechazados: {{$msg['declined_objects']}}</Strong></p>
    <p><Strong>Observación de objectos rechazados: {{$msg['declined_observations']}}</Strong></p>
    <p><Strong>fecha de ingreso  {{$msg['created_at']}}</Strong></p>
</body>
</html>
