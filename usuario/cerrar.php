<?php
setcookie("email", "", time() - 3600, "/");
setcookie("compras", "", time() - 3600, "/");
header("Location: ../login/login.html");
