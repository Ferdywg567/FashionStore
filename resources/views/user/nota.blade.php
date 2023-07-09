<!-- transactions/receipt_pdf.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }

        h1 {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px;
        }

        th {
            background-color: #f2f2f2;
        }

        tfoot td {
            font-weight: bold;
            background-color: #f2f2f2;
        }

        tfoot tr:last-child td {
            border-top: 2px solid #000;
        }

        @media print {
            #back-btn {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <h1>Receipt Order #{{ $transaction->id }}</h1>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            {{-- @php
                dd($transaction)
            @endphp --}}
            @foreach ($transaction->details as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td>Rp. {{ $item->product->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rp. {{ $item->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Total</td>
                <td>Rp. {{ $transaction->total }}</td>
            </tr>
            <tr>
                <td colspan="4">Tax (11%)</td>
                <td>Rp. {{ $transaction->pajak }}</td>
            </tr>
            <tr>
                <td colspan="4">Grand Total</td>
                <td>Rp. {{ $transaction->total + $transaction->pajak }}</td>
            </tr>
        </tfoot>
    </table>
    <div id="back-btn" style="display: flex; justify-content:center;padding: 20px">
        <a href="{{ route('home') }}"><u>kembali ke beranda</u></a>
    </div>
</body>

</html>
