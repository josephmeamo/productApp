<!DOCTYPE html>
<html>
<head>
    <title>Laravel Products Application</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { width: 80%; margin: 20px auto; }
        h1, h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        p { text-align: justify; }
    </style>
</head>
<body>

<div class="container">
    <h1>Laravel Products Application</h1>

    <h2>Objective</h2>
    <p>
        You are to develop a simple Laravel application that will display an array of products in an organized manner.
        This demonstrates your understanding of File Structure, Routing, Controllers, and Models in Laravel.
    </p>

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
</div>

</body>
</html>