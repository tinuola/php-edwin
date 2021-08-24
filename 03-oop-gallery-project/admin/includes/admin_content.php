<div class="container-fluid">

	<!-- Page Heading -->
	<div class="row">
			<div class="col-lg-12">
					<h1 class="page-header">
							Admin
							<small>Subheading</small>
					</h1>

					<?php
						// Test database connection
						// if($database->connection){
						// 	echo "True - Database connection works.";
						// }

						// Testing query method
						// $sql = "SELECT * FROM users WHERE id=1";
						// $result = $database->query($sql);
						// $user_found = mysqli_fetch_array($result);
						// echo $user_found['username'];
						// echo "<pre>";
						// print_r($user_found);

						// Get users from user class
						// $user = new User();
						// $result_set = $user->find_all_users();
						// OOP Refactor:
						// $result_set = User::find_all_users();
						// while($row = mysqli_fetch_array($result_set)){
						// 	echo $row['username'] . "<br>";
						// }

						// Get user by id
						// $result_set = User::find_user_by_id(2);
						// $user_id = mysqli_fetch_array($result_set);
						// echo $user_id['username'];

						// Edwin solution:
							// $found_user = User::find_user_by_id(3);
							// echo $found_user['username'];


						?>

					<ol class="breadcrumb">
							<li>
									<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
							</li>
							<li class="active">
									<i class="fa fa-file"></i> Blank Page
							</li>
					</ol>
			</div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container-fluid -->