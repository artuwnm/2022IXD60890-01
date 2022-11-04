<?php

include "../lib/php/functions.php";


$filename = "../data/users.json";

$users = file_get_json($filename);

$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[],
	"imgSRC"=>""
];

//print_p ([$_GET,$_POST]);

if (isset($_GET['action'])){
	switch($_GET['action']){
		case "update":
		$users[$_GET['id']]-> name = $_POST['user-name'];
		$users[$_GET['id']]-> type = $_POST['user-type'];
		$users[$_GET['id']]-> email = $_POST['user-email'];
		$users[$_GET['id']]-> classes = explode(", ", $_POST['user-classes']);
		$users[$_GET['id']]-> imgSRC = $_POST['user-imgSRC'];

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
		
		case 'create':
		$empty_user-> name = $_POST['user-name'];
		$empty_user-> type = $_POST['user-type'];
		$empty_user-> email = $_POST['user-email'];
		$empty_user-> classes = explode(", ", $_POST['user-classes']);
		$empty_user-> imgSRC = $_POST['user-imgSRC'];

		$id = count($users);
		//count((is_countable($users)?$users:[]))

		$users[] = $empty_user;

		file_put_contents($filename, json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;

		case 'delete':
		array_splice($users, $_GET['id'],1);
		file_put_contents($filename, json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}");
		break;
	}
}

// if(isset($_POST['user-name'])){
// 	$users[$_GET['id']]-> name = $_POST['user-name'];
// 	$users[$_GET['id']]-> type = $_POST['user-type'];
// 	$users[$_GET['id']]-> email = $_POST['user-email'];
// 	$users[$_GET['id']]-> classes = explode(", ", $_POST['user-classes']);

// 	file_put_contents($filename, json_encode($users));
// }

function showUserPage($user) {

	$id = $_GET['id'];

	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";

	$classes = implode(", ",$user->classes);
	//print_p($user);
	$delete = $id =="new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
	//heredoc
	echo <<<HTML
	<nav class="nav nav-crumbs">
		<ul>
			<li class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">< Back</a></li>
			<li class="flex-none">$delete</li>
		</ul>
	</nav>
	<section id="userPageInfo" class="display-flex flex-justify-space-between">
			<ul class="display-flex flex-align-end gap flex-align-end">
				<li>
					<img src="$user->imgSRC" alt="user image" width="300px" height="400px"/>
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
			<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
				<h2>$addoredit User</h2>
				<div class="form-control">
					<label for="" class="form-label" for="user-name">Full Name</label>
					<input type="text" placeholder="Enter the User Name" class="form-input" name="user-name" id="user-name" value="$user->name" />
				</div>
				<div class="form-control">
					<label for="" class="form-label" for="user-type">Type</label>
					<input type="text" placeholder="Enter the User Type" class="form-input" name="user-type" id="user-type" value="$user->type" />
				</div>
				<div class="form-control">
					<label for="" class="form-label" for="user-email">Email</label>
					<input type="text" placeholder="Enter the User Email" class="form-input" name="user-email" id="user-email" value="$user->email" />
				</div>
				<div class="form-control">
					<label for="" class="form-label" for="user-classes">Classes</label>
					<input type="text" placeholder="Enter the User Classes, Comma Seperate" class="form-input" name="user-classes" id="user-classes" value="$classes" />
				</div>
				<div class="form-control">
					<input type="submit" class="form-button" value="UPDATE">
				</div>
			</form>
	</section>
	

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
		 			<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
		 			<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
		 		</ul>
		 	</nav>
		 </div>
	</header>

	<div id="userPageInfo" class="container">
		<div  class="card soft">

		<?php

			if(isset($_GET['id'])){
				showUserPage($_GET['id']=="new" ? $empty_user : $users[$_GET['id']]);
			}else{

		?>

			<h2>User List</h2>
			<nav class="nav">
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