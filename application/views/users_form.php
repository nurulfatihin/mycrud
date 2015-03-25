<?php echo validation_errors();?>
<?php echo form_open('user/create') ?>
<h1> Users Registration</h1>
<form method="post">
    <div>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" value=""/>
    </div>
    
    <div>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" value=""/>
    </div>
    
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" value=""/>
    </div>
    
    <div>
        <label for="mobile_no">Mobile Phone No.</label>
        <input type="text" name="mobile_no" value=""/>
    </div>
    
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" value=""/>
    </div>
    
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" value=""/>
    </div>
    
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" value=""/>
    </div>
    
    <div>
        <label for="datestart">Date Start</label>
        <input type="date" name="datestart" value=""/>
    </div>
    
    <div>
        <input type="submit" name = "submit" value="Save"/>
    </div>
</form>