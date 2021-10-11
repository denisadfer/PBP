<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filter Search</title>

  <style>
  .filter {
    text-align: center;
  }

  .tabel {
    border-collapse: collapse;
    width: 100%;
  }

  .tabel td,
  .tabel th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  .tabel tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  .tabel tr:hover {
    background-color: #ddd;
  }

  .tabel th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #523FFF;
    color: white;
  }
  </style>
</head>

<body>

  <?php 
    $datas = [
        [
            "NIM" => 001,
            "Nama" => "Adnan",
            "IPK" => 3.9
        ],
        [
            "NIM" => 002,
            "Nama" => "Cahyo",
            "IPK" => 3.8
        ],
        [
            "NIM" => 003,
            "Nama" => "Andrew",
            "IPK" => 3.7
        ],
        [
            "NIM" => 004,
            "Nama" => "Dimas",
            "IPK" => 3.6
        ],
        [
            "NIM" => 005,
            "Nama" => "Rachel",
            "IPK" => 3.7
        ]
    ];
    $x = 1;
    ?>

  <div>
    <form action="" method="POST">
      <div class="filter">
        <br>
        <b>Filter NIM</b>&nbsp;&nbsp;&nbsp;
        <input type="text" name="nim" placeholder="Search for NIM..">&nbsp;&nbsp;
        <input type="submit" value="Tampilkan">&nbsp;&nbsp;
        <button onClick="window.location.href=window.location.href">Reset</button>
      </div>
  </div>
  <br>
  <div>
    <table class=" tabel">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>IPK</th>
      </tr>
      <?php if (!isset($_POST["nim"])) : ?>
      <?php foreach ($datas as $data) : ?>
      <tr>
        <td><?= $x ?></td>
        <td><?= sprintf('%03d',$data["NIM"]) ?></td>
        <td><?= $data["Nama"] ?></td>
        <td><?= $data["IPK"] ?></td>
      </tr>
      <?php $x++; endforeach; ?>
      <?php endif; ?>

      <?php if (isset($_POST["nim"])) : ?>
      <?php $filter = $_POST["nim"]; ?>
      <?php foreach ($datas as $data) : ?>
      <tr>
        <?php 
            if ($filter === sprintf('%03d',$data["NIM"]) || $filter == null) {
                echo "<td>$x</td>";
                echo "<td>";
                echo sprintf('%03d',$data["NIM"]);
                echo "</td>";
                echo "<td>". $data['Nama'] ."</td>";
                echo "<td>". $data['IPK'] ."</td>";
            }
            else {
                continue; 
            }
            ?>
      </tr>
      <?php $x++; endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
  </form>

</body>

</html>