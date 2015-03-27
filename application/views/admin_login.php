<html>
    <head>
        <title>Admin Login</title>
    </head>
    <body>
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?>

        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/admin_login_process') ?>

        <h1> Admin Login</h1>
        <form method="post">
            <div>
                <label>Username :</label>
                <input type="text" name="admin_username" value=""/>
            </div>

            <div>
                <label>Password :</label>
                <input type="password" name="admin_password" value=""/>
            </div>

            <div>
                <input type="submit" value=" Login " name="submit"/>
            </div>
        </form>
        <?php echo form_close(); ?>
    </body>
</html>
