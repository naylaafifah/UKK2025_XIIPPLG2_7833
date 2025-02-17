<h1 class="mt-4">My ToDoList</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active" >Welcome To ToDoList</li>
</ol>
<div class="input-group">
  <div class="form-outline" data-mdb-input-init>
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary" data-mdb-ripple-init>
    <i class="fas fa-search"></i>
  </button>
</div>
<div class="row">
    <?php if ($_SESSION['user']['level'] == 'admin') { ?>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                ?>
                Total Kategori</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                ?>
                Total Buku</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                ?>
                Total Ulasan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                ?>
                Total User</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


