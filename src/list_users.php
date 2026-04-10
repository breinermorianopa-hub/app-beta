<?php
require("../config/database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" align = "center">
        <tr>
            <th>Fullname </th>
            <th>E-mail </th>
            <th>Mobile phone </th>
            <th>Status </th>
            <th>photo </th>
            <th>Options </th>
        </tr>
        <tr>
            <td>Peter Loza </dt>
            <td>Peter@mail.com </dt>
            <td>30090 </dt>
            <td>Active </dt>
            <td><img src = "profile_photo/avatar.png" width = "55" alt = "User photo">
        </dt>
       <td>
        <a href = "#" >
            <img src = "icons/edit.png"
            width = "25" alt = "Edit user">
</a>
    &nbsp; &nbsp;
    <a href = "#">
        <img src = "icons/delete.png"
        width = "25" alt = "delete user">
</a>
</dt>
        </tr>

</body>
</html>