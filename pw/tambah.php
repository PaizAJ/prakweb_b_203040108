<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>";
    } else {
    echo "<script> 
            alert('data gagal ditambahkan!');
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
<link rel="stylesheet" href="css/tambah.css">
</head>

<body>

<div class="container">
    <h1>Form Tambah Data Buku</h1>
    <form action="" method="post">
	<ul>
		<li>
			<label for="judul">Judul :</label><br>
			<input type="text" name="judul" id="judul" required><br><br>
		</li>
		<li>
            <label for="gambar">Gambar :</label><br>
            <input type="text" name="gambar" id="gambar" autofocus required>
        </li>
		<li>
			<label for="pengarang">Pengarang :</label><br>
			<input type="text" name="pengarang" id="pengarang" required><br><br>
		</li>
		<li>
			<label for="penerbit">Penerbit :</label><br>
			<input type="text" name="penerbit" id="penerbit" required><br><br>
		</li>
        <li>
            <label for="tahun_terbit">Tahun Terbit :</label><br>
            <input type="text" name="tahun_terbit" id="tahun_terbit" autofocus required>
        </li>
<br>
<button class="submit" type="submit" name="tambah">Tambah Data!</button>
<button class="back" type="submit">
	<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>

    </form>
    </div>

</body>

</html>