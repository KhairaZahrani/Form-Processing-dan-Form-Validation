<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Form Registrasi</title>
</head>
<body>

    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>@lang('form.judul')</h1>
                <hr>

                <form action="{{url('/proses-form')}}" method="POST">
                    @csrf
                    <input type="hidden" name="locale" value="{{ $locale }}" >
                    <div class="mb-3">
                        <label class="form-label" for="nim">@lang('form.input.nim')</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{old('nim')}}">
                        @error('nim')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="mb=3">
                        <label class="form-label" id="nama">@lang('form.input.nama_lengkap')</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
                        @error('nama')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">@lang('form.input.email')</label>
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">@lang('form.input.jenis_kelamin')</label>
                        <div class="d-flex">
                         <div class="form-check me-3">
                            <input type="radio" name="jenis_kelamin" value="L" @checked(old('jenis_kelamin') == 'L')>@lang('form.input.pilihan_jenis_kelamin.laki-laki')</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin') == 'P')>@lang('form.input.pilihan_jenis_kelamin.perempuan')</label>
                        </div>
                    </div>
                </div>
                @error('jenis_kelamin')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <div class="mb-3">
                    <label class="form-label" for="jurusan">@lang('form.input.jurusan')</label>
                    <select class="form-select" name="jurusan" id="jurusan">
                        <option value="Teknik Informatika" @selected(old('jurusan') == 'Teknik Informatika')>Teknik Informatika</option>
                        <option value="Sistem Informasi" @selected(old('jurusan') == 'Sistem Informasi')>Sistem Informasi</option>
                        <option value="Ilmu Komputer" @selected(old('jurusan') == 'Ilmu Komputer')>Ilmu Komputer</option>
                        <option value="Teknik Komputer"  @selected(old('jurusan') == 'Teknik Komputer') >Teknik Komputer</option>
                        <option value="Teknik Telekomunikasi"  @selected(old('jurusan') == 'Teknik Telekomunikasi')>Teknik Telekomunikasi</option>
                    </select>
                </div>
                @error('jurusan')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <div class="mb-3">
                    <label class="form-label">@lang('form.input.alamat')</label>
                    <textarea class="form-control" id="Alamat" rows="3" name="alamat">{{old('alamat')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">@lang('form.input.tombol')</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>