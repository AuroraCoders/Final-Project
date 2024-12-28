<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        /* Form header */
        h1 {
            margin-bottom: 20px;
            font-size: 36px;
            font-weight: 700;
        }

        /* Input and Button Styling */
        input, select, button {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: 16px;
        }

        input, select {
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            color: #333;
        }

        input:focus, select:focus {
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
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4a53d4;
        }

        /* Success message */
        .success-message {
            color: #4caf50;
            margin-bottom: 20px;
        }

        /* Link for login */
        .login-link {
            margin-top: 20px;
            font-size: 16px;
            color: #fff;
        }

        .login-link a {
            color: #5c67f2;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Mobile responsiveness */
        @media (max-width: 480px) {
            .container {
                padding: 30px;
                max-width: 90%;
            }

            h1 {
                font-size: 30px;
            }

            input, select, button {
                padding: 12px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Register</h1>
        
        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>

            <!-- Select user type -->
            <select name="type" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit">Register</button>
        </form>

        <!-- Link to login page -->
        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </div>

</body>
</html>
