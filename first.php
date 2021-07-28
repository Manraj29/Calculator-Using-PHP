<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Using PHP&HTML</title>
    <link rel='stylesheet' type='text/css' href='css/style.php' /></head>
<body style='text-align: center; font-size: 22px; background-color: aqua; padding: 10px'>
    <h2>Calculator</h2>

    <h3>Please Enter 2 numbers below <br>and select the Operation you want to perform</h3>
    <div style='padding: 40px'>
    <form action="first.php" method="POST">
            Number 1: <input type="number" name="num1" style='font-size: 25px; width: 100px'><br><br>

            Number 2: <input type="number" name="num2" style='font-size: 25px; width: 100px'> <br><br>
            <!-- <input type="submit" placeholder="Answer"> -->
            Operation: <select style='font-size: 25px; width: 100px; align-self: center;' name="opr" id="dropdown">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                            <option>%</option>
                        </select><br><br>
            <button type="submit" style='font-size: 25px; width: 100px; background-color: gray; color: white'>Answer</button><br><br>
    </form>
    </div>
    <?php 
    // echo $_POST["num1"] + $_POST["num2"];
    if ($_POST["opr"] == "+") {
        echo "Your Answer for addition is: " . $_POST["num1"] + $_POST["num2"];
    }
    else if ($_POST["opr"] == "-") {
        echo "Your Answer for subtraction is: " . $_POST["num1"] - $_POST["num2"];
    }
    else if ($_POST["opr"] == "*" || $_POST["opr"] == "x") {
        echo "Your Answer for multiplication is: " . $_POST["num1"] * $_POST["num2"];
    }
    else if ($_POST["opr"] == "/") {
        echo "Your Answer for division is: " . $_POST["num1"] / $_POST["num2"];
    }
    else if ($_POST["opr"] == "%") {
        echo "Your Answer for modulus is: " . $_POST["num1"] % $_POST["num2"];
    }
    else{
        echo "Error, please try again.";
    }
    ?>
    
</body>
</html>