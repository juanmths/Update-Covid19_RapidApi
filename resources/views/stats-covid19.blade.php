<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistik Covid 19</title>

    {{-- Bootstrap Css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap');

    * {
        font-family: 'Montserrat', sans-serif;
    }

    a:hover {
        text-decoration: none;
    }
    select{
        width: 20rem;
    }
    @media only screen and (max-width: 600px) {
        .card-img-top{
            display: none;
        }
        .card-mobile{
            width: 25.5rem !important;
            margin-bottom: 30px;
        }
    }

</style>

<body class="bg-light">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Statistik<strong>Covid-19</strong><br></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://juanmths.com/fkippeduli/">Juan Mths</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://cekongkir.juanmths.com/">Cek Ongkir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.omjuan.com/">Tutorial Programming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="#">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.facebook.com/juanmatheus3798/"><i
                                class="fa fa-facebook-square"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.instagram.com/juanmthss/"><i
                                class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    <div class="container" style="margin-top: 80px;  margin-bottom:100px;">
        <div class="row justify-content-between">
            <div class="col-sm-4">
                <div class="card shadow card-mobile" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('img/covid19.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cek Statistik Covid-19</h5>
                        <p class="card-text">Pilih berdasarkan Negara :</p>
                    </div>
                    <div class="form-group p-3">
                        <form action="{{ url('/') }}" method="get">
                            <select name="country" id="" class="form-control select2">
                                <option value="">--Pilih Negara--</option>
                                @foreach ($country as $result )
                                <option value="{{$result}}">{{$result}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-success btn-block mt-3">Cari</button>
                        </form>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card shadow">
                    <div class="card-header">
                        Coronavirus 19
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p class="text-center">Update Statistik Covid-19 yang tersebar di Dunia.</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-center align-items-center">
                                    <p class="text-center">Update : {{ $list_data["lastUpdate"] }}</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center">
                                    <p class="text-center font-wight-bold">{{ $list_data["country"] }}</p>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center list-group-item-info">
                                    Konfirmasi
                                    <span class="badge badge-primary badge-pill">{{ $list_data["confirmed"] }}</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center list-group-item-danger">
                                    Meninggal
                                    <span class="badge badge-primary badge-pill">{{ $list_data["deaths"] }}</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
                                    Sembuh
                                    <span class="badge badge-primary badge-pill">{{ $list_data["recovered"] }}</span>
                                </li>
                            </ul>
                            <footer class="blockquote-footer mt-5"># <cite title="Source Title">dirumahaja</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Akhir Contact Us -->

    <!-- Footer -->
    <footer class="text-white text-center pt-3 fixed-bottom bg-success shadow">
        <p>Created with <i class="fa fa-coffee"></i> by <a class="text-white font-weight-bold"
                href="https://www.instagram.com/juanmthss/" target="_blank" title="Juan Matheus">Juan Matheus</a></p>
    </footer>
    <!-- Akhir Footer -->
    {{-- Bootstrap Js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
</body>

</html>
