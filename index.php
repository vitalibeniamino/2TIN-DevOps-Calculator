<!DOCTYPE html>
<html>
    <head>
     <title>2TIN Devops - Calculator</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <h1>2TIN DevOps - Calculator</h1><hr/>
        <?php
            // Use 'composer install' to get dependencies
            // Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

            // composer autoload. Might require 'composer dump-autoload' to work.
            require('vendor/autoload.php');
        ?>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="number1">Number 1</label>
                <input type="text" class="form-control" id="number1" name="number1" required>
            </div>
            <div class="form-group">
                <label for="number2">Number 2</label>
                <input type="text" class="form-control" id="number2" name="number2" required>
            </div>
            <button type="submit" class="btn btn-primary" name="add">Add</button>
        </form>

        <?php
            if(isset($_POST['add'])){
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $calc = new Calculator();
                $result = $calc->add($n1, $n2);

                echo "<h2>The result of adding $n1 and $n2 is $result";
            }
        ?>
        <script src="assets/js/bootstrap.min.js" ></sccript>
    </body>
</html>