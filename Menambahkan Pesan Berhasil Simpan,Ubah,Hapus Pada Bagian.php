</div>
  </div>

      <?php
          if ($_SESSION['pesan'] != "kosong") {
          ?>
              <div class="alert alert-success" role="alert">
                  <?php echo $_SESSION['pesan'] ?>
              </div>
          <?php
          $_SESSION['pesan'] = "kosong";
          }
         ?>

  <div class="table-responsive">
  <a href="?page=bagiancreate" class="btn btn-success mb-3"> <span data-feather="users"></span> TAMBAH DATA</a>
    <table class="table table-striped table-sm">