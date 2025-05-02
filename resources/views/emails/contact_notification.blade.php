<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .message {
            padding: 20px;
            background-color: #e9f5fa;
            border-radius: 8px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Hello Team,</h2>
        <div class="message">
            <p>You've received a new message from the website:</p>
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Subject:</strong> {{ $contact->subject }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contact->message }}</p>
        </div>
        <div class="footer">
            <p>Thank you for promptly attending to this inquiry!</p>
            <p>This email was sent from St. James Infirmary Busia Ltd.</p>
        </div>
    </div>
</body>

</html>
