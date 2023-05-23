<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
	html, body {
    height: 100%;
    margin: 0;
}
        body {
            background: linear-gradient(to bottom, #0000ff, #000000);
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
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
    <title>Nasa's Mars photos</title>
</head>
<body><p align="center">
	<img src="img/img1.png" align="center" width="200" />
	</p>
    <div class="header">
        <h1 style="font-family:'American Typewriter';" align="center">Explore Nasa's API MARS ROVER PHOTOS 2023</h1>
    </div>

    <h1>Welcome to Mars Rover Photos main page!</h1>

    <h1>Nasa's API</h1>
    <p>Each rover has its own set of photos stored in the database, which can be queried separately. There are several possible queries that can be made against the API. Photos are organized by the sol (Martian rotation or day) on which they were taken, counting up from the rover's landing date. A photo taken on Curiosity's 1000th Martian sol exploring Mars, for example, will have a sol attribute of 1000. If instead you prefer to search by the Earth date on which a photo was taken, you can do that, too.
    Along with querying by date, results can also be filtered by the camera with which it was taken and responses will be limited to 25 photos per call. Queries that should return more than 25 photos will be split onto several pages, which can be accessed by adding a 'page' param to the query.</p>
    <h1>Discover more about Mars, the rovers, and NASA's Mars missions:</h1>

    <?php
     session_start();  

         include 'database.php';
           
    ?>
	
<button onclick="toggleLoginForm('login')">Login</button>

<button onclick="toggleLoginForm('signin')">Sign In</button>

<form id="loginForm" class="login-form" style="display: none;" action="login.php" method="POST">
    <div class="form-buttons">
        <button onclick="toggleLoginForm()">Back</button>
        <button type="submit">Submit</button>
    </div>
    <input type="text" placeholder="Username" name="loginUsername" required>
    <input type="password" placeholder="Password" name="loginPassword" required>
</form>

<form id="signInForm" class="login-form" style="display: none;" action="register.php" method="POST">
    <div class="form-buttons">
        <button onclick="toggleLoginForm()">Back</button>
        <button type="submit">Submit</button>
    </div>
    <input type="text" placeholder="Username" name="registerUsername" required>
    <input type="password" placeholder="Password" name="registerPassword" required>
</form>


    <script>

        function toggleLoginForm(formType) {
            var loginForm = document.getElementById('loginForm');
            var signInForm = document.getElementById('signInForm');
            
            if (formType === 'login') {
                loginForm.style.display = 'block';
                signInForm.style.display = 'none';
            } else if (formType === 'signin') {
                loginForm.style.display = 'none';
                signInForm.style.display = 'block';
            } else {
                loginForm.style.display = 'none';
                signInForm.style.display = 'none';
            }
        }
    </script>
</body>
</html>
