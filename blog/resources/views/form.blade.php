<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Daftar SanberBook</title>
</head>

<body>
  <h1>Buat Account Baru!</h1>
  <h2>Sign Up Form</h2>

  <form action="/welcome" method="POST">
    @csrf
    <label for="fname">First name:</label><br><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label><br><br>
    <input type="text" id="lname" name="lname"><br><br>

    <p>Gender:</p>
    <input type="radio" name="gender" value="Male" id="male">
    <label for="male">Male</label><br>
    <input type="radio" name="gender" value="Female" id="female">
    <label for="female">Female</label><br>
    <input type="radio" name="gender" value="Other" id="other">
    <label for="other">Other</label><br><br>

    <label for="nationality">Nationality:</label><br><br>
    <select name="nationality" id="nationality">
      <option value="American">American</option>
      <option value="British">British</option>
      <option value="Indonesian">Indonesian</option>
      <option value="FloorGang">Swedish</option>
    </select>
    <br>

    <p>Language spoken:</p>
    <input type="checkbox" name="language" value="bahasa" id="bahasa">
    <label for="bahasa">Bahasa Indonesia</label><br>
    <input type="checkbox" name="language" value="english" id="english">
    <label for="english">English</label><br>
    <input type="checkbox" name="language" value="other" id="other">
    <label for="other">Other</label><br><br>

    <label for="bio">Bio:</label><br><br>
    <textarea name="bio" rows="8" cols="25"></textarea><br><br>

    <input type="submit" value="Submit">
  </form>
</body>

</html>
