<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
<title>PERPUSTAKAAN DIGITAL</title>
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Status Peminjaman</th>           
    </tr>
    <?php
    include "koneksi.php";
    $i = 1;
        $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
        while($data =mysqli_fetch_array($query)){
            $tgl_peminjam =$data['tanggal_peminjaman'];
            $tgl_pengembalian =$data['tanggal_pengembalian'];
            $status =$data['status_peminjaman'];
            ?>
            <tr>
            <td><?php echo $i++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?= date('d-m-Y',strtotime($tgl_peminjam)) ?></td>
                                <td><?=  date('d-m-Y',strtotime($tgl_pengembalian)) ?></td>
                                <td><?=$status?></td>
            </tr>
            <?php
        }
    ?>


</table>
<br>




<p style="margin-bottom:710px;"><center><i>" TERIMAKASIH TELAH MENGUNJUNGI KEPERPUSTAKAAN KAMI ".</i></center></p>


<script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 100);
</script>