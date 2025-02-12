<?php
include 'koneksi.php';  


$sql = "SELECT * FROM murid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. "<br>" .
        "Absen :" . $row["absen"] . "<br>" . 
        "Kelas :" . $row["kelas"]. "<br>";
    }
} else {
    echo "0 hasil";
}

$conn->close();  
?>
