<?php
      session_start();
      if (isset($_SESSION['username'])) {
        header('Location: pages/dashboard.php');
      }

      if (isset($_POST['button_login'])) {
	@@ -69,7 +69,7 @@
        <?php
          $_SESSION['username'] = $_POST['username'];

          header('Location: pages/dashboard.php');
        } else {
        ?>
          <div class="alert alert-danger" role="alert">