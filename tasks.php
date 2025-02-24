<h1 class="mt-4">Catatan Kegiatan</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=tasks_tambah" class="btn btn-outline-secondary">+ Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Catatan Kegiatan</th>
                        <th>Nama Kegiatan</th>
                        <th>User</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM tasks");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['categories']; ?></td>
                                <td><?php echo $data['tasks']; ?></td>
                                <td><?php echo $data['user']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td>
                                    <a href="?page=tasks_ubah&&id=<?php echo $data['id']; ?>" class="btn btn-outline-secondary">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin menhapus data ini?');" href="?page=tasks_hapus&&id=<?php echo $data['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>