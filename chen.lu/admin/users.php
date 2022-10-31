<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");



// file_put_contents json_encode explode $_POST



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
	<h2>$user->name</h2>
	<form action="/action_page.php">
	<div>
		<label for="name">Name</label><br>
		<input type="text" id="name" name="name" value="$user->name"><br>
	</div>
	<div>
		 <label for="type">Type</label><br>
		<input type="text" id="type" name="type" value="$user->type"><br>
	</div>
	<div>
		<label for="emial">Email</label><br>
		<input type="text" id="emial" name="email" value="$user->email"><br>
	</div>
	<div>
		<label for="classes">Classes</label><br>
		<input type="text" id="classes" name="classes" value="$classes"><br><br>
	</div>
	<div class="form-control">
		<button type="button" class="form-button">Submit</button>
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
	<title>User Admin</title>

	<?php include "../parts/meta.php"; ?>
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
			} else {


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