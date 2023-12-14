<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ログインフォーム</title>
  <!-- <link rel="stylesheet" href="/css/signin.css"> -->

  <!-- bootstrapを使うため? -->
	@vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/css/signin.css'])

  <style>
    .flex_container{
      display: inline-flex;
      justify-content: center;
      height: 500px;
      width: 1500px;
    }
    
  </style>
</head>
<body>
  <div class="flex_container">
	<main class="form-signin w-100 m-auto">
	 <form class="form-signin" method="POST" action="{{ route('login') }}">
      @csrf
      <!-- <img class="mb-4" src="{{asset('img/bootstrap.png')}}" alt="" width="72" height="57"> -->
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

    <!-- <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div> -->
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>
  </div>
</body>
</html>