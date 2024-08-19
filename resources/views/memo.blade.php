<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            border: 1px solid #000;
            padding: 5px;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0;
        }
        .content {
            margin-bottom: 20px;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
        }
        .content th, .content td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .footer {
            text-align: right;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>COMPANY NAME</h1>
            <p>ADDRESS GOES HERE, Mob: +91-9999999999</p>
            <p>www.example.com</p>
        </div>
        <div class="content">
            <table>
                <tr>
                    <td>Invoice No.: {{ $invoice_no }}</td>
                    <td>Invoice Date: {{ $date }}</td>
                </tr>
                <tr>
                    <td colspan="2">Name: {{ $name }}</td>
                </tr>
                <tr>
                    <td colspan="2">Address: {{ $address }}</td>
                </tr>
                <tr>
                    <td colspan="2">Phone: {{ $phone }}</td>
                </tr>
            </table>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>Sr. No</th>
                        <th>Description</th>
                        <th>Qty.</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $items }}</td>
                        <td>1</td>
                        <td></td>
                        <td>{{ $total }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p>Rupees in words: {{ $total }} only</p>
            <p>Terms & Conditions: Goods once sold will not be taken back</p>
            <br><br>
            <p>Receiver Signature ___________________________ Signature ___________________________</p>
        </div>
    </div>
</body>
</html>
