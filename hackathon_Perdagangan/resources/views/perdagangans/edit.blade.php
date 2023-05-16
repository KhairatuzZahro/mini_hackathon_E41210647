<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CRUD EDIT -Tugas Membuat CRUD sederhana tentang perdagangan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('perdagangans.update', $perdagangans->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="no">No</label>
                                <input type="text" class="form-control @error('no') is-invalid @enderror"
                                    name="no" value="{{ old('no', $perdagangans->no) }}" required>

                                <!-- error message untuk nama -->
                                @error('no')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama_barang">nama_barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                    name="nama_barang" value="{{ old('nama_barang', $perdagangans->nama_barang) }}" required>

                                <!-- error message untuk alamat -->
                                @error('nama_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga', $perdagangans->harga) }}" required>

                                <!-- error message untuk no_tlp -->
                                @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Stok">Stok</label>
                                <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                    name="stok" value="{{ old('stok', $perdagangans->stok) }}" required>

                                <!-- error message untuk usia -->
                                @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Edit</button>
                            <a href="{{ route('perdagangans.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>

</html>