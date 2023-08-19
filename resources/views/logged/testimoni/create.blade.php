<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan & Kesan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('css/testimoni.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <h4 class="text-center bg-forestgreen custom-rounded py-2 mb-4"><span class="text-white">DEPARTEMEN PENGADAAN JASA </span><br><span class="khaki">PT PETROKIMIA GRESIK</span></h4>
                <form class="pt-2 pb-4 px-4 bg-white custom-rounded shadow-none" action="{{route('testimoni.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                    @csrf
                    <p class="font-weight-bold text-center mt-3 forestgreen">Pesan & Kesan</p>
                    <div class="form-group row">
                        <div class="col">
                            <div class="rate">
                                <input type="radio" id="star5" class="rate" name="nilai" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" checked id="star4" class="rate" name="nilai" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" class="rate" name="nilai" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" class="rate" name="nilai" value="2">
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" class="rate" name="nilai" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama/Instansi">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col">
                            <textarea class="form-control" name="ulasan" rows="6" placeholder="Ulasan" maxlength="255"></textarea>
                        </div>
                    </div>
                    <div class="mt-3 text-right">
                        <button class="btn btn-sm bg-forestgreen custom-rounded khaki">Submit
                        </button>
                    </div>
                    <div class="bg"></div>
                    <div class="bg bg2"></div>
                    <div class="bg bg3"></div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>