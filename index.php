<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Sign In</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">
  </head>
  <body class="text-center">
    <main class="form-signin">
        <form  action="#" method="post">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" value="Login">Sign in</button>
        </form>
        <p>New User? <a href="form.php">Click Here</a> to create an account!</p>
    </main>
  </body>
</html>