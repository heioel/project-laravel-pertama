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
                @foreach ($admin as $adm)
                    <form action="{{ route('admin.update') }}" method="post">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" autocomplete="off" value="{{ $adm->id }}"
                            class="form-control">
                        <div class="mb-3">
                            <label for="username" class="label-input">Masukkan Username:</label>
                            <input type="text" name="username" autocomplete="off" value="{{ $adm->username }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="label-input">Masukkan Email:</label>
                            <input type="text" name="email" autocomplete="off" value="{{ $adm->email }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="label-input">Masukkan Password:</label>
                            <input type="text" name="password" autocomplete="off" value="{{ $adm->password }}"
                                class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back</a>
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
