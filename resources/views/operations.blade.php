<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações</title>
</head>
<body>
    <h1>Tela de Contas</h1>
    <h2>{{$operation}}</h2>
    @switch($operation)
        @case("soma")
            <p>{{$n1}} + {{$n2}} = {{$n1+$n2}}</p>
            @break
        @case("subtração")
            <p>{{$n1}} - {{$n2}} = {{$n1-$n2}}</p>
            @break
        @case("divisão")
            @if ($n2==0)
                <p>Divisão não suportada</p>
            @else
                <p>{{$n1}} / {{$n2}} = {{$n1/$n2}}</p>
            @endif
            @break
        @case("multiplicação")
            <p>{{$n1}} x {{$n2}} = {{$n1*$n2}}</p>
            @break
        @default
        <p>{{$n1}} + {{$n2}} = {{$n1+$n2}}</p>
        <p>{{$n1}} - {{$n2}} = {{$n1-$n2}}</p>
        @if ($n2==0)
            <p>Divisão não suportada</p>
        @else
            <p>{{$n1}} / {{$n2}} = {{$n1/$n2}}</p>
        @endif
        <p>{{$n1}} x {{$n2}} = {{$n1*$n2}}</p>
    @endswitch

</body>
</html>