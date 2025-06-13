<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjadwalan Pengobatan Gigi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table td {
            color: #333;
        }

        .ttd-container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .ttd-section {
            text-align: center;
            margin-top: 50px;
        }

        .ttd-section p {
            margin-bottom: 80px;
        }

        .ttd-section .name {
            text-decoration: underline;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <h1>Data Penjadwalan Pengobatan Gigi</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Jam</th>
                <th>Jenis Pengobatan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengobatan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jam }}</td>
                <td>{{ $item->jenis_pengobatan_gigi}}</td>
                <td>{{ $item->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="ttd-container">
        <div class="ttd-section">
            <p>Lhokseumawe, {{ $currentDate }}</p>
            <p>_________________</p>
        </div>
    </div>
</body>

</html>
