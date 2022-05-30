<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('store')}}" method="POST">
    @csrf
  <label for="fname">Email:</label><br>
  <input type="email" id="fname" name="email" ><br>
  <label for="lname">Number:</label><br>
  <input type="number" id="lname" name="number" ><br><br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

