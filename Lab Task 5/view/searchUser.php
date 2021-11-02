
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="../controller/findUser.php">
      <h2>Search User </h2>
      <input type="text" name="username" />
      <input type="submit" name="findUser" value="Search"/>
    </form>


 
  </body>
</html>