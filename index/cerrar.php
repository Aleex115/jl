<?php
setcookie("empleado", "", time() - 3600, "/");
header("Location: ../login/login.html");
