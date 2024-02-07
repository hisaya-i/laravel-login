<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ホーム画面</title>
	<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
	@vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/css/signin.css'])
</head>
<body>
	<div class="container">
		<div class="mt-5">

			<!--@if (session('login_success'))
				<div class="alert alert-success">
					{{ session('login_success') }}
				</div>
			@endif
			<x-alert type="success" :session="session('login_success')"/>-->
			<x-alert type="success" :session="session('success')"/>


			<h3>プロフィール</h3>
			<ul>
				<li>名前:{{ Auth::user()->name }}</li>
				<li>メールアドレス:{{ Auth::user()->email }}</li>
			</ul>
			<form action="{{ route('logout') }}" method="POST">
				@csrf
				<button class="btn btn-danger">ログアウト</button>
			</form>
		</div>

</body>
</html>