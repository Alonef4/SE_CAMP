<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table th,
    table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    table th {
      background-color: #f2f2f2;
    }

    .scroll {
      overflow: auto;
      width: 265px;
      height: 515px;
      margin: 0 auto;
    }
  </style>
</head>


<body>
  <?php $multi_x = 2; ?>
  <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

  <div class="scroll">
    <table>
      <tbody>
        <tr>
          <th>แม่</th>
          <th>x</th>
          <th>ตัวคูณ</th>
          <th>=</th>
          <th>ผลลัพธ์</th>
        </tr>
        <?php for ($i = 1; $i <= 24; $i++) { ?>
          <tr>
            <td><?php echo $multi_x ?></td>
            <td>x</td>
            <td><?php echo $i ?></td>
            <td>=</td>
            <td><?php echo $multi_x * $i ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>
