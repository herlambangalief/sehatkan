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
				<nav class="col-md-9 ">
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
			</div>
		</div>
		<!-- container -->
	</header>