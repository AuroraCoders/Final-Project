<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url("{{ asset('images/backgrounds.jpeg') }}") no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 0;
        }

        /* Container for the form */
        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        /* Form header */
        h1 {
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: 600;
        }

        /* Input and Button Styling */
        input, button {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: 16px;
        }

        input {
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            color: #333;
        }

        input:focus {
            border-color: #5c67f2;
            outline: none;
            background-color: #fff;
        }

        button {
            background-color: #5c67f2;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #4a53d4;
        }

        /* Success message */
        .success-message {
            color: #4caf50;
            margin-bottom: 20px;
        }

        /* Mobile responsiveness */
        @media (max-width: 480px) {
            .container {
                padding: 25px;
                max-width: 90%;
            }

            h1 {
                font-size: 28px;
            }

            input, button {
                padding: 12px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <h1>Login</h1>
        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
