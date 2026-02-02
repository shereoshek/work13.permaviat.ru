<?php
    require_once('../settings/connect_datebase.php');

    $query_users = $mysqli->query("SELECT login, password FROM `users`;");
    echo "<tr>";
    while($read = $query_users->fetch_assoc()){
        eecho "<td>".htmlspecialchars($read['login'])."</td>";
        echo "-";
        echo "<td>".htmlspecialchars($read['password'])."</td>";
        echo "<br>";
    }
    echo "</tr>";
?>