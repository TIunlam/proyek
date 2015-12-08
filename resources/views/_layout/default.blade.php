<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Web TI - @yield('title')</title>
		<link rel="stylesheet" href={{ asset('css/app.css') }}>
	<!--	<link rel="stylesheet" href={{ asset('css/custom.css') }}>	-->
	</head>
	<body>
		@include('_layout.menu')

		@yield('judul','Tidak ada judul')

		@section('isi')
			<h2>Ini isi Layout</h2>
		@show
	</body>
</html>