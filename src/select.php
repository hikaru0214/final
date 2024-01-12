<?php require 'db-connect.php'; ?>
<hr>
<?php
echo '<table>';
echo '<tr><th>地方名</th><th>都道府県</th><th>市町村</th><th>観光名所</th><th>説明</th></tr>';
$pdo=new PDO($connect,USER,PASS);
foreach($pdo->query('select * from kanko')as $row){
    echo '<tr>';
    echo '<td>',$row['japan_region'],'</td>';
    echo '<td>',$row['japan_mei'],'</td>';
    echo '<td>',$row['japan_city'],'</td>';
    echo '<td>',$row['kanko_name'],'</td>';
    echo '<td>',$row['remarks'],'</td>';
    echo '</tr>';
}
echo '</table>';
?>