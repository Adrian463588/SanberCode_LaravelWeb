<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>halaman pendaftaran</title>
    </head>
    <body>
        <h1>Buat Account Baru</h1>
        <h3>Sign Up From</h3>
     <form action="/submit"method="post">
        @csrf
    <label>First name:</label><br>
    <input type="text" name="first"><br><br>
    <label>Last name:</label><br>
    <input type="text" name="name"><br><br>
    <label>Gender:</label><br>
    <input type="radio"name="gender">Male<br>
    <input type="radio"name="gender">Female<br>
    <input type="radio"name="gender">Other<br><br>
    <label>Nationality:</label><br><br>
     <label><select><br>
        <option>Indonesian</option>
        <option>singapure</option>
        <option>malaysia</option>
        <option>australian</option>
     </select><br><br>
     <label>Language Spoken:</label><br><br>
     <input type="checkbox" name="language">Bahasa indonesia<br>
     <input type="checkbox" name="language">English<br>
     <input type="checkbox" name="language">Other<br><br>
     <label>Bio</label><br><br>
     <textarea name="message" rows="10" cols="30"></textarea>
     <br><br>
     <input type="submit"value="submit">
     </form>
    </body>
</html>
