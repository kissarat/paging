<?php
require_once('init.php');

$result = $db->query("select * from `posts` limit $offset, $limit");
// $result->bindParam(':offset', $offset, PDO::PARAM_INT);
// $result->execute();

while($row = $result->fetch(PDO::FETCH_NUM)) {
    echo '<tr>';
    foreach($row as $cell)
        echo "<td>$cell</td>";
    echo '</tr>';
}