<?php 


$mysqli = new mysqli("localhost", "morgan", "Nimport5quoi", "buenosaires");

if($mysqli->connect_errno) {
  printf("Echec de la connex : %s<br>", $mmysqli->conenct-errno);
  exit();
} else {
  printf('Connex ok 02/02/21<br>');
}

if($result = $mysqli->query("SELECT * FROM prenoms")) {
  printf("Select a retourné %d lignes.<br>", $result->num_rows);
  $result->close();
} else {
  printf('Pas de résultat<br>');
}

$expl = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
for($i=0; $i<count($expl); $i++){
  printf("Ligne $i : valeur $expl[$i]<br>");
}

// if($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
//   printf("Table myCity créée avec succes<br>");
// }


