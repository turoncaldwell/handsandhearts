<?php
// Sanitized: Database credentials removed
$pdo = new PDO("mysql:host=localhost;dbname=database", "username", "");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $donor_name = $_POST['name'];
    $stmt = $pdo->prepare("INSERT INTO donations (amount, donor_name) VALUES (?, ?)");
    $stmt->execute([$amount, $donor_name]);
    echo "Thank you for your donation!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donate - Hands and Hearts That Care</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Donate to Hands and Hearts That Care</h1>
    </header>
    <section>
        <form method="post">
            <label>Name: <input type="text" name="name" required></label><br>
            <label>Amount: <input type="number" name="amount" required></label><br>
            <button type="submit">Donate</button>
        </form>
    </section>
</body>
</html>
