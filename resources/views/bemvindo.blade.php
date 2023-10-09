<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
</head>
<body>
    @foreach ($lista as $nomes)
    <p>
        {{$nomes}} - 
        @component('components.botao')
        @slot('href')
            http://google.com.br
        @endslot
        @slot('cor')
            blue
        @endslot
        Editar
        @endcomponent
        @component('components.botao')
        @slot('href')
            http://9gag.com
        @endslot
        @slot('cor')
            red
        @endslot
        Deletar
        @endcomponent
    </p>
    @endforeach

</body>
</html>