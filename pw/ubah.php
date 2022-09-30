<?php
require 'functions.php';
$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
            </script>";
    } else {
    echo "<script> 
            alert('data gagal diubah!');
            document.location.href = 'index.php';
            </script> ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../css/tambah.css">
</head>

<body>

<div class="container">
    <h1>Form Ubah Data Buku</h1>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $bk['id'];?>">
	<ul>
		<li>
			<label for="judul">Nama :</label><br>
			<input type="text" name="judul" id="judul" required value="<?= $bk['judul'];?>"><br><br>
		</li>
		<li>
			<label for="gambar">Description :</label><br>
			<input type="text" name="gambar" id="gambar" required value="<?= $bk['gambar'];?>"><br><br>
		</li>
		<li>
			<label for="pengarang">Price :</label><br>
			<input type="text" name="pengarang" id="pengarang" required value="<?= $bk['pengarang'];?>"><br><br>
		</li>
		<li>
			<label for="penerbit">Category :</label><br>
			<input type="text" name="penerbit" id="penerbit" required value="<?= $bk['penerbit'];?>"><br><br>
		</li>
        <li>
            <label for="tahun_terbit">Gambar :</label><br>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required value="<?= $bk['tahun_terbit'];?>"><br><br>
        </li>
<br>
<button class="submit" type="submit" name="ubah">Ubah Data!</button>
<button class="back" type="submit">
	<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>

    </form>
    </div>

</body>

</html>