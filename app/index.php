<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 50px">

			<?php require_once "./calculate.php";?>

		    <!-- Calculator form -->
		    <form method="post">
		        <input name="number1" type="text" value="<?php echo $_POST['number1'] ?? ''; ?>" class="form-control inputField" />
		        <select name="operation">
		        	<option value="addition" <?php if($_POST['operation'] == 'addition') echo 'selected="true"'; ?>>Addition</option>
		            <option value="subtraction" <?php if($_POST['operation'] == 'subtraction') echo 'selected="true"'; ?>>Subtraction</option>
		            <option value="multiply" <?php if($_POST['operation'] == 'multiply') echo 'selected="true"'; ?>>Multiply</option>
		            <option value="divided_by" <?php if($_POST['operation'] == 'divided_by') echo 'selected="true"'; ?>>Division</option>
		        </select>
		        <input name="number2" type="text" value="<?php echo $_POST['number2'] ?? ''; ?>" class="form-control inputField" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
		</div>
	</body>
</html>
