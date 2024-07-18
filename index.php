
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="styles.css?v=1.0" />
</head>

<body>
 
<main>
  <section class="before">
    <div class="container2">
      <h3>Please enter your age</h3>
      <form action="handler/ageSubmission.php" method="POST">
        <input type="number" name="age">
        <button type="submit">Submit</button>
      </form>
      <h3>Check submission Status</h3>
    <form action="handler/check.php" method="POST">
      <input type="hidden">
      <button type="submit">Check</button>
    </form>
    </div>
 

 
</main>
 
</body>

</html>

