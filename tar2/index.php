<?php
include 'aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">LOGIN</h5>
                <div class="card-body">
                    <form action="proses-login.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" id="">
                        </div>
                        <button type="submit" name="btnlogin" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 'aset/footer.php';
?>