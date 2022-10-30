<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

	$classes = implode(", ",$user->classes);
	//print_p($user);

	//heredoc
	echo <<<HTML
	<nav class="nav nav-crumbs">
		<ul>
			<li><a href="admin/users.php">< Back</a></li>
		</ul>
	</nav>
	<ul id="userPageInfo" class="display-flex flex-justify-space-between">
		<li>
			<ul class="display-flex flex-align-end">
				<li>
					<img src="$user->imgSRC" alt="user image" />
				</li>
				<li>
					<h2>$user->name</h2>
					<div>
						<strong>Type:</strong>
						<span>$user->type</span>
					</div>
						<div>
						<strong>Email:</strong>
						<span>$user->email</span>
					</div>
						<div>
						<strong>Classes:</strong>
						<span>$classes</span>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<form method="get" action="">
				<div class="form-control">
					<label for="" class="form-label">Full Name</label>
					<input type="text" placeholder="Text" class="form-input" value="$user->name" />
				</div>
				<div class="form-control">
					<label for="" class="form-label">Type</label>
					<input type="text" placeholder="Number" class="form-input" value="$user->type" />
				</div>
				<div class="form-control">
					<label for="" class="form-label">Email</label>
					<input type="text" placeholder="Password" class="form-input" value="$user->email" />
				</div>
				<div class="form-control">
					<label for="" class="form-label">Classes</label>
					<input type="text" placeholder="Password" class="form-input" value="$classes" />
				</div>
				<div class="form-control">
					<input type="submit" class="form-button" value="UPDATE">
				</div>
			</form>
		</li>
	</ul>
	

	HTML;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../parts/meta.php" ?>

	<!-- Page Title -->
	<title>User Admin Page</title>
</head>
<body>
	<!-- admin page navigation bar -->
		<header class="navbar">
		 <div class="container display-flex">
		 	<div class="flax-none">User Admin</div>
		 	<div class="flex-stretch"></div>
		 	<nav class="nav nav-flex flax-none">
		 		<ul>
		 			<li><a href="admin/users.php">User List</a></li>
		 		</ul>
		 	</nav>
		 </div>
	</header>

	<div id="userPageInfo" class="container">
		<div  class="card soft">

		<?php

			if(isset($_GET['id'])){
				showUserPage($users[$_GET['id']]);
			}else{

		?>

			<h2>User List</h2>
			<nav class="nav">
				<ul>
					<?php

					for($i=0; $i<count($users); $i++){

						echo "<li>
							<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
						</li>";
					}

					?>
				</ul>
			</nav>
		<?php } ?>
		</div>
	</div>
</body>
</html>