<!DOCTYPE html>
<html>

<head>
    <title>Hello, world</title>
    <link rel="stylesheet" href="/style.css">
    <script src="/script.js"></script>
</head>

<body>
    <h1>Hello, world</h1>

    <button onclick="fetchMessage()">Fetch Message</button>
    <p id="message">Click on the button to fetch the message.</p>
    <h2>
    <?php $hostname = `hostname`; echo "Serving this message from pod $hostname."?>
    </h2>
</body>

</html>
