<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends("components.bootstrap")
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css">
    <title>Laravel</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
</head>

<body class="text-center">
    <main class="form-signin">
        <form method="post" action="form/post">
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt=""
                width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
              <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="floatingInput"
                  placeholder="name@example.com">
              <label for="floatingInput">Name</label>
          </div>
            <div class="form-floating">
                <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input name="password_confirmation" type="password" class="form-control" id="floatingPassword1"
                    placeholder="Again Password">
                <label for="floatingPassword1">Again Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
<ul style="position: absolute;bottom:0;right:0;" class="h-100 w-50">
    @foreach ($errors->all() as $error)
<div style="height: 50px; display: block">

</div>
    <style>
      .alert{
        position: absolute;
        bottom: 0;
        right: 0;
      }
    </style>
    <div style="display: block; margin-bottom: 50px; position: absolute;
    bottom: 0;
    right: {{10}}px;list-style-type: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Hatalı Giriş!</strong> {{$error}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @endforeach
  </ul>

    {{-- <form method="post" action="form/post">
        @csrf
        <div class="mb-3 w-25">
          <label for="emailInput">Email address</label>
          <input name="email" class="form-control" value="{{old("email")}}" type="email" id="emailInput" placeholder="Enter email">
        </div>
        <div class="mb-3 w-25">
          <label for="exampleInputPassword1">Password</label>
          <input class="form-control" name="password" type="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mb-3 w-25">
          <label for="exampleInputPassword2">Password Again</label>
          <input class="form-control" name="password_confirmation" type="password" id="exampleInputPassword2" placeholder="Password">
        </div>
        <ul style="background-color: red">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>  
          @endforeach
        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> --}}

</body>

</html>
