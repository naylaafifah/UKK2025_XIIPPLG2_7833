<h1 class="mt-4">Kegiatan Formal</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=kategori_tambah" class="btn btn-outline-secondary">+ Tambah Kegiatan</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                  
                  $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM categories");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['categories']; ?></td>
                                <td>
                                    <a href="?page=kategori_ubah&&id=<?php echo $data['category_id']; ?>" class="btn btn-outline-secondary">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin menhapus data ini?');" href="?page=kategori_hapus&&id=<?php echo $data['category_id']; ?>" class="btn btn-danger ">Hapus</a>
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