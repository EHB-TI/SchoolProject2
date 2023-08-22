<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <title>Tutoring Aanvragen</title>
</head>
<style>
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 400px;
    text-align: center;
    padding: 20px;
}

h1 {
    color: #d32f2f;
    margin-top: 0;
}

.options {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
}

.option {
    margin-bottom: 10px;
}

.option a {
    display: block;
    background-color: #d32f2f;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s;
}

.option a:hover {
    background-color: #9a0000;
}
.logout-button {
    position: absolute;
    top: 10px;
    left: 10px;
    text-decoration: none;
    color: #d32f2f;
}
</style>
<body>
  <div class="container">
    <a href="{{ route('welcome') }}" class="logout-button">Log out</a>
    <h1>Tutoring Aanvragen</h1>
    <div class="options">
      <div class="option">
        <a href="vakken.html">Vakken Toevoegen</a>
      </div>
      <div class="option">
        <a href="aanvragen.html">Aanvragen Tutoring</a>
      </div>
    </div>
  </div>
</body>
</html>
