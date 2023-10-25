<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Donke</title>
  <style>
    /*
    body {
      font-family: sans-serif;
    }

    form {
      width: 500px;
      margin: 0 auto;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: blue;
      color: white;
      cursor: pointer;
    }*/
    body {
  font-family: sans-serif;
  background-color: #fff;
}

form {
  width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #eee;
  border-radius: 5px;
  align-self: center;
}

input, textarea {
    width: 100%;
  box-sizing: border-box;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #000;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  border-radius: 5px;
}

input:focus, textarea:focus {
  border-color: #000;
}

textarea[name="message"] {
  height: 10rem;
}

input[type="submit"]:hover {
  background-color: #333;
}

h1 {
  text-align: center;
  font-size: 24px;
}

  </style>
</head>
<body>
  <h1>Contact Don Kelly</h1>

  <form action="email_checker.php" method="post" enctype="text/plain">
    <input type="text" name="name" placeholder="Your Name" style="box-sizing: border-box;">
    <input type="text" name="email" placeholder="Your Email Address" style="box-sizing: border-box;">
    <textarea name="message" placeholder="Type your message" style="box-sizing: border-box;"></textarea>
    <input type="submit" value="Forward">
  </form>
  
</body>
</html>
