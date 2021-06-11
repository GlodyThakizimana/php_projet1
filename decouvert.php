<?php
// type de variable


$name = 'Glody'; // string
$age = 23; // integer
$email = 'glody@.com';
$bool = true; // bool
$array = [4 , 2 , "ELO", 'Ben']; // tableau
$users = ['Elodie' , 'Manon' , 'Brice' , 'Ben'];
$null = null;
echo '<p>'. $name ." ". $age ." ". $email .'</p>';

 // pour affichier un tabelau 
 var_dump($array);


// les condition 
 if($age < 18){
  echo 'Tu est bien mineur';
 }
 else{
     echo 'Tu es majeur';
 }
 // les boucle while / for / foreach
 // tant que la codition est vrai je fait ce qui est demander
 $a = 0;
while ($a <= 10) {
    echo $a;
    echo '<br>';
    $a ++;
}
// elle permet de faire une chose plusieur fois
var_dump(count($array)); 
for ($i=0; $i < count($array); $i++) { 
   echo "<p>$array[$i]</p>";  // pour parcourir un tableau
}
// le foreach

foreach ($users as $user) {
    echo "<p>$user</p>";
}

