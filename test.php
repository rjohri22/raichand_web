<?php
$plaintext_password=password_hash("12345",  PASSWORD_DEFAULT);
 
 
// echo $hash; exit;

$verify = password_verify($plaintext_password,`$2y$10$bJWQ5etL8hjbq7YvWTqY3.U0v5/It9dt7u2lHeMNNFKKTXkJHifTu`);


if($verify ==true){
    echo "Password match";
}
else{
    echo "Password mismatch";
}



?>