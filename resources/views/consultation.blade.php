<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St James Infirmary - Consultation Request</title>
    <link rel="shortcut icon" type="image/x-icon" href="images\St.-James-Logo-white.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border-color: #ced4da;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            font-weight: 500;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <a href="{{ url('welcome') }}" class="btn btn-secondary mb-3">Go Home</a>
        <h2 class="form-title">St James Infirmary <br> Consultation Request</h2>
        <form method="POST" action="{{ route('consultations.store') }}">
            @csrf
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name"
                    placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number"
                    placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="reason">Reason for Consultation</label>
                <textarea class="form-control" id="reason" name="reason" rows="3"
                    placeholder="Briefly describe the reason for your consultation" required></textarea>
            </div>
            <div class="form-group">
                <label for="preferred_date">Preferred Date</label>
                <input type="date" class="form-control" id="preferred_date" name="preferred_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>



    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
