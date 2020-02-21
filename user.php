
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Login</h3>
                <form action="/server.php" method="POST">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username *" name="username" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" name="password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" name="login" />
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Signup</h3>
                <form action="server.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name *" name="name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email *" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username *" name="username" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" name="password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" name="signup" />
                    </div>
                </form>
</div>

                    
</body>
</html>