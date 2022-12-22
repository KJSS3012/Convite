<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        @foreach ($convidados as $convidado)
        @foreach ($presentes as $presente)
        @if ($convidado->con_pre_id == $presente->id)
            <div>
                <h3>Convidado: {{$convidado->firstname}} {{$convidado->lastname}} Número: {{$convidado->telephone}} - Presente: {{$presente->name}}</h3>
            </div>
        @endif
        @endforeach    
        @endforeach
    </div>
</body>
</html>