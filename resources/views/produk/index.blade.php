<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Produk - Laravel</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Produk Page</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Nama Barang:</label>
                        <input type="text" name="nama_produk" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Gambar:</label>
                        <input type="file" name="gambar" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Harga:</label>
                        <input type="number" name="harga" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Jumlah Stock:</label>
                        <input type="number" name="stock" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 text-center">
                                <a href="{{url('/')}}" class="btn btn-secondary">Dashboard</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 text-center">
                                <a href="{{ route('admin.index') }}" class="btn btn-primary">Admin</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>GAMBAR</th>
                            <th colspan="2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($produks) > 0)
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $produk->nama_produk }}</td>
                                    <td>{{ $produk->gambar }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>{{ $produk->stock }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('produk.destroy', $produk->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="5">Belum Ada Produk</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
