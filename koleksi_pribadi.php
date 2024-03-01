<h1 class="mt-4"><font color="white">Koleksi Pribadi </font></h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th width="18%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        // Ambil ID pengguna yang sedang login
                        $user_id = $_SESSION['user']['id_user'];

                        // Query untuk mengambil koleksi pribadi milik pengguna yang sedang login
                        $query = mysqli_query($koneksi, "SELECT koleksipribadi.id_koleksi, buku.judul, buku.penulis, buku.penerbit 
                                                         FROM koleksipribadi 
                                                         LEFT JOIN buku ON koleksipribadi.id_buku = buku.id_buku
                                                         WHERE koleksipribadi.id_user = $user_id");

                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <style>
                                body {
                                    background: url(assets/img/perpus1.jpeg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    background-attachment: fixed;
                                }
                            </style>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['penulis']; ?></td>
                                <td><?php echo $data['penerbit']; ?></td>
                                <td>
                                    <!-- Tombol Hapus -->
                                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=koleksi_pribadi_hapus&&id=<?php echo $data['id_koleksi']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        
                        ?>
                        <style>
                                            body{
                                                background:url(assets/img/3.jpg);
                                                background-repeat: no-repeat;
                                                background-size: cover;

                                            }
                                    </style>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
