<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registers</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        #ea{
            background-repeat: repeat-x 
        }
        #bg-registers{
            background-image: url('{{ asset('frontend/assets/img/hero.jpg') }}');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
</head>

<body id="bg-registers">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg" style="margin-top: 10rem;">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register your accounts!</h1>
                            </div>
                            <form class="user" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                                        @error('name') <small>{{ $message }}</small> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email') <small>{{ $message }}</small> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Password">
                                        @error('password') <small>{{ $message }}</small> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                                        id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password">
                                        @error('password_confirmation') <small>{{ $message }}</small> @enderror
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>