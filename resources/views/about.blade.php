<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin:0;
            background-color:#000025;
            color: aliceblue;
        }
.header{
    background-color: coral;
    width:100%;
    height:200px;
    padding:20px;
}
.hello{
    font-size: 35px;
    font-weight: bold;
    align-self:center;

}
.link{
    color:black;
    font-size: 20px;
}
form{
    display: flex;
    flex-direction: column;
    width:20%;
    padding:20
}

        </style>
</head>
<body>
    <div class="header">
        <p class="hello">HELLO</p>
        <a href="/welcome" class="link">click here</a>

    </div>
            @foreach ($about as $item)
        
            <h3>{{$item}}</h3>
            
        @endforeach           

        <form action="user" method="POST">
            @csrf
            @if ($errors->any())
           <h5> @error('username')
                {{$message}}
            @enderror</h5> @endif
            <input type="email" name='username'>
            @if ($errors->any())
                <h5> @error('password')
                {{$message}}
            @enderror</h5>
            @endif
            
            <input type="password" name="password">
            <button type="submit">submit</button>
        </form>
</body>
</html>