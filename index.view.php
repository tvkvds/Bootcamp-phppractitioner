


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    Entry check
</h1>
<?php if ($_SERVER["REQUEST_METHOD"] !== "POST") : ?>
  <form action="index.php" method="POST">
  <label for="age">Please enter your age:</label>
  <input type="text"  name="age" required>
  </form>
<?php endif; ?>
</p>

   
<p>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
  echo legalAge($age) ? '&#9989 You are allowed to enter.': 'You are not old enough to enter.' ;
} ?>
</p>



    


    
</body>
</html>