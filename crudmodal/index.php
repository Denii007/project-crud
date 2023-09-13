<?php
// panggil koneksi db
include "koneksi.php"
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - PHP MYSQL + MODAL BOOTSTRAP 5 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="mt-3">
            <h3 class="text-center"> CRUD - PHP MYSQL + BOOTSTRAP 5 </h3>
            <h3 class="text-center"> Ngoding pintar </h3>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    TAMBAH DATA
                </button>
                <table class="table table-bordered table-striped table-hover ">
                    <tr>
                        <th> NO. </th>
                        <th> NIM </th>
                        <th> NAMA LENGKAP</th>
                        <th> ALAMAT </th>
                        <th> JURUSAN </th>
                        <th> AKSI </th>
                    </tr>

                    <?php
                    // persiapan menampilkan data
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs ORDER BY id_mhs DESC ");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>

                        <tr>
                            <th><?= $no++ ?> </th>
                            <th> <?= $data['nim'] ?> </th>
                            <th> <?= $data['nama'] ?> </th>
                            <th> <?= $data['alamat'] ?> </th>
                            <th> <?= $data['prodi'] ?> </th>
                            <td>
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>"> ubah data </a>
                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>"> hapus data </a>
                            </td>
                        </tr>

                        <!-- awal Modal UBAH -->
                        <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form method="POST" action="aksi_crud.php">
                                        <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">

                                        <div class="modal-body">


                                            <div class="mb-3">
                                                <label class="form-label">NIM</label>
                                                <input type="text" class="form-control" name="tnim" value="<?= $data['nim'] ?>" placeholder=" masukan NIM anda">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">NAMA LENGKAP</label>
                                                <input type="text" class="form-control" name="tnama" value="<?= $data['nama'] ?>" placeholder="masukan NAMA LENGKAP anda">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">ALAMAT</label>
                                                <textarea class="form-control" name="talamat" rows="3"><?= $data['alamat'] ?>
                                            </textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">PRODI</label>
                                                <select class="form-label" name="tprodi">
                                                    <option value="<?= $data['prodi'] ?>"><?= $data['prodi'] ?></option>
                                                    <option value="D3 - MANAJEMEN INFORMATIKA"> D3 - MANAJEMEN INFORMATIKA </option>
                                                    <option value="S1 - SISTEM INFORMASI "> S1 - SISTEM INFORMASI </option>
                                                    <option value="S1 - TEKNIK INFORMATIKA "> S1 - TEKNIK INFORMATIKA</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal UBAH -->

                        <!-- awal Modal HAPUS -->
                        <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form method="POST" action="aksi_crud.php">
                                        <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">

                                        <div class="modal-body">

                                            <h5 class="text-center"> Apakah anda yakin akan menghapus data ini ? <br>
                                                <span class="text-danger"> <?= $data['nim'] ?> - <?= $data['nama']  ?>
                                                </span>
                                            </h5>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bhapus">Ya, hapus!</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal HAPUS -->

                    <?php endwhile; ?>

                </table>


                <!-- awal Modal TAMBAH -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="aksi_crud.php" method="post">
                                <div class="modal-body">


                                    <div class="mb-3">
                                        <label class="form-label">NIM</label>
                                        <input type="text" class="form-control" name="tnim" placeholder="masukan NIM anda">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NAMA LENGKAP</label>
                                        <input type="text" class="form-control" name="tnama" placeholder="masukan NAMA LENGKAP anda">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">ALAMAT</label>
                                        <textarea class="form-control" name="talamat" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">PRODI</label>
                                        <select class="form-label" name="tprodi">
                                            <option></option>
                                            <option value="D3 - MANAJEMEN INFORMATIKA"> D3 - MANAJEMEN INFORMATIKA </option>
                                            <option value="S1 - SISTEM INFORMASI "> S1 - SISTEM INFORMASI </option>
                                            <option value="S1 - TEKNIK INFORMATIKA "> S1 - TEKNIK INFORMATIKA</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- awal modal TAMBAH -->

            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>