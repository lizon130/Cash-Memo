<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Memo</title>
</head>
<body>
    <h1>Create Memo</h1>
    <form action="{{ route('download.memo') }}" method="POST">
        @csrf
        <label for="name">Customer Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="2" required></textarea>
        <br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <label for="invoice_no">Invoice No:</label>
        <input type="text" id="invoice_no" name="invoice_no" required>
        <br><br>
        <label for="date">Invoice Date:</label>
        <input type="date" id="date" name="date" required>
        <br><br>
        <label for="items">Item Description:</label>
        <textarea id="items" name="items" rows="4" required></textarea>
        <br><br>
        <label for="total">Total Amount:</label>
        <input type="text" id="total" name="total" required>
        <br><br>
        <button type="submit">Download Memo</button>
    </form>
</body>
</html>
