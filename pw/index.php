<?php
/*
//Paiz Abdul Jabar
//203040108
*/
?>

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';
//Melakukan query dari database
$buku = query("SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum web_203040108</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    </style>
</head>
<body>
<div class="add">
        <a href="tambah.php"><button class="tambah" id="tambah">Tambah</button></a>
    </div>

<div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            
            <?php $i = 1 ?>
            <?php foreach($buku as $bk): ?>
                <tr>
                
                <div class="card" style="width: 45rem;">
                <img class="img"src="img/<?= $bk["gambar"]; ?>" width="">
                <a href="ubah.php?id=<?= $bk['id']?>"><button class="ubah">Ubah</button></a>
                    <a href="hapus.php?id=<?= $bk['id'] ?>" onclick="return confirm('Hapus Data?');"> <button class="hapus" id="hapus">Hapus</button></a>
          <div class="card-body">
          <?= $bk["judul"] ?>
          <?= $bk["pengarang"] ?>
          <?= $bk["penerbit"] ?>
          <?= $bk["tahun_terbit"] ?>
</div>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
</body>
</html>
