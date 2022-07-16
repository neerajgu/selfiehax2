<DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
    <body>
      <div id='formContainer'>
        <form action='createdAccount.php' method='post'>
          <label for="DogName"> Dog's name:</label><br>
          <input type="text"id="DogName"name="DogName"><br>
          <label for="OwnerName"> Owner's name:</label><br>
          <input type="text"id="OwnerName"name="OwnerName"><br>
          <label for="breed"> Breed:</label><br>
          <input type="text"id="breed"name="breed"><br>
          <label for="age"> Age:</label><br>
          <input type="text"id="age"name="age"><br>
          
          <input type="submit">
        </form>
      </div>
  </body>
</html>