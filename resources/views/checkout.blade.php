<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #bg-wisata {
            background-image: url('{{ asset('frontend/assets/img/hero.jpg') }}');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
</head>


<body id="bg-wisata">
    <div class="container" style="margin-top: 10rem;">
        <div class="row">
            <div class="col-lg-4 offset-2">
                <div class="p-2">
                    <div class="card h-100" style="">
                        <div class="card-header bg-success">
                            <h5 class="text-white"><small>Proses Pembayaran</small></h5>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control mt-2" name="nama" id="nama">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control mt-2" name="email" id="email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="total">Total Biaya</label>
                                    <input type="text" class="form-control mt-2" name="total" id="total"
                                        value="{{ number_format(Cart::getTotal(), 2) }}" readonly disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nama">Pilih Rekening Pembayaran</label>
                                    <select class="form-control mt-2" name="" id="">
                                        <option value="" style="display: none;">--- Pilih Rekening ---</option>
                                        <option value="BCA">BCA</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BNI">BRI</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <p class="mt-2">Harap transfer ke rekening 11122233 a/n Travel</p>
                                </div>
                                <button class="btn btn-primary mt-3 w-100">Bayar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <ol class="list-group list-group-numbered">
                    @foreach ($cartItems as $cart)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $cart->name }}</div>
                                <p class="mb-0">Harga Rp. {{ number_format($cart->price, 2) }}/orang</p>
                                <p>Total : Rp. {{ $cart->quantity * $cart->price }}</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">{{ $cart->quantity }} Orang</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
