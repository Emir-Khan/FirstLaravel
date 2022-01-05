<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <form method="post" action="form/post">
        @csrf
        <div class="form-group">
          <label for="emailInput">Email address</label>
          <input name="email" value="{{old("email")}}" type="email" id="emailInput" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" id="exampleInputPassword1" placeholder="Password">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword2">Password Again</label>
          <input name="password_confirmation" type="password" id="exampleInputPassword2" placeholder="Password">
        </div>
        <ul style="background-color: red">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>  
          @endforeach
        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</body>
</html>