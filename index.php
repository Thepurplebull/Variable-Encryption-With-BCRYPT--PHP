<?php 
/*****
 * This is an open source project should not be sold or misused
 * Author:Dismas Ndadila
 * Author Email: ndadilladismas@gmail.com
 * Created Date: 9/10/2022
 * Feel free to donate @paypal email:ndadilladismas@gmail.com
 * version:1.0
 * 
 */

 //Encrypting variable
$variable= 1234;

$variablehash = password_hash($variable, PASSWORD_BCRYPT);


echo $variable;

echo "<br>";

echo $variablehash;

//varible Decryption

$hashedvariable = password_verify($variable,$variablehash);

echo "<br>";

if($hashedvariable==true ){

    echo "Variable ( $variable ) is Encrypted";

}


?>