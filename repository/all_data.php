<?php
include '../connection/config.php';

$sql = "SELECT b_id, b_nm, b_publisher, b_price FROM book";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "id :" . $row["b_id"] . "- Book Name : " . $row["b_nm"] . "- Publish :" . $row["b_publisher"] . "- Book Price : " . $row["b_price"]. "<br>";
    }
}else{
    echo "0 results";
}

?>