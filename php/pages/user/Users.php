<?php
require 'function.php';
$data = query("SELECT * FROM users");
?>
<div class='row'>
    <div class="row justify-content-between">
        <div class="col-4">
            <a type="button" class="btn btn-success" href="../user/tambah.php">Tambah Data</a>
        </div>
        <div class="col-4">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
        </div>
        <div style="margin-top: 20px;">
            <table class="table table-hover">
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Telpon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) :
                    ?>
                        <tr style="text-align: center;">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["no_telpon"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td>
                                <a type="button" class="btn btn-primary" href="../user/ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                                <a type="button" class="btn btn-danger" href="../user/hapus.php?id=<?php echo $row["id"]; ?>">Hapus</a>
                            </td>
                        </tr>
                </tbody>
                <?php $i++; ?>
            <?php endforeach; ?>
            </table>
        </div>

    </div>
</div>