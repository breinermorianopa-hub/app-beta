<?php

include('../config/database.php');
//get data
$f_name  = $_POST['fname' ] ;
$l_name  = $_POST['lname' ] ;
$e_mail  = $_POST['email' ] ;
$m_phone = $_POST['mphone'] ; 
$p_sswd  = $_POST['passwd'] ;
$enc_pass = md5($p_sswd);
//Query to insert into SQL
// Verificar si el teléfono ya existe
$checkPhone = "SELECT * FROM USERS WHERE mobile_phone = '$m_phone'";
$resultPhone = pg_query($local_conn, $checkPhone);

if (pg_num_rows($resultPhone) > 0) {
    echo "Error: el número de teléfono ya está registrado";
    exit;
}
$sql = " INSERT INTO USERS (firstname,lastname,email,mobile_phone, passwd) 
values ('$f_name', '$l_name','$e_mail','$m_phone','$enc_pass')" ;
//execute query
pg_query($sql);
?>