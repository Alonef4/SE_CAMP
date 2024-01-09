<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตารางสูตรคูณของ {{ $number }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h1>ตารางสูตรคูณของ {{ $number }}</h1>
        <table>
            <tr>
                <th>ตัวคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
            @foreach($table as $multiplier => $result)
                <tr>
                    <td>{{ $multiplier }}</td>
                    <td>{{ $result }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
