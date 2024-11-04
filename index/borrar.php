
<?php

$dni = $_POST['empleados'];
$c = mysqli_connect("localhost", "alex", "alex", "herbolario");

if (!$c) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM empleados WHERE dni = '$dni'";
if (mysqli_query($c, $sql)) {
  header("Location: ./index.php");
} else {
  echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
  echo "<p>Error: " . mysqli_error($c) . "</p>";
  echo "</body>";
}
