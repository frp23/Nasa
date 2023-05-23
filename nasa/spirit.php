<?php
session_start();

$apiKey = 'D598RScwSMIMCgYnVB8EXj4IjEaFsnBKRayE1s89';

$sol = isset($_GET['sol']) ? $_GET['sol'] : '';
$camera = isset($_GET['camera']) ? $_GET['camera'] : '';
$rover = "spirit";

if (empty($sol) || empty($camera) || empty($rover)) {
    echo 'Please provide values for sol, camera, and rover.';
} else {
    $url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/' . $rover . '/photos?sol=' . $sol . '&camera=' . $camera . '&api_key=' . $apiKey;

    $response = file_get_contents($url);

    $data = json_decode($response, true);

    if (!empty($data['photos'])) {
        $_SESSION['photos'] = $data['photos']; 
        header("Location: sol.php"); 
        exit;
    } else {
        echo 'No photos found for the selected sol, camera, and rover.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
	header{
			position: fixed;
			top: 50;
			display: flex;
		}
        body {
            background: linear-gradient(to bottom, #0000ff, #000000);
            color: #ffffff; /* White text */
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }
		a {
			color: #ffffff; 
			border: 1px solid #ffffff; 
			padding: 5px 10px; 
			text-decoration: none; 
		}
		button[type="submit"] {
			background-color: transparent; 
			color: #ffffff; 
			border: 1px solid #ffffff; 
			padding: 10px 20px; 
			cursor: pointer; 
		}
        .login-form {
            display: none;
            margin-top: 20px;
            position: relative;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .login-form .form-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .login-form .form-buttons button {
            margin-left: 10px;
        }
    </style>
	</head>
	<header>
	<h2>Spirit</h2>
</header>
	<body>
<form method="GET" action="">
	<p>Please provide values for sol, camera, and rover.</p>
    <label for="sol">Sol:</label>
    <input type="text" name="sol" id="sol" required value="<?php echo $sol; ?>">

    <label for="camera">Camera:</label>
    <input type="text" name="camera" id="camera" required value="<?php echo $camera; ?>">


    <button type="submit">Submit</button>
	<img src="img/img2.jpg" />
</form>

<a href="index.php">Back</a>
	<p> sol should be a number beetween 1 and 1000</p>
	<p> Camera should be written in abbrevetion and lowercase</p>
</body>
</html>