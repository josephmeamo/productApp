<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Product List</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Price (₱)</th>
            <th>Description</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ number_format($product['price'], 2) }}</td>
            <td>{{ $product['description'] }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>