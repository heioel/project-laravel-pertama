<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>My Laravel</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 align="center">Laravel Saya</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($produk as $pdk)
                    <form action="{{ route('produk.update') }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" autocomplete="off" value="{{ $pdk->id }}"
                            class="form-control">
                        <div class="mb-3">
                            <label for="username" class="label-input">Masukkan Nama Produk:</label>
                            <input type="text" name="nama_produk" autocomplete="off" value="{{ $pdk->nama_produk }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $pdk->gambar) }}" class="img-thumbnail" width="100"
                                heigth="100">
                            <br>
                            <label for="username" class="label-input">Masukkan Gambar:</label>
                            <input type="file" name="gambar" autocomplete="off" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="label-input">Masukkan Harga:</label>
                            <input type="number" name="harga" autocomplete="off" value="{{ $pdk->harga }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="label-input">Masukkan Stock:</label>
                            <input type="number" name="stock" autocomplete="off" value="{{ $pdk->stock }}"
                                class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
