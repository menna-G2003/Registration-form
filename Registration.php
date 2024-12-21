<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Registration Form </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        textarea {
            resize: vertical;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        .text-danger {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
  <!-- Receives errors that I have reviewed from the back-end -->
  <?php
  if (isset($_GET['errors']))
    $errors = json_decode($_GET['errors'], true); // conversion data from array to string
  ?>
  <form action="done.php" method="post">
     <h2> Registration Form </h2>
  <br>
    <label for="first_name "> first name </label>
    <input type="text" id="first_name" name="first_name">
    <br>
    <br>
    <label for="last_name "> last name </label>
    <input type="text" id="last_name" name="last_name">
    <br>
    <br>
    <label for="address"> address </label>
    <textarea rows="5" cols="30" name="address" placeholder=" add Your address"></textarea>
    <br>
    <br>
    <label for="country">country </label>
    <select name="country">
      <option value="select country" selected> select country </option>
      <option value="cairo">cairo</option>
      <option value="giza"> giza</option>
    </select>
    <br>
    <br>
    <label for="gender"> gender
      <label for="male">
        <input type="radio" id="male" name="male" value="male"> male
      </label>
      <label for="female">
        <input type="radio" id="female" name="male" value="female"> female
      </label>
      <br>
      <br>
      <form>
        <label for="skills" name="skills[]" value="skills"> skills </label><br>
        <label for="php">
          <input type="checkbox" id="php" name="skills[]" value="php"> php
        </label>
        <label for="My SQL">
          <input type="checkbox" id="My SQL" name="skills[]" value="My SQL"> My SQL <br>
        </label>
        <label for="c++">
          <input type="checkbox" id="c++" name="skills[]" value="c++">c++
        </label>
        <label for="css">
          <input type="checkbox" id="css" name="skills[]" value="css">css<br>
        </label>
      </form>
      <br>
      <br>
      <!-- دا هعتبره email -->
      <label for="user name "> user name </label>
      <input type="text" id="user name" name="user_name">
      <!-- Show Error Messages to display a error message When the user enters the wrong username -->
      <small class="text-danger">
        <?php
        if (isset($errors['user_name']))
          echo $errors['user_name'];
        ?>
      </small>
      <br>
      <br>
      <label for="password">password</label>
      <input type="password" id="password" name="password">
      <!-- Show Error Messages to display a error message When the user enters the wrong password -->
      <small class="text-danger">
        <?php
        if (isset($errors['password']))
          echo $errors['password'] ?>
      </small>
      <br>
      <br>
      <label for="department">department</label>
      <input type="text" id="department" name="department" placeholder="open source">
      <br>
      <br>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
      <br>
      <br>
  </form>
</body>

</html>
