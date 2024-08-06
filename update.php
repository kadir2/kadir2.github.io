<?php
if (isset($_POST['temperature']) && isset($_POST['humidity'])) {
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];

    // Verileri bir dosyaya kaydet
    $data = "Temperature: $temperature, Humidity: $humidity";
    file_put_contents('data.txt', $data);
    echo "Data received: $data";
} else {
    echo "No data received";
}
?>
