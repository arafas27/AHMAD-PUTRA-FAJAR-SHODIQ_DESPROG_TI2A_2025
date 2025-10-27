<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 400px;
            background: #fff;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #295F98;
            color: #fff;
            text-align: left;
        }
        tr:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php
        $dosen = [
            'nama' => 'Elok Nur Rahmana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <tr>
            <th>Field</th>
            <th>Data</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <?php echo $dosen['nama']; ?>
            </td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td>
                <?php echo $dosen['domisili']; ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <?php echo $dosen['jenis_kelamin']; ?>
            </td>
        </tr>
    </table>
</body>
</html>