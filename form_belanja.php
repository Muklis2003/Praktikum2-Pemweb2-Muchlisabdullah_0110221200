<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>form_belanja</title>
</head>
<body>
<h2 style="text-align: center">Belanja Online</h2>
    <div> 
        <div class="m-5 border border-primary p-4 box col-3">
        <h6 style="text-align: center"> Daftar Harga </h6>
        1. Webcam : Rp. 550.000 <br>
        2. Microphone : Rp. 350.000 <br>
        3. Soundcard : Rp. 850.000 <br>
            <br>
            <br>

            Note : Harga dapat berubah setiap saat.
        
        </div>

        <div class="m-5 border border-succes p-4 rounded col-9">
            <form method="POST" autocomplete="off" action='form_belanja.php'> 
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="text" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="webcam"> 
                    <label for="produk_0" class="custom-control-label">Webcam</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="microphone"> 
                    <label for="produk_1" class="custom-control-label">Microphone</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="soundcard"> 
                    <label for="produk_2" class="custom-control-label">Soundcard</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="text1" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
            </form>
        </div>

        <div class="m-5 border border-success p-4 rounded">
            <?php        
                $nama_customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                if($produk == "webcam") {
                    $total = $jumlah * 550000;
                }
                elseif($produk == "microphone") {
                        $total = $jumlah * 350000;
                }
                elseif($produk == "soundcard") {
                    $total = $jumlah * 850000;
                }

                echo "Nama Customer : $nama_customer <br>";
                echo "Produk pilihan : $produk <br>";
                echo "Jumlah Beli : $jumlah <br>";
                echo "Total Belanja : $total <br>";
            ?>
        </div>
    </div>
</body>
</html>