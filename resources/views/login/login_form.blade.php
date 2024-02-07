<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ログインフォーム</title>
	@vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/css/signin.css'])
</head>
<body>
	<main class="form-signin w-100 m-auto">
  <form class="form-signin" method="POST" action="{{ route('login') }}">
  	@csrf
    <!--<img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
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

    <!--@if (session('login_error'))
    	<div class="alert alert-danger">
    		{{ session('login_error') }}
    	</div>
    @endif
    <x-alert type="danger" :session="session('login_error')"/>

    @if (session('logout'))
    	<div class="alert alert-danger">
    		{{ session('logout') }}
    	</div>
    @endif
    <x-alert type="danger" :session="session('logout')"/>-->

    <x-alert type="danger" :session="session('danger')"/>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <!--<div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>-->
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <!--<p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>-->
  </form>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>