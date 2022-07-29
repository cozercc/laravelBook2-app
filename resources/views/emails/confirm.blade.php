<html>
    <head>
        <meta charset="UTF-8">
        <title>Email Confirl Page</title>
    </head>
    <body>
        <h1>Thanks for your singup</h1>
        <p>
            Please click the URL to confirm your email address:
            <a href="{{ route('confirm_email', $user->activation_token) }}">
                {{ route('confirm_email', $user->activation_token) }}
            </a>
        </p>

        <p>
            If you don't remeber this action, please delete this email.
        </p>
    </body>
</html>