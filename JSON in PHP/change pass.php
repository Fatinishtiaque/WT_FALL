<?php
echo '<html>';
echo '<head><b>Change Your Password Here!</b>';
echo '</head>';
echo '<body>';
echo '<FORM NAME ="form1" METHOD ="POST" ACTION ="changepassword.php">';
echo '<p>old password<br />';
echo '<input type="password" name="current_password" /></p>';
echo '<p>New password<br />';
echo '<input type="password" name="new_password"/>';
echo '</p>';
echo '<p>Confirm password<br />';
echo '<input type="password" name="confirm_password"/>';
echo '</p>';
echo '<input name="submit" type="submit" value="Save Password"  />';
echo '</body>';
echo '</html>';
echo '';
?>