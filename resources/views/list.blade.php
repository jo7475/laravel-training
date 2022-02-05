<html lang="amh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table:{
            border-width:1px;
        }
    </style>
</head>
<body>
    <h1>data</h1>
    <table border="1px">
        <tr>
            <td>Id</td>
            <td>User Name</td>
            <td>Age</td>
            <td>Position</td>
        </tr>
        @foreach ($city as $item)
            <tr>
            <td>{{$item['ID']}}</td>
            <td>{{$item['Name']}}</td>
            <td>{{$item['CountryCode']}}</td>
            <td>{{$item['District']}}</td>
        </tr>
        @endforeach
        
    </table>
    <span>
        {{$city->links()}}
    </span>
</body>
</html>