<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<title>@yield('title', 'Sistem Informasi Mahasiswa')</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link @yield('mahasiswa')" href="{{route('mahasiswa')}}">Data Mahasiswa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link @yield('dosen')" href="{{route('dosen')}}">Data Dosen</a>
				</li>
				<li class="nav-item">
					<a class="nav-link @yield('gallery')" href="{{route('gallery')}}">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link @yield('menuinfo')" href="{{route('info',['fakultas'=>'FMIPA','jurusan'=>'Matematika', 'Kelas'=>'rpl2'])}}">Info</a>
				</li>
			</ul>
		</div>
	</nav>

	@yield('content')

	<footer class="bg-dark py-4 text-white mt-4 text-center @yield('footer')">
		<div class="container">
			<a href="{{ url('/informasi/FMIPA/Matematika/Rpl2') }}">Jurusan Matematika</a>|
			Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Duniailkom
		</div>
	</footer>

</body>
</html>