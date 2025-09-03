<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background: #ffffff;
            max-width: 600px;
            margin: auto;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            font-size: 22px;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            font-size: 14px;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
        }
        table th {
            background: #f8f8f8;
        }
        .total {
            text-align: right;
            font-weight: bold;
            font-size: 16px;
            margin-top: 10px;
        }
        .delivery {
            background: #f0f8ff;
            padding: 12px;
            border-left: 4px solid #007bff;
            margin: 20px 0;
            font-size: 14px;
        }
        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Order Confirmation</h1>

        <p>Hi {{ $order->name }},</p>
        <p>Thank you for your order! Here are your order details:</p>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>₹{{ number_format($order->price, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <p class="total">Total: ₹{{ number_format($order->total_price, 2) }}</p>

        <div class="delivery">
            <strong>📦 Expected Delivery Date:</strong><br>
            {{ \Carbon\Carbon::parse($deliveryDate)->format('d M Y') }}
        </div>

        {{-- <p>We’ll notify you once your order is shipped.</p> --}}

        <div class="footer">
            Thanks, <br>
            {{ config('app.name') }}
        </div>
    </div>
</body>
</html>
