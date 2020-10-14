<?php
session_start();
session_destroy();
echo '<script language="javascript">alert("YOU HAVE LOGGED OUT!");window.location.href = "../../login.php";</script>';