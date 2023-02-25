<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>
  <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }


        body {
            background-color: #551a8b;
            animation-name: purpleBackground;
            animation-duration: 5s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        @keyframes purpleBackground {
            0% {
                background-color: #340f57;
            }

            50% {
                background-color: #6525a0;
            }

            100% {
                background-color: #340f57;
            }
        }


        .container {
            width: 100%;
            height: 100vh;
            background: url(bg1.jpg) no-repeat;
            justify-content: center;
            align-items: center;
            background-position: center;
            background-size: cover;
            display: flex;
        }

        .wrapper {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 50px auto;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .wrapper h2 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .wrapper p {
            color: #666666;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .wrapper input[type="text"],
        .wrapper input[type="password"],
        .wrapper input[type="email"] {
            background-color: #f8f8f8;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-bottom: 10px;
            width: 89%;
            transition: box-shadow 0.2s ease-in-out;
        }

        .wrapper input[type="text"]:focus,
        .wrapper input[type="password"]:focus,
        .wrapper input[type="email"]:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }


        .wrapper a {
            color: #080b31;
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }

        .wrapper a:hover {
            color: #150424;
        }


        h1 {
            width: auto;
            font-size: 2rem;
            color: #07001f;
            margin-bottom: 1.2rem;
            opacity: 200;
        }

        form input {
            width: 92%;
            outline: none;
            border: 1px solid #fff;
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 50px;
            background: #e4e4e4;
        }

        #signup-button {
            font-size: 1rem;
            color: #fff;
            margin-top: 1rem;
            padding: 14px 0;
            border-radius: 10px;
            border: none;
            width: 92%;
            background-color: #6b3fa0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #signup-button:hover {
            background-color: #47276e;
        }


        input:focus {
            border: 1px solid rgb(192, 192, 192);
        }


        .member {
            font-size: 1rem;
            margin-top: 1.4rem;
            color: black;

        }

        .member a {
            color: rgb(11, 8, 173);
        }
  </style>
</head>

<body>
  <div class="container">
    <div class="wrapper">
    <h1>Sign Up</h1>
    <form action="connect_insert.php" id="signup-form" method="post">
 
      <input type="text" placeholder="Username" id="uname" name="user" required>
      <br>
      <input type="email" placeholder="Email" id="email" name="email" required>
      <br>
      <input type="text" placeholder="Phone" id="phone" name="phone" required>
      <br>
      <input type="password" placeholder="Password" id="password" name="pass" required>
      <br>
      <input type="password" placeholder="Confirm Password" id="passwordConfirm" required>
      <br>
      <input type="submit" id="signup-button" value="Sign Up" name="signup">
      <script src="validate.js"></script>
    </form>
    <div class="member">
      Already have an account? <a href="login.php">Sign In</a>
    </div>
    </div>
  </div>
</body>

</html>