<?php
$name = $_POST['name'];
$tel = $_POST['tel'];

require "sql.php";

$mysq1->query("INSERT INTO `call` (`name`, `tel`) VALUES('$name', '$tel')");

$mysq1->close();

header('Location: /');
