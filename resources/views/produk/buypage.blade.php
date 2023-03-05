<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    @foreach ($produk as $pdk)
        <title>Buy - {{ $pdk->nama_produk }}</title>
    @endforeach
</head>

<body>
    @foreach ($produk as $pdk)
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="card card-body mt-5">
                        <h1 class="text-center">Check Out Sekarang</h1>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p>Nama Barang :</p>
                            <p>{{ $pdk->nama_produk }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p>Jumlah Unit Dibeli :</p>
                            <button onclick="kurangUnit()" id="buttonMines" class="btn btn-secondary">-</button>
                            <p id="unit">1</p>
                            <button onclick="tambahUnit()" class="btn btn-secondary">+</button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p>Metode Pembayaran :</p>
                            <p>pake apapun</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p>Tempat Tujuan :</p>
                            <p>Karepmu</p>
                        </div>
                        <div class="row">
                            <div class="col-md-8 d-flex justify-content-around align-items-center">
                                <h3>Total :</h3>
                                <h4>Rp.{{ $pdk->harga }}</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-success">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('home.index') }}" class="btn btn-danger mt-3">kembali Ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script>
        let unit = document.getElementById('unit');
        let getValueUnit = unit.textContent;
        let cvUnit = parseInt(getValueUnit);
        let btnMines = document.getElementById('buttonMines');

        function tambahUnit() {
            cvUnit += 1;
            if (cvUnit == 0) {
                unit.textContent = 0;
                btnMines.disabled = true;
            } else {
                unit.textContent = cvUnit;
                btnMines.disabled = false;
            }
        }

        function kurangUnit() {
            cvUnit -= 1;
            if (cvUnit == 0) {
                unit.textContent = 0;
                btnMines.disabled = true;
            } else {
                unit.textContent = cvUnit;
                btnMines.disabled = false;
            }
        }
    </script>
</body>

</html>
