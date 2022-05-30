<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Bagian</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>

  <div class="table-responsive">
  <a href="?page=bagiancreate" class="btn btn-success mb-3"> <span data-feather="users"></span> TAMBAH DATA</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama Karyawan</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Bagian</th>
        </tr>
      </thead>
      <tbody>
      <?php 
              $selectSQL = "SELECT * FROM bagian";
              $database = new Database();
              $connection = $database->getConnection();
              $statement = $connection->prepare( $selectSQL);
              $statement->execute();  

              $no = 1;
              while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {

              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nik'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['bagian'] ?></td>
                <td>

                <a href="?page=bagianupdate&id=<?php echo $data['id'] ?>" class="badge bg-warning">
                <span data-feather="edit">
              </a>
              <a href="?page=bagiandelete&id=<?php echo $data['id'] ?>" class="badge bg-danger">
                <span data-feather="x-octagon">
              </a>
                </td>

              </tr>
              <?php 
              }
              ?>
            </tbody>