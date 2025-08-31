<?php
// Your ABA account
$aba_account = "001581635"; // Replace with your ABA account number
$receiver_name = "CHILLOUT COFFEE"; // Your shop name

// Amount from form
$amount = $_POST['amount'] ?? 0;

// KHQR format (EMVCo standard)
$data = "00020101021129370016ABAQRKHQR000895406$aba_account520400005303840540$amount5802KH5913$receiver_name6304";

// Generate QR Code using Google Chart API
$qr_url = "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=" . urlencode($data);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pay with ABA KHQR</title>
</head>
<body>
  <h1>Scan to Pay $<?php echo $amount; ?></h1>
  <img src="<?php echo $qr_url; ?>" alt="ABA KHQR Code">
  <p>Account: <?php echo $aba_account; ?><br>
     Name: <?php echo $receiver_name; ?></p>
  <p>After payment, please send us your receipt for confirmation.</p>
</body>
</html>
