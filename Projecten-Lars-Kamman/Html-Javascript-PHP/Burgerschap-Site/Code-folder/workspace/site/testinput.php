<?php
function test_input($data) {
  $data = trim($data); //verwijdert spaties
  $data = stripslashes($data); // verwijdert \
  $data = htmlspecialchars($data); //vervangt speciale karakters
  return $data;
}
?>