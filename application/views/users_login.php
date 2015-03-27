<html lang="en">
    <head>
        <title>User Login</title>   
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?>

        <?php echo validation_errors(); ?>
        <?php echo form_open('user/user_login_process') ?>

        <div class="container"><div class="row"><div class="col-md-6 col-md-offset-3"><h1> Staff Login</h1>
        <form method="post" class="form">
            <div class="form-group">
                <label>Username :</label>
                <input type="text" name="username" value="" class="form-control"/>
            </p>

            <p>
                <label>Password :</label>
                <input type="password" name="password" value="" class="form-control"/>
            </p>

            <p>
                <input type="submit" value="Login" name="submit"/>
            </p>

            <p>
                <a href="user/create">To SignUp Click Here</a>
            </p>
        </form></div></div></div>
        <?php echo form_close(); ?>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>    </body>
</html>
