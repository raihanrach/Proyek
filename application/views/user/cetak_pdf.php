<!DOCTYPE html>
<html>

<head>
    <title>Cetak Tugas Akhir</title>
    <style type="text/css">
        #outtable {
            /* padding: 20px; */
            border: 3px solid #e3e3e3;
            /* width: 80%; */
            border-radius: 20px;
        }

        .short {
            width: 70%;
        }

        .normal {
            width: 70%;
        }

        table {
            /* border-collapse: collapse; */
            font-family: arial;
            color: #5E5B5C;
            width: 100%;
        }

        thead th {
            text-align: left;
            padding: 10px;
        }

        tbody td {
            border-top: 2px solid #e3e3e3;
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background: #F6F5FA;
        }

        tbody tr:hover {
            background: #EAE9F5
        }
    </style>
</head>

<body>

    <div id="outtable">
        <table>
            <thead>
                <tr>
                    <th class="">No</th>
                    <th class="">Judul</th>
                    <th class="">File</th>
                    <th class="">Nama Mahasiswa</th>
                    <th class="">Nama Dospem 1</th>
                    <th class="">Nama Dospem 2</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($tugas_akhir as $ta) : ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $ta->judul; ?></td>
                        <td><?php echo $ta->file; ?></td>
                        <td><?php echo $ta->nama_mahasiswa; ?></td>
                        <td><?php echo $ta->nama_pembimbing1; ?></td>
                        <td><?php echo $ta->nama_pembimbing2; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>