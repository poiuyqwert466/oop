<?php
require_once("holder.php");
require_once("sorting.php");
$class1 = new RegisterPatient;
$class2 = new Sorting;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Consultation Website</title>
</head>
<body>
    <header class="p-3 mb-2 bg-dark text-white">
        <h1>Online Consultaion</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6">
                <form action="" method="post">
                <p>Full Name</p> <input type="text" name="name">
                <p>Age</p> <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="age">
                <p>Gender</p>
                <select id="cars" name="gender">
                <option></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                <p>Address</p> <input type="text" name="address">
                <br>
                <p>Consultation</p>
                <textarea name="text" rows="4" cols="50"></textarea>
                <br>
                <input type="submit" value="Send"><input type="reset" value="Clear">
                </form>
                </div>
                <div class="col-6">
                    <?php
                    if (isset($_POST['name'])){
                        $class1->start();
                         $class2->sort_and_show();
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
