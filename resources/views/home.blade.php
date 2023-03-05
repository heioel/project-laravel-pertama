<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Dashboard - Laravel</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Olshopnya Kakack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="btn btn-outline-primary" href="{{ route('admin.index') }}">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="{{ route('produk.index') }}">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @if (count($produks) > 0)
                @foreach ($produks as $produk)
                    <div class="col-md-3 mt-4">
                        <div class="card" style="width: 16rem;">
                            <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $produk->nama_produk }}</h5>
                                <p class="card-text">Harga : Rp.{{ $produk->harga }}.00</p>
                                <p class="card-text">Stock : {{ $produk->stock }}</p>
                                @if ($produk->stock > 0)
                                    <p class="text-center">Ready Stock</p>
                                @else
                                    <p class="text-center">Sold Out</p>
                                @endif
                                <div class="d-grid gap-2">
                                    <a href="{{route('produk.buy',$produk->nama_produk)}}" class="btn btn-success">Buy-></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <h1 class="text-center">Produk Lagi Kosong</h1>
                </div>
            @endif

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
