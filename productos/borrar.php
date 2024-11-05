
<?php

$id = $_POST['producto'];
$c = mysqli_connect("localhost", "alex", "alex", "herbolario");

if (!$c) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM productos WHERE id = '$id'";
if (mysqli_query($c, $sql)) {
  header("Location: ./productos.php");
} else {
  echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
  echo "<p>Error: " . mysqli_error($c) . "</p>";
  echo "</body>";
}
