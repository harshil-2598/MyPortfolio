<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #007bff;
        }
        .content p {
            color: #333333;
            line-height: 1.6;
        }
        .button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        .footer p {
            margin: 0;
            color: #666666;
        }
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                margin: auto;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Mail from my Portfolio</h1>
        </div>
        <div class="content">
            <h2>Hello {{ $name }},</h2>
            <p>
                {{ $email }}
            </p>
            <p>
                {{ $msg }}
            </p>
            
            <a href="mailto:{{ $email }}" class="button">Contact Us</a>
        </div>
        <div class="footer">
            <!-- <p>
                Best regards,<br>
                [Your Full Name]<br>
                [Your Position]<br>
                [Your Contact Information]<br>
                [Your Website or Company Name]
            </p> -->
        </div>
    </div>
</body>
</html>
