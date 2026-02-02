<?php
    require_once('../settings/connec_datebase');

    $query_users = $mysqli->query("SELECT login, password FROM `users`;");
    echo "<tr>";
    while($read = $query_users->fetch_assoc()){
        echo "<td>".htmlspecialchars($read['login'])."</td>";
        echo "<td>".htmlspecialchars($read['password'])."</td>";
    }
    echo "</tr>";
?>