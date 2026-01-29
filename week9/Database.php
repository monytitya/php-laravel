<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input,
        select,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
        }

        button {
            background: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Entry Form</h2>

        <form action="insert.php" method="POST">

            <label>Name</label>
            <input type="text" name="name" required>

            <label>Gender</label>
            <select name="gender" required>
                <option value="">-- Select --</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>

            <label>Date of Birth</label>
            <input type="date" name="dob" required>

            <label>Address</label>
            <textarea name="address" rows="3" required></textarea>

            <label>Phone Number</label>
            <input type="text" name="phone_num" required>

            <button type="submit">Save</button>

        </form>
    </div>

</body>

</html>