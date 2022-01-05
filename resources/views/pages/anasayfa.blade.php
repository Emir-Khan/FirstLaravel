<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Laravel</title>
</head>
<body>
    <h1>Laravel</h1>
    <?php /* echo $name; */ ?>  {{$names[0]}} <br>
    
    <?php /* if (true) {
        echo "PHP If"; 
    }*/ ?>

    @if(false) Laravel If @elseif(true) Else If Laravel @endif
    <br>
    @isset($name)
        $name değişkeni var
    @endisset
    <br>

    @include("pages.users",["name"=>"ForEach"])

    @php
        echo "<h4> Names</h4>"
    @endphp

    <h3>Names</h3>
    @foreach ($names as $name)
       <li>{{$loop->iteration}} {{$name}} @if ($loop->first) 1. isim @endif</li> 
    @endforeach

    @include("pages.users",["name"=>"For"])
    
    @for ($i=0;$i<count($names);$i++)
        {{$names[$i]}}
    @endfor
    <br>
    <a href="{{route("namePage","Emirhan")}}">Name Page</a> <br>
    <a href="{{route("formPage")}}">Form Page</a>
    
</body>
</html>