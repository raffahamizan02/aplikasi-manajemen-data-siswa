<nav class="navbar">
    <div class="menu-icon">
        <a href="#" onclick="openSlideMenu()"> Menu</a>
</div>
<ul class="navbar-nav">
       <li><a href="home.php">Home</a></li>
       <li><a href="../CRUD siswa/siswa.php">Siswa</a></li>
       <li><a href="../CRUD prodi/prodi.php">Prodi</a></li>
       <li class="logout">
              <a href="../Session/logout.php">
                  Logout ( <?php echo $_SESSION['user']; ?>)
             </a>
        </li>
    </ul>
</nav>

<div id="side-menu" class="side-nav">
          <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
          <a href="home.php">Home</a>
          <a href="../CRUD siswa/siswa.php">Siswa</a>
          <a href="../CRUD prodi/prodi.php">Prodi</a>
          <a href="../Session/logout.php">Logout</a>
</div>