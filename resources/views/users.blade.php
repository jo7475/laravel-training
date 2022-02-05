<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            
        }
    </style>
</head>
<body>
    <h1>users are</h1>
    <table border='2px'>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>
            <td>Position</td>
        </tr>
        @foreach ($data as $item)
              <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['email']}}</td>
            <td> <img src={{$item['avatar']}}/></td>
        </tr>
        @endforeach
      
    </table>
</body>
</html>