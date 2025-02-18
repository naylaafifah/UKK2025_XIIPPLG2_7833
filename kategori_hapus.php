<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE category_id=$category_id");
?>
<script>
    alert('Hapus Data Berhasil.');
    location.href = "index.php?page=kategori";
</script>