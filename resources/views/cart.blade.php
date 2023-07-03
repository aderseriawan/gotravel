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
        <div class="card">
            <div class="card-header">
                <h3>Keranjang Paket Wisata</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Nama Paket Wisata</th>
                            <th scope="col">Jumlah Orang</th>
                            <th scope="col">Harga /orang</th>
                            <th scope="col">Harga total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cartItems as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="{{ $item->attributes->image }}" alt=""
                                        style="width: 150px;height:100px;" srcset=""></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    {{-- update --}}
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" class="form-control mb-2" style="width: 64px" />
                                        <button class="btn btn-primary btn-sm">Update Jumlah</button>
                                    </form>
                                </td>
                                <td>Rp. {{ number_format($item->price, 2) }}</td>
                                <td>Rp. {{ number_format($item->price * $item->quantity, 2) }}</td>
                                <td>
                                    {{-- delete --}}
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-danger btn-sm">remove</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center"><i>Keranjang kosong, pilih paket wisata <a
                                            href="{{ route('travel_package.index') }}">disini</i></a></td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total Biaya</td>
                            <td colspan="7"><strong>Rp. {{ number_format(Cart::getTotal(), 2) }}</strong></td>
                        </tr>
                        <tr>
                            <td>Jumlah Orang</td>
                            <td colspan="7"><strong>
                                @php
                                    $count = 0;
                                    $items = Cart::getContent();
                                    foreach($items as $item){
                                        $count += $item->quantity;
                                    }
                                    echo $count. ' Orang';
                                @endphp
                                </strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="d-flex">
                    <div class="item me-3">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            @if (Cart::getTotal() > 0)
                                <button class="btn btn-danger btn-sm">Hapus semua paket</button>
                            @endif
                            
                        </form>
                    </div>
                    <div class="item">
                        <form action="/transaksi" method="POST">
                            @csrf
                            @if (Cart::getTotal() > 0)
                            <a href="/checkout" class="btn btn-sm btn-success">Checkout paket</a>
                            @else
                            <a class="btn btn-sm btn-success" href="{{ route('homepage') }}">Lihat paket wisata</a>
                            @endif
                        </form>
            
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
