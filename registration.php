<?php require "bootstrap.php"; ?>

<div class="col-md-3"></div>
<div class="col-md-6 well">
    
    <hr style="border-top:1px dotted #ccc;" />
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="register_query.php" method="POST">
            
            <hr style="border-top:1px groovy #000;">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" class="form-control" name="firstname" />
            </div>
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" class="form-control" name="lastname" />
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" />
            </div>
            <br />
            <div class="form-group">
                <button class="btn btn-primary form-control" name="register">Register</button>
            </div>
            <a href="index.php">Login</a>
        </form>
    </div>
</div>
</body>
</html>