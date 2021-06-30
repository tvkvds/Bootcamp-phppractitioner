<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>lessons</title>
</head>
<body>
<h1> Gibbon lessons
</h1>

<div>
<?php if ($_SERVER["REQUEST_METHOD"] !== "POST") : ?>
<h3> Add new lesson </h3>
<form action="../lessons/index.php" method="POST">
  <label for="name">name of lesson:</label>
  <input type="text"  name="name" required><br>
  <label for="focus">main focus of lesson:</label>
  <input type="text"  name="focus" required><br>
  <label for="source">source of lesson:</label>
  <input type="text"  name="source" required><br>
  <label for="score">score of lesson</label>
  <input type="range" min="1" max="5" name="score" required><br>
  <button type="submit" value="submit lesson">save lesson</button>
</form>
<?php endif; ?>

</div>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
<div>
<?php  $makelesson = new Lesson($_POST['name'], $_POST['focus'], $_POST['source']);
       $makelesson->score = $_POST['score'];
       $lessonsWeekOne[] = $makelesson;
?>
<h3>Added new lesson!</h3>
</div>
<?php endif; ?>

<div id="week"> 
    <h2>Week One </h2>
    <?php foreach ($lessonsWeekOne as $lesson) : ?>
        <div  id="lesson">
            Name: <?=$lesson->name?> <br>
            Main focus: <?=$lesson->focus?><br>
            
            <?php if ($lesson->score !== NULL): ?>
                Score: <?=$lesson->score?> <br>
            <?php endif; ?>
            <a href="<?=$lesson->source?>">Go to lesson </a>
            <!-- - <a href=""> Rate lesson</a> -->
        </div>
    <?php endforeach;?>
</div>

</body>
</html>