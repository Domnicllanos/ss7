<?php

	session_start();
	if(!isset($_SESSION['user'])) header('location: login.php');
	$_SESSION['table'] = 'users';
	$user = $_SESSION['user'];
	$users = include('database/show-staff.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard- RAD</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/c810137f06.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="dashboardMainContainer">
		<?php include('partials/app-sidebar.php') ?>
		<div class="dashboard_content_container" id="dashboard_content_container">
			<?php include('partials/app-topnav.php') ?>
			<div class="dashboard_content">
				<div class="dashboard_content_main">
				<div class="row">
					<div class="column column-5">
						<h1 class="section_header"><i class="fa fa-plus"></i> Create Staff</h1>				
					<div id="userAddFormContainer">
						<form action="database/staff.php" method="POST"  class="appForm">
							<div class="appFormInputContainer">
								<label for="first_name"> First Name</label>
								<input type="text" class="appFormInput" id="first_name" name="first_name" />
							</div>
							<div class="appFormInputContainer">
								<label for="last_name"> Last Name</label>
								<input type="text" class="appFormInput" id="last_name" name="last_name" />
							</div>
							<div class="appFormInputContainer">
								<label for="email"> Email</label>
								<input type="text" class="appFormInput" id="email" name="email" />
							</div>
							<div class="appFormInputContainer">
								<label for="password"> Password</label>
								<input type="password" class="appFormInput" id="password" name="password" />
							</div>
							<button type="submit" class="appBtn"><i class="fa fa-plus"></i> Add Staff</button>
						</form>
						<?php
						 	if(isset($_SESSION['response'])){
						 		$response_message = $_SESSION['response']['message'];
						 		$is_success = $_SESSION['response']['success'];
						 	?>
						 		<div class="responseMessage">
						 			<p class="responseMessage <?= $is_success ? 'responseMessage__success' : 'responseMessage__error'?>">
						 				<?= $response_message ?>
						 			</p>
						 		</div>
						 		<?php unset($_SESSION['response']); } ?>
					</div>
					</div>
					<div class="column column-7">
						<h1 class="section_header"><i class="fa fa-list"></i> List of  Staff</h1>
						<div class="section_content">
							<div class="staff">
								<table>
									<thead>
										<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Created At</th>
										<th>Updated At</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($users as $index => $user){?>
											<tr>
												<td><?= $index + 1?></td>
												<td><?= $user ['first_name']?></td>
												<td><?= $user ['last_name']?></td>
												<td><?= $user ['email']?></td>
												<td><?= date('M  d, Y   @h:i:s A',strtotime($user ['created_at']))?></td>
												<td><?= date('M  d, Y  @h:i:s A',strtotime($user ['updated_at']))?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
								<p class="userCount"><?= count($users) ?> Staffs </p>
							</div>
						</div>	
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

<script src="js/script.js"></script>
</body>
</html>