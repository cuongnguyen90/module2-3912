
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Title</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == "admin" && $pass == "admin"){
            echo "<h2>Welcome <span style='color:red'>" .$user. "</span> to website</h2>";
        }else{
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }

    }
    ?>

    <div class="contairner">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="" method="POST" role="form">
                    <legend>Login</legend>

                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="user" id="" placeholder="User input here...">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="password" class="form-control" name="pass" id="" placeholder="Password input here...">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</body>
</html>



