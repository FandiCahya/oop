<?php
include 'koneksi.php';
$db = new database();
?>

<html lang="en" dir="ltr">
    <head>
        <title align="center">-CRUD OOP-</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxNehoP+VmnDGMN5t9UJ6Z" crossorigin="anonymous">        
        <link rel="stylesheet" href="css/tambahan.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.3.7.0.js"></script>
    </head>

    <body>
        <div class="container">
        <button onclick="showPopup()" class="btn btn-primary">Tambah Data</button>
            <div id="popup" class="container ok">
            <div class="container anim">
            <form action="proses.php?aksi=tambah" method="post"> 
                <h3 align="center">Tambah Data Mahasiswa</h3>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" style="width:500px;">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" style="width:500px;">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" style="width:500px;">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" style="width:500px;">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
                    <div class="close-button" onclick="closePopup()"><h1>&times;</h1></div>
            </div>
            <h3 align="center">Data Mahasiswa</h3>
            <table border="1" class="table table-bordered table-hover">
                <tr id="tabel">
                    <td width="50px" align="center">No</td>
                    <td width="200px" align="center">NIM</td>
                    <td width="200px" align="center">Nama</td>
                    <td width="300px" align="center">Alamat</td>
                    <td width="200px" align="center">Telepon</td>
                    <td align="center">Aksi</td>
                </tr>
                <?php
                $no = 1;
                foreach ($db->__tampil_data() as $data) { ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['telepon']; ?></td>
                        <td>
                            <a href="edit.php?nim=<?php echo $data['nim']; ?>&aksi=edit">Edit</a> 
                            <a href="proses.php?nim=<?php echo $data['nim']; ?>&aksi=hapus">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <br>
            <!-- <form action="proses.php?aksi=tambah" method="post"> 
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" style="width:500px;">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" style="width:500px;">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" style="width:500px;">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" style="width:500px;">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->
        </div>
        <script>
        function showPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
        }

        function closePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
        }
    </script>
    </body>
</html>
