<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Reply</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .email-body {
            padding: 20px;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .email-body .reply-message {
            background-color: #f4f4f4;
            border-left: 4px solid #4CAF50;
            padding: 10px;
            margin-bottom: 20px;
        }

        .email-footer {
            text-align: center;
            padding: 20px;
            background-color: #f4f4f7;
            color: #777;
            font-size: 14px;
        }

        .email-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Reply to Your Message</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p>Hi {{ $name }},</p>

            <p>Thank you for reaching out to us! Below is our reply to your recent message:</p>

            <!-- Reply Message -->
            <div class="reply-message">
                <p>{{ $reply }}</p>
            </div>

            <p>If you have any further questions or need clarification, feel free to reply directly to this email or contact us through our <a href="{{ $supportLink }}">support page</a>.</p>

            <!-- Call to Action -->
            <p><a href="/" class="btn">Visit Our Website</a></p>

        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>Best regards,</p>
            <p>The {{ env("APP_NAME") }} Team</p>
            <p><a href="{{ $unsubscribeLink }}">Unsubscribe</a> from these notifications.</p>
        </div>
    </div>
</body>
</html>
