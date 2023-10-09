<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
</head>
<body>
    <div style="display: flex;
    flex-direction:row">
    @foreach ($pessoas as $p)
        @component('components.card')

            @slot('imagem')
                {{$p['imagem']}}
            @endslot
            @slot('nome')
                {{$p['nome']}}
            @endslot
            @slot('birth')
                {{$p['birth']}}
            @endslot
            @slot('age')
                {{$p['age']}}
            @endslot
        
        @endcomponent
    @endforeach
    </div>
</body>
</html>