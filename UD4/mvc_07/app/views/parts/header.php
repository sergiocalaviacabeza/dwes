<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">App MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."/home":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Home":""?></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."/user":"" ?>">
        <?php echo isset($_SESSION['user']) ? "Usuarios":""?></a>
      </li>
      </ul>

    <!-- nuevo -->
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href=""><?php echo isset($_SESSION['user']) ? $_SESSION['user']->name :'' ?></a></li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo isset($_SESSION['user']) ? PATH."/login/logout": PATH."/login" ?>">
        <?php echo isset($_SESSION['user']) ? "Logout":"Login"?></a>
      </li>
    </ul>
  </div>
</nav>
