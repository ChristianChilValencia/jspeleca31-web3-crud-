<!DOCTYPE html>
<html>
<head>
    <title>Laravel Session CRUD</title>
    <style>
        body {
            background-color: #f5f5dc; /* Beige background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fffef0; /* Lighter beige for container */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #006400; /* Dark Green */
            border-bottom: 2px solid #006400;
            padding-bottom: 10px;
        }
        a {
            color: #006400;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f0f7e8; /* Light Beige-Green */
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #006400;
        }
        form {
            margin: 20px 0;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #006400;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #fffef0;
        }
        textarea {
            min-height: 100px;
        }
        button, .button {
            background-color: #006400;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
        }
        button:hover, .button:hover {
            background-color: #008000;
        }
        .success {
            color: #006400;
            background-color: #e8f0e8;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            border-left: 4px solid #006400;
        }
        .error {
            color: #ff0000;
            background-color: #fff0f0;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            border-left: 4px solid #ff0000;
        }
        .actions {
            margin-top: 10px;
        }
        .actions form {
            display: inline;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>