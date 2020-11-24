<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaggio ricevuto</title>
    <style>
        ul {
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <p>Caro/Cara {{$contact['name']}},</p>
    <p>Abbiamo ricevuto la Sua prenotazione. Sarà contattato/contattata al più presto.</p>
    <ul>
        <li>Visita da: {{$contact['dentist']}}</li>
        <li>Data: {{$contact['date']}}</li>
        <li>Ora: {{$contact['hour']}}</li>
        <li>Nome del paziente: {{$contact['name']}}</li>   
        <li>Email del paziente: {{$contact['email']}}</li>   
        <li>Messaggio del paziente: {{$contact['message']}}</li>   
    </ul>
    <p><small>Questo messaggio è stato inviato automaticamente tramite il sistema di prenotazione online di Studio Dentistico Dott. Simone Sapienza.</small></p>
</body>
</html>