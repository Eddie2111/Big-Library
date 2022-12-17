<?php
    session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../view/index.php">Big-Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../view/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signup.php">Signup</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Options
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php
        if (!isset($_SESSION['email'])) {
        ?>
          <a class="btn btn-outline-success" href="login.php" role="button">login</a>
        <?php
        } if (isset($_SESSION['email'])) {
        ?>
          <a class="btn btn-outline-danger" href="./../controller/logoutHandler.php" role="button">Logout</a>
        <?php
        }
        ?>


      </form>
    </div>
  </div>
</nav>

</br>