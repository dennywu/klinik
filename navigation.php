<div class='navbar navbar-fixed-top'>
        <div class='navbar-inner'>
            <div class='container'>
                <a class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse'>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </a>
                <a class="brand" href="index.php">Klik Gak Jelas</a>
                <div class='nav-collapse'>
                    <ul class='nav'>
                        <li class='divider-vertical'></li>
                        <li><a href='home.php'>Beranda</a></li>
                        <li><a href='pasien.php'>Data Pasien</a></li>
                        <li><a href='obat.php'>Daftar Obat</a></li>
                    </ul>
                    <ul class="nav pull-right">
                      <li style="color:White;font-weight: bold;">
                          <a href="#">
                              <i class='icon-user icon-white' style="margin-right: 1px;margin-top: 2px;"></i>
                              <?php echo $_SESSION['user']; ?>
                          </a>
                      </li>
                      <li class="divider-vertical"></li>
                      <li><a href="application/logout.php"><i class="icon-off icon-white" style="margin-right: 3px;margin-top: 2px;"></i>Log Out</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>