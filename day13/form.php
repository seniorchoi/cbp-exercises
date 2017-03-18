<?php
 var_show($_GET);
 var_show($_POST);

?>
<hr style="clear: both" />
<form action="" method="post">

    <input type="text" name="first_name" value="" placeholder="Write your name here" /><br />

    <input type="checkbox" name="is_here" value="yes" <?php if(isset($_POST['is_here']) && $_POST['is_here']=='yes') echo 'checked'; ?> /><br />
    <input type="checkbox" name="is_male" value="yes" <?php echo (isset($_POST['is_male']) && $_POST['is_male']=='yes') ? 'checked' : ''; ?> /><br />

  <input type="submit" value="Submit the form" />

</form>