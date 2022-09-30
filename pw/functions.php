<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "prakweb_2022_b_203040108") or die ("Database salah!");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

//functions untuk menambah data buku
function tambah($data)
{
    $conn = koneksi();
    $judul = htmlspecialchars($data['judul']);
    $img = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    

    $query = "INSERT INTO buku
                    VALUES
                    (null, '$judul','$img','$pengarang','$penerbit','$tahun_terbit');
                    ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

//functions untuk meengubah data
function ubah($data)
{
	$conn = koneksi();

	$id = $data ['id'];
	$judul = htmlspecialchars($data['judul']);
	$img = htmlspecialchars($data['gambar']);
	$pengarang = htmlspecialchars($data['pengarang']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$tahun_terbit = htmlspecialchars($data['tahun_terbit']);

	$queryubah = "UPDATE buku 
					SET
					judul = '$judul',
					gambar = '$img',
					pengarang = '$pengarang',
					penerbit = '$penerbit',
					tahun_terbit = '$tahun_terbit'
					WHERE id = '$id' ";

	mysqli_query($conn, $queryubah);

	return mysqli_affected_rows($conn);
}
?>
