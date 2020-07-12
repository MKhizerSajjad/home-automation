<?php
echo'
<header class="header-desktop">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="header-wrap">
				<div class="header-button">
					<div class="account-wrap">
						<div class="account-item clearfix js-item-menu">
							<div class="image">
								<img src="images/admin.png" alt="John Doe" />
							</div>
							<div class="content">
								<a class="js-acc-btn" href="#">'.$_SESSION['user_name'].'</a>
							</div>
							<div class="account-dropdown js-dropdown">
								<div class="info clearfix">
									<div class="image">
										<a href="#">
											<img src="images/admin.png" alt="'.$_SESSION['user_name'].'" />
										</a>
									</div>
									<div class="content">
										<h5 class="name">
											<a href="#">'.$_SESSION['user_name'].'</a>
										</h5>
									</div>
								</div>
									<div class="account-dropdown__item">
										<!-- <a href="#" class="bg bg-info"><i class="zmdi zmdi-account"></i>Account</a> -->
										<a href="logout.php" class="bg bg-danger"><i class="zmdi zmdi-power"></i>Logout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
';
?>