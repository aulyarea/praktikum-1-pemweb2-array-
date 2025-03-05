<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-bordered-sides {
            border-left: 2px solid #dee2e6;
            border-right: 2px solid #dee2e6;
         }
         #table {
            justify-content: space-between;
            align-items: flex-start;
         }

     </style>
</head>
<body>
    <!-- membuat form -->
    <h3>Belanja Online</h3>
    <hr>

<form>
  <div class="form-group row">
    <label for="pembeli" class="col-2 col-form-label">Costumer</label> 
    <div class="col-2">
      <input id="pembeli" name="pembeli" placeholder="Nama costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-2">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

<!-- membuat table harga -->
    <div class="container mt-4" id="table">
        <div class="row">
      <!-- Kolom pertama untuk tabel -->
        <div class="col-md-4">
            <table class="table table-bordered-sides">
            <tbody>
                <tr class="table-primary">
                     <td>Daftar Harga</td>
                </tr>
                <tr>
                    <td>TV : 4.200.000</td>
                </tr>
                <tr>
                    <td>KULKAS : 3.100.00</td>
                </tr>
                <tr>
                    <td>MESIN CUCI : 3.800.000 </td>
                </tr>
                <tr class="table-primary">
                    <td>Harga dapat berubah setiap saat</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>













<!-- <table class="table table-dark table-striped ">
  <thead>
    <tr>
      <th scope="col">Daftar Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">TV : 4.200.000</th>
    </tr>
    <tr>
      <th scope="row">KULKAS : 3.100.00</th>
    </tr>
    <tr>
      <th scope="row">MESIN CUCI : 3.800.000 </th>
    </tr>
    <tr>
      <th scope="row">Harga dapat berubah setiap saat </th>
    </tr>
  </tbody>
</table> -->

</body>
</html>