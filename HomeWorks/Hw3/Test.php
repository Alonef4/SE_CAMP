<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <?php
    $multi_x = 2;
    $i = 1;
  ?>

  <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

  <table>
    <tbody>
      <?php for ($i = 1; $i <= 12; $i++) { ?>
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

  <style>
    table {
      width: 150px;
      height: 265px;
      overflow-y: scroll;
    }
  </style>
</body>

</html>
