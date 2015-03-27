<html lang="en">
    <head>
        <title>User Login</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </body>
</html>
