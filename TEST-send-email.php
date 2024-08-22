<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="stylesheet" href="send-email.css">
</head>

<body>
    <div class="container">
        <form action="send-email-function.php" method="POST">
            <label for="">Email:</label>
            <input type="email" name="email">
            <br>
            <label for="">Subject:</label>
            <input type="text" name="subject">
            <br>
            <label for="">Message</label>
            <input type="text" name="message">
            <br>
            <Button type="submit" name="send">Send</Button>
        </form>
    </div>
</body>

</html>