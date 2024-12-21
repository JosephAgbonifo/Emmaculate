<?php
setcookie("email", "", time() - 3600);
setcookie("fullname", "", time() - 3600);
header("Location: staff/login");
exit();
?>