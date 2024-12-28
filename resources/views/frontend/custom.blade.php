<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Customization</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 40px 0; /* Add padding to the top and bottom of the body */
    margin: 0; /* Remove default margin */
}

.container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 700px;
    margin: 40px auto; /* Adds margin from the top */
    transition: all 0.3s ease-in-out;
    border: 1px solid #ddd;
}

h1 {
    text-align: center;
    font-size: 24px;
    color: #4A90E2;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    font-size: 16px;
    color: #333;
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.form-group textarea {
    width: 100%;
    padding: 14px;
    font-size: 14px;
    border: 2px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    transition: all 0.3s ease;
    background-color: #f9f9f9;
    color: #333;
}

.form-group textarea:focus {
    border-color: #4A90E2;
    outline: none;
    background-color: #ffffff;
}

button {
    background-color: #4A90E2;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 8px;
    width: 100%;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #357ABD;
}

        
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 700px;
            transition: all 0.3s ease-in-out;
        }

        .container:hover {
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #4A90E2;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #4A90E2;
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
        }

        .color-line {
            height: 6px;
            margin-top: 15px;
            background-color: #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        button {
            background-color: #4A90E2;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #357ABD;
        }

        input[type="color"] {
            padding: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }

        input[type="file"] {
            padding: 10px;
            background-color: #f0f0f0;
            border: 2px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s ease;
        }

        input[type="file"]:focus {
            border-color: #4A90E2;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Customization Form</h1>

        <form action="{{ route('sendCustom') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product-description">Product Description:</label>
                <textarea id="product-description" name="product-description" rows="4" placeholder="Enter your custom description..." required></textarea>
            </div>

            <div class="form-group">
                <label for="product-type">Select Product Type:</label>
                <select id="product-type" name="product-type" required>
                    <option value="sculpture">Sculpture</option>
                    <option value="lamp">Lamp</option>
                    <option value="furniture">Furniture</option>
                    <option value="mirror">Painting</option>
                </select>
            </div>

            <div class="form-group">
                <label for="product-color">Choose Color:</label>
                <input type="color" id="product-color" name="product-color" required onchange="changeLineColor()">
            </div>

            <!-- Line for color change -->
            <div class="color-line" id="color-line" style="margin-bottom:30px;"></div>

            <div class="form-group">
                <label for="product-size">Select Size:</label>
                <select id="product-size" name="product-size" required>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>

            <div class="form-group">
                <label for="customization-note">Additional Notes or Preferences:</label>
                <textarea id="customization-note" name="customization-note" rows="4" placeholder="Any specific instructions or preferences..."></textarea>
            </div>

            <div class="form-group">
                <label for="contact-info">Your Contact Information:</label>
                <input type="email" id="contact-info" name="contact-info" placeholder="Enter your email address" required>
            </div>

            <!-- Image Upload Field -->
            <div class="form-group">
                <label for="product-image">Upload Product Image:</label>
                <input type="file" id="product-image" name="product-image" accept="image/jpeg, image/png" required>
            </div>

            <button type="submit">Submit Customization</button>
        </form>

        <div class="footer">
            <p>&copy; 2024 Custom Product Creations</p>
        </div>
    </div>

    <script>
        // Function to change the line color based on color input
        function changeLineColor() {
            var colorPicker = document.getElementById('product-color');
            var colorLine = document.getElementById('color-line');
            colorLine.style.backgroundColor = colorPicker.value;
        }
    </script>
</body>
</html>
