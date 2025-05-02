<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Consultation Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        p {
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Consultation Request</h1>
        <p>Dear St. James Infirmary Team,</p>
        <p>You have received a new consultation request with the following details:</p>
        <p><strong>Name:</strong> {{ $consultation->full_name }}</p>
        <p><strong>Email:</strong> {{ $consultation->email }}</p>
        <p><strong>Phone:</strong> {{ $consultation->phone_number }}</p>
        <p><strong>Reason:</strong> {{ $consultation->reason }}</p>
        <p><strong>Preferred Date:</strong> {{ $consultation->preferred_date->format('M d, Y') }}</p>
        <p>Please review the request and take appropriate action.</p>
        <p>Best regards,<br>St. James Infirmary</p>
    </div>
</body>

</html>
