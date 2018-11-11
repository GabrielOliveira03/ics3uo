<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Gabriel Oliveira: ICS3UO</title>

		<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
		<meta name="author" content="Gabriel Oliveira">
		<link rel="shortcut icon" href="images/logo.ico">
  <style>
    body {
      font-family: "Futura";
      background-color: #eee;
    }

    .result {
      margin-top: 1.6em;
      border: 1px solid #666;
      line-height: 2em;
      background-color: #ddd;
    }

    .calculator-section {
      border: 1px solid #666;
      margin-bottom: 2em;
      line-height: 1.6em;
      padding: 0.4em 1em 1em 1em;
      background-color: #ccc;
      width: 50%;
    }

    .calculator-section h3 {
      text-align: center;
      border-bottom: 1px solid #666;
    }

    .operation-options {
      margin: 1em 0;
    }

    .operation input[type="radio"] {
      margin-right: 0.6em;
    }
  </style>
	</head>
  <body>
    <h1>PHP Basic Calculator</h1>
    <h2>Choose any two numbers and operation, and click submit to see the answer</h2>

    <div class="calculator-section">
      <h3>Two Number Operations</h3>
      <form id="two-number-operations" name="form" action="activity-2-4.php" method="post">
        <div class="operands">
          <select id="num1" name="num1" required>
            <option value="">Choose your first operand</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>

        <div class="operation-options">
            <div class="operation">
                <label><input type="radio" name="op" value="plus" required />Plus</label>
            </div>
            <div class="operation">
                <label><input type="radio" name="op" value="minus"/>Minus</label>
            </div>
            <div class="operation">
                <label><input type="radio" name="op" value="times"/>Multiplied by</label>
            </div>
            <div class="operation">
                <label><input type="radio" name="op" value="divide"/>Divided by</label>
            </div>
            <div class="operation">
                <label><input type="radio" name="op" value="remainder"/>Divided by (Remainder)</label>
            </div>
            <div class="operation">
                <label><input type="radio" name="op" value="power"/>To the Power Of:</label>
            </div>
          </div>

          <div class="operands">
            <select name="num2" required>
              <option value="">Choose your second operand</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <input class="submit" type="submit" name="submit" value="Submit" />
      </form>

      <div class="result">
        &nbsp;
        <?php
          if ($_POST['submit']) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if ($_POST['op'] == 'plus') {
                $result = $num1 + $num2;
                echo "$num1 plus $num2 equals $result";
            } else if ($_POST['op'] == 'minus') {
              $result = $num1 - $num2;
                echo "$num1 minus $num2 equals $result";
            } else if ($_POST['op'] == 'times') {
                $result = $num1 * $num2;
                echo "$num1 multiplied by $num2 equals $result";
            } else if ($_POST['op'] == 'divide') {
                if ($num2 == 0) {
                    echo "Sorry, you can't divide by zero.";
                } else {
                    $result = $num1 / $num2;
                    echo "$num1 divided by $num2 equals $result";
                }
            } else if ($_POST['op'] == 'remainder') {
								if ($num2 == 0) {
										echo "Sorry, you can't divide by zero.";
								} else {
									$result = $num1 % $num2;
									echo "When $num1 is divided by $num2, the remainder is $result";
								}
            } else if ($_POST['op'] == 'power') {
                echo "$num1 to the power of $num2 equals $result";
            }
          }
        ?>
      </div>
    </div>

    <div class="calculator-section">
      <h3>Single Number Operations</h3>
      <form id="single-number-operations" name="form1" action="activity-2-4.php" method="post">
        <div class="operands">
          <select name="num3" required>
            <option value="">Choose a number</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>

        <div class="operation-options">
          <div class="operation">
            <label><input type="radio" name="op1" value="sqrt" required />Square Root Of:</label>
          </div>
          <div class="operation">
            <label><input type="radio" name="op1" value="sin"/>Sine Of:</label>
          </div>
          <div class="operation">
            <label><input type="radio" name="op1" value="cos"/>Cosine Of:</label>
          </div>
          <div class="operation">
            <label><input type="radio" name="op1" value="tan"/>Tangent Of:</label>
          </div>
          <div class="operation">
            <label><input type="radio" name="op1" value="log"/>Natural Logarithm Of:</label>
          </div>
        </div>
        <input class="submit" type="submit" name="submit1" value="Submit" />
      </form>

      <div class="result">
        &nbsp;
        <?php
          if ($_POST['submit1']) {
            $num3 = $_POST['num3'];

            if ($_POST['op1'] == 'sqrt') {
              $result = (sqrt($num3));
              echo "The square root of $num3 equals $result";
            } else if ($_POST['op1'] == 'sin') {
              $result = (sin($num3));
              echo "The sine of $num3 equals $result";
            } else if ($_POST['op1'] == 'cos') {
              $result = (cos($num3));
              echo "The cosine of $num3 equals $result";
            } else if ($_POST['op1'] == 'tan') {
              $result = (tan($num3));
              echo "The tangent of $num3 equals $result";
            } else if ($_POST['op1'] == 'log') {
              $result = (log($num3));
              echo "The natural logarithm of $num3 is $result";
            }
          }
         ?>
      </div>
    </div>
  </body>
</html>
