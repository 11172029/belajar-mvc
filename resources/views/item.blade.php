<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        </tr>
        
        @endforeach
    </table>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f3e8; /* Cokelat sangat muda untuk latar belakang body */
            color: #4e342e; /* Cokelat tua untuk teks */
            padding: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #a1887f; /* Cokelat sedang untuk batas */
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #795548; /* Cokelat lebih tua untuk header */
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        tr:nth-child(even) {
            background-color: #efebe9; /* Cokelat muda untuk baris genap */
        }
        tr:hover {
            background-color: #d7ccc8; /* Sedikit lebih gelap saat di-hover */
        }
    </style>