<?php 
session_start();
$nama='';
if (isset($_SESSION['username'])) {
	$nama=$_SESSION['username'];
}
?>

	<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo">
						<a href="index.php" title="Findoctor"><img src="img/logo1.png" data-retina="true" alt="" width="163" height="36"></a>
					</div>
				</div>
				<nav class="col-md-9 d-lg-block d-none"> <!-- Menambahkan kelas untuk menampilkan navigasi hanya pada layar besar -->
					<ul id="top_access">
						<li id="user">
							<?php 
								if ($nama!='') {
									echo $nama;
								}
							?>
						</li>
					</ul>
					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="index.php" class="show-submenu"><i class="icon-home"></i>Beranda</a>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu"><i class="icon-doc-text"></i>Pages<i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="artikel.php">Artikel</a></li>
									<li><a href="penyakit.php">Penyakit</a></li>
									<li><a href="obat.php">Obat</a></li>	
								</ul>
							</li>
							<li><a href="dokter.php"><i class="icon-user-md"></i>Dokter</a></li>
							<li><a href="rs.php"><i class="icon-hospital"></i>Rumah Sakit</a></li>
							<?php
								if ($nama!='') {
							?>
							<li><a href="logout.php"><i class="icon-logout"></i>Logout</a></li>
							<?php 
								} 
								else{
							?>
								<li><a href="register.php"><i class="icon-user-add"></i>Register</a></li>
								<li><a href="login.php"><i class="icon-login"></i>Login</a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
				<div class="col-md-3 d-lg-none">
					<div class="mobile-menu-toggle" style="position: fixed; top: 10px; right: 10px;">
						<a href="#" class="open-mobile-menu" onclick="toggleMobileMenu()" style="font-size: 30px;"><i class="icon-menu"></i></a>
					</div>
					<div class="mobile-menu" id="mobileMenu" style="display:none;">
						<ul>
							<li><a href="index.php"><i class="icon-home"></i>Beranda</a></li>
							<li class="mobile-dropdown">
								<a href="#0" onclick="toggleDropdownMenu(event)"><i class="icon-doc-text"></i>Pages<i class="icon-down-open-mini"></i></a>
								<ul class="mobile-dropdown-menu" style="display:none;">
									<li><a href="artikel.php">Artikel</a></li>
									<li><a href="penyakit.php">Penyakit</a></li>
									<li><a href="obat.php">Obat</a></li>
								</ul>
							</li>
							<li><a href="dokter.php"><i class="icon-user-md"></i>Dokter</a></li>
							<li><a href="rs.php"><i class="icon-hospital"></i>Rumah Sakit</a></li>
							<?php
								if ($nama!='') {
							?>
							<li><a href="logout.php"><i class="icon-logout"></i>Logout</a></li>
							<?php 
								} 
								else{
							?>
								<li><a href="register.php"><i class="icon-user-add"></i>Register</a></li>
								<li><a href="login.php"><i class="icon-login"></i>Login</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<script>
					function toggleMobileMenu() {
						var menu = document.getElementById('mobileMenu');
						if (menu.style.display === 'none') {
							menu.style.display = 'block';
						} else {
							menu.style.display = 'none';
						}
					}

					function toggleDropdownMenu(event) {
						event.preventDefault();
						var dropdownMenu = event.target.nextElementSibling;
						if (dropdownMenu.style.display === 'none') {
							dropdownMenu.style.display = 'block';
						} else {
							dropdownMenu.style.display = 'none';
						}
					}
				</script>
			</div>
		</div>
		<!-- container -->
	</header>
