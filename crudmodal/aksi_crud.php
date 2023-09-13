<?php
// panggil koneksi db
include "koneksi.php";

// jika tombol simpan di klik
if (isset($_POST['bsimpan'])) {

    // persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, prodi)
                                       VALUES  ('$_POST[tnim]',
                                                '$_POST[tnama]',
                                                '$_POST[talamat]',
                                                '$_POST[tprodi]')");

    // jika simpan sukses
    if ($simpan) {
        echo "<script>
            alert('simpan data sukses');
            document.location='index.php';
    </script>";
    } else {
        echo "<script>
            alert('simpan data gagal');
            document.location='index.php';
    </script>";
    }
}

// Uji jika tombol ubah di klik
if (isset($_POST['bubah'])) {

    // persiapan ubah data baru
    $ubah = mysqli_query($koneksi, "UPDATE tmhs SET 
                                                    nim = '$_POST[tnim]',
                                                    nama = '$_POST[tnama]',
                                                    alamat = '$_POST[talamat]',
                                                    prodi = '$_POST[tprodi]'
                                                    WHERE id_mhs = '$_POST[id_mhs]'
                                                    ");



    // jika simpan sukses
    if ($ubah) {
        echo "<script>
            alert('ubah data sukses');
            document.location='index.php';
    </script>";
    } else {
        echo "<script>
            alert('ubah data gagal');
            document.location='index.php';
    </script>";
    }
}

// Uji jika tombol hapus di klik
if (isset($_POST['bhapus'])) {

    // persiapan hapus data baru
    $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_POST[id_mhs]' ");



    // jika hapus sukses
    if ($hapus) {
        echo "<script>
            alert('hapus data sukses');
            document.location='index.php';
    </script>";
    } else {
        echo "<script>
            alert('hapus data gagal');
            document.location='index.php';
    </script>";
    }
}
