<?php
if (isset($_GET['event_type']) && isset($_GET['event_value'])) {
    $eventType = $_GET['event_type'];
    $eventValue = $_GET['event_value'];

    // Verileri kaydetmek için gerekli kodu buraya ekleyin
    file_put_contents("log.txt", "Event: $eventType, Value: $eventValue\n", FILE_APPEND);
    
    echo "Postback alındı";
} else {
    echo "Geçersiz istek";
}
?>
