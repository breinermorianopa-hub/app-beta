<?php
//LOCAL Database configuration
$LOCAL_HOST     = 'localhost';
$LOCAL_DBNAME   = 'app_beta';
$LOCAL_USERNAME = 'postgres';
$LOCAL_PASSWORD = 'unicesmag';
$LOCAL_PORT     = '5432';
//SUPABASE Database configuration
$SUPA_HOST     = 'aws-1-us-east-2.pooler.supabase.com';
$SUPA_DBNAME   = 'postgres';
$SUPA_USERNAME = 'postgres.dfbdaduiufrnlpvubuls';
$SUPA_PASSWORD = 'unicesmag@@';
$SUPA_PORT     = '6543';


//LOCAL CONNECTION
$local_data_connection = "
host    = $LOCAL_HOST
dbname  = $LOCAL_DBNAME 
user    = $LOCAL_USERNAME 
password= $LOCAL_PASSWORD 
port    = $LOCAL_PORT 

";
//LOCAL CONNECTION
$local_conn = pg_connect($local_data_connection);

if(!$local_conn){ 
    echo "Error: unable to conect to database";
    exit();
}else{
    echo " Local Success connection !!!";
}
//SUPA CONNECTION
$SUPA_data_connection = "
host    = $SUPA_HOST
dbname  = $SUPA_DBNAME 
user    = $SUPA_USERNAME 
password= $SUPA_PASSWORD 
port    = $SUPA_PORT 

";
//SUPA CONNECTION
/*
$SUPA_conn = pg_connect($SUPA_data_connection);

if(!$SUPA_conn){ 
    echo "Error: unable to conect to database";
    exit();
}else{
    echo " <br>Supabase Success connection !!!";
}
*/
?>