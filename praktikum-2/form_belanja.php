<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body class="p-5">
    <div class="container-fluid row">
        <div class="col-8">
            <form class="p-3 border border-info">
                <div class="form-group row ">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS">
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <div class="container-fluid bg-primary text-white p-2 border border-primary">
                Daftar Harga
            </div>
            <div class="container-fluid p-2 border border-info">
                TV : 4.200.000
            </div>
            <div class="container-fluid p-2 border border-info">
                Kulkas: 3.100.000
            </div>
            <div class="container-fluid p-2 border border-info">
                Mesin Cuci : 3.800.000
            </div>
            <div class="container-fluid bg-primary text-white p-2 border border-primary">
                Harga dapat berubah setiap saat
            </div>
        </div>
    </div>
</body>

</html>