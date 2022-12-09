<?php
include('cn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dump picker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper mt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <?php 
                    // Set error session
                    if (isset($_SESSION['error'])) {
                        ?>
                    <div class="card bg-danger">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?= $_SESSION['error']; ?>
                            </h3>
                        </div>
                    </div>
                    <?php 
                    }
                    // Set success session
                    if (isset($_SESSION['success'])) {
                        ?>
                    <div class="card bg-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?= $_SESSION['success']; ?>
                            </h3>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
                <div class="col-6">
                    <form action="post.php" method="post">
                        <div class="form-group">
                            <label for="dmp">Enter text</label>
                            <textarea rows="3" class="form-control" id="dmp" name="dmp"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>