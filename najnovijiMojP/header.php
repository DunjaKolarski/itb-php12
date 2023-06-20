
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                if (empty($_SESSION["id"])) 
                {
                    // Nelogovani korisnik
                    echo '<li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                          </li>';
                    echo '<li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                          </li>';
                    echo '<li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                          </li>';     
                } 
                else 
                {
                    // Logovani korisnik
                    echo '<li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                          </li>';
                    echo '<li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                          </li>';
                    echo '<li class="nav-item">
                            <a class="nav-link" href="followers.php">Connections</a>
                          </li>';
                    echo '<li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                          </li>';
                    echo '<li class="nav-item">
                          <a class="nav-link" href="reset_password.php">Reset Password</a>
                          </li>';
                }
                ?>
            </ul>
        </div>
    </nav>