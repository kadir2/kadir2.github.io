<?php
if (isset($_GET['temperature']) && isset($_GET['humidity'])) {
    $temperature = $_GET['temperature'];
    $humidity = $_GET['humidity'];

    // Değerleri bir dosyaya veya veritabanına kaydedin
    $data = "Temperature: $temperature, Humidity: $humidity";
    file_put_contents('data.txt', $data);
    echo "Data received: $data";
} else {
    echo "No data received";
}
?>
