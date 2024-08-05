<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<title>Data Siswa</title>
</head>
<body>

	<div class="container text-center p-4">
		<h1 class="mb-3">Data Siswa</h1>
		<div class="row">
			<div class="m-auto">
				<ol class="list-group">
					@forelse($murids as $murid)
					<li class="list-group-item">
						{{$murid->nama}} ({{$murid->nis}}), Tanggal Lahir:{{$murid->tanggal_lahir}}, Nilai:{{$murid->nilai}}
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