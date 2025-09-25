<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = trim($_POST["user_input"]);
    if (!empty($input)) {
        file_put_contents("sisendid.txt", $input . PHP_EOL, FILE_APPEND);
        echo "Sisend salvestatud!";
    } else {
        echo "Palun sisesta midagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sisendi Vorm</title>
</head>
<body>
    <form method="POST" action="">
        <label>Sisesta tekst:</label>
        <input type="text" name="user_input" required>
        <button type="submit">Saada</button>
    </form>
</body>
</html>

