<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbperpustakaan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown from Database</title>
</head>

<body>
    <form>
        <label for="skenarioDropdown">Pilih Skenario:</label>
        <select id="skenarioDropdown" name="skenario">
            <?php
            $conn = new mysqli("localhost", "root", "", "dbperpustakaan");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Ambil nilai dari database
            $result = $conn->query("SELECT * FROM tbbuku");


            // Bangun opsi dropdown
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['judul']}'>{$row['judul']}</option>";
            }

            $conn->close();
            ?>
        </select>
    </form>
</body>

</html>