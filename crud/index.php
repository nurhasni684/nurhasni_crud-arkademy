<?php 
include("koneksi.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Arkademy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<header>
    <h3>Produk</h3>
</header>
<div class="container-fluid"> 
    <nav>
        <a href="form-daftar.php" class="btn btn-success">Tambah Baru</a>
    </nav>
    <br>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th colspan="3">Aksi</th>
        </tr>
    </thead>
    <tbody>
    
        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);
        $no=1;
        while($produk = mysqli_fetch_array($query)){
            echo "<tr>
                <th> $no</th>
                <td>".$produk['nama_produk']."</td>
                <td>".$produk['keterangan']."</td>
                <td>".$produk['harga']."</td>
                <td>".$produk['jumlah']."</td>
                <td>
                    <a href='form-edit.php?id=".$produk['id']."' >Edit</a> |
                    <a href='hapus.php?id=".$produk['id']."'>Hapus</a>
                </td>
                </tr>";
            $no++;
        }
        ?>
        

    </tbody>
    </table>
    
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</div>


    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>