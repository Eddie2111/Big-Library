<?php include("./component/header.php")?>
<?php include("./component/navbar.php")?>

<div class="container">
    <div class="col">
        <div class="row">
            <div class="card">
                <form action="../controller/loginHandle.php" method="post">
                    <label class="label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    <label class="label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

</div>