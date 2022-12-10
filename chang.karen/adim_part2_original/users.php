<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");
$currentUserId = NULL;



function showUserPage($user){

$classes = implode(", ", $user->classes);

	//heredoc
	echo <<<HTML
		<nav class="nav nav-crumbs">
			<ul>
				<li><a href="admin/users.php">Back</a></li>
			</ul>
		</nav>
		<div>
		<form method="POST">
			<h2>$user->name</h2>
			<div class="form-control">
				<label class="form-label" id="labels">Name</label>
				<input type="text" name="name" value="$user->name" class="form-input">
			</div>
			<div class="form-control">
				<label class="form-label" id="labels">Type</label>
				<input type="text" name="type" value="$user->type" class="form-input">
			</div>
			<div class="form-control">
				<label class="form-label" id="labels">Email</label>
				<input type="text" name="email" value="$user->email" class="form-input">
			</div>
			<div class="form-control">
				<label class="form-label" id="labels">Class</label>
				<input type="text" name="classes" value="$classes" class="form-input">
			</div>
			<div class="form-control">
				<button type="submit" class="form-button" id="placeOrder">Update</button>
			</div>
		</form>

		</div>
	HTML;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
	<link rel="stylesheet" href="admin/adminstyle.css" />
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li id="userlist_a"><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<div class="card soft">

			<?php 


			if(isset($_GET['id'])) {
				
				showUserPage($users[$_GET['id']]);

				if (!empty($_POST)){
					
					if(isset($_POST['name'])){
						$users[$_GET['id']]->name = $_POST['name'];
					}

					if(isset($_POST['type'])){
						$users[$_GET['id']]->type = $_POST['type'];						
					}

					if(isset($_POST['email'])){
						$users[$_GET['id']]->email = $_POST['email'];								
					}

					if(isset($_POST['classes'])){
						$users[$_GET['id']]->classes = explode(", ", $_POST['classes']);		
					}

					file_update_json("../data/users.json", $users);
						echo "<meta http-equiv='refresh' content='0'>";
				}


			}else {


			?>
			<h2>User List</h2>

				<nav class="nav user_nav">
					<ul>
						<?php 

							for($i=0;$i<count($users);$i++){
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