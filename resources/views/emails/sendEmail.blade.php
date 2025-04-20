
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Example</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Our Service</h1>
        </div>
        <div class="content">
            <p>Hello, {{ $mailData['name'] }}!</p>
            <p>Thank you for signing up for our service. We are excited to have you on board.</p>
            <p>Here are your details:</p>
            <ul>
                <li>Email: {{ $mailData['email'] }}</li>
                <li>Signup Date: {{ $mailData['signup_date'] }}</li>
            </ul>
            <p>If you have any questions, feel free to contact us at inspirationhub@gmail.com.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Our Service. All rights reserved.</p>
        </div>
    </div>
</body>
</html>

