<html lang="en">
    <head>
        <title>User Login</title>   
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>
    <body>
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?>

        <?php echo validation_errors(); ?>
        <?php echo form_open('user/user_login_process') ?>

        <h1> Staff Login</h1>
        <form method="post">
            <p>
                <label>Username :</label>
                <input type="text" name="username" value=""/>
            </p>

            <p>
                <label>Password :</label>
                <input type="password" name="password" value=""/>
            </p>

            <p>
                <input type="submit" value="Login" name="submit"/>
            </p>

            <p>
                <a href="user/create">To SignUp Click Here</a>
            </p>
        </form>
        <?php echo form_close(); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8">.col-md-8</div>
                <div class="col-md-4">.col-md-4</div>
            </div>
            <div class="row">
                <div class="col-md-4">.col-md-4</div>
                <div class="col-md-4">.col-md-4</div>
                <div class="col-md-4">.col-md-4</div>
            </div>
            <div class="row">
                <div class="col-md-6">.col-md-6</div>
                <div class="col-md-6">.col-md-6</div>
            </div>
        </div>

    </body>
</html>
