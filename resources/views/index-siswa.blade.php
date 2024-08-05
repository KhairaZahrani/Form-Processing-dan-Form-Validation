<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<title>Data siswa</title>
</head>
<body>

	<div class="container text-center p-4">
		<h1 class="mb-3">Siswa</h1>
		<div class="row">
			<div class="col-sm-8 col-md-6 m-auto">
				<ol class="list-group">
					@forelse($siswas as $siswa)
					<li class="list-group-item">
						<a href="{{url('siswa/' .$siswa->nis)}}">
							{{$loop->iteration}}. {{$siswa->nama}}
						</a>
					</li>
					@empty
					<div class="alert alert-dark d-inline-block">Tidak ada data...</div>
					@endforelse
				</ol>
			</div>
		</div>
	</div>

</body>
</html>