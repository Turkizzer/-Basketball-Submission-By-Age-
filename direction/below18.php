<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
  background-color: gray;
  text-align: center;
  margin-top: -15px;
  padding: 10px;
  color: white;
  border-radius: 20px;
}

main {
  display: flex;
  justify-content: center;
}
.container {
  background-color: rgba(250, 235, 215, 0.5);
  padding: 50px;
  border-radius: 20px;
  margin-top: 10px;
  text-align: center;
}
form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
body {
  background-image: url("https://wallpapercave.com/wp/wp2557389.jpg");
  background-size: cover;
  height: 100vh;
  margin: 0;
}
button {
  background-color: beige;
  border-radius: 20px;
  width: 100px;
  margin: 0 auto;
}
    </style>
</head>
<body>
<header>
    <h1>Basketball Registration for 15-18</h1>
  </header>
  <main>
    <div class="container">
      <h1>Log in</h1>
      <form action="../handler/18submission.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" name="fname" />
        <label for="midname">Middle Name</label>
        <input type="text" name="midname" />
        <label for="lname">Last Name</label>
        <input type="text" name="lname" />
        <button type="submit">Submit</button>
      </form>
    </div>
  </main>
</body>
</html>