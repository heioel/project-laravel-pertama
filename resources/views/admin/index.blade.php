<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin - Laravel</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Admin Page</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Username:</label>
                        <input type="text" name="username" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Email:</label>
                        <input type="email" name="email" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="label-input">Masukkan Password:</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" required>
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
                                <a href="{{ route('produk.index') }}" class="btn btn-primary">Produk</a>
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
                            <th colspan="2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($admins) > 0)
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->password }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.destroy', $admin->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="4">User Tidak Ada</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
