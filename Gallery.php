<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM gallery ORDER BY tanggal DESC");
$no = 1;
?>

<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Username</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($query) > 0) { ?>
                    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['Deskripsi'] ?></td>
                            <td>
                                <?php if ($row['gambar'] != '') { ?>
                                    <img src="img/<?= $row['gambar'] ?>" width="120">
                                <?php } else { ?>
                                    Tidak ada gambar
                                <?php } ?>
                            </td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['tanggal'] ?></td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="5" class="text-center">Data gallery belum ada</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>