<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="layout"> 
            <a href="{{ url('userdashboard') }}">Users</a>
            <a href="{{url('taskdashboard')}}">Tasks</a>
        <a href="{{ route('export') }}" class="btn btn-primary">Export Users & Tasks In Excel</a>
            <a href="/">Exit</a>
        </header>
   
    {{$main}}
    
</body>
</html>