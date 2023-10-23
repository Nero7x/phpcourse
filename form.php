<form action="form.php" method="GET">

name: <input type="text" name="fname">
last: <input type="text" name="lname">
<input type="submit">

</form>

<?php
echo $_GET["fname"];
echo $_GET["lname"];
?>