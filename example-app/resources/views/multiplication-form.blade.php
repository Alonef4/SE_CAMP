<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>🧮 ตารางสูตรคูณ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="number"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 80%;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="post" action="/show-multiplication-table">
        @csrf
        <h1>ตารางสูตรคูณ🧮</h1>
        <label for="number">ใส่ตัวเลข:</label>
        <input type="number" name="number" id="number" min="1" max="24">
        <button type="submit">ยืนยัน</button>
    </form>
</body>

</html>
