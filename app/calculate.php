<?php require_once "./Calculator.php";

// If the submit button has been pressed
if (isset($_POST['submit'])) {

    // Check number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $calculator = new \App\Calculator;

        // Calculate total
        if ($_POST['operation'] == 'addition') {
            $total = $calculator->addition($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'subtraction') {
            $total = $calculator->subtraction($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'multiply') {
            $total = $calculator->multiplication($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'divided_by') {
            $total = $calculator->division($_POST['number1'], $_POST['number2']);
        }

        echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";

    } else {

        // Print error message to the browser
        echo 'Numeric values are required';
    }
}
