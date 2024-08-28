<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="newcss.css">
</head>
<body><header>
        <h1>FindmySpot</h1>
        <p>Find and book parking spots near you!</p>
    </header>

    <main>
        <section class="payment-options">
            <h2>Select Payment Method</h2>
            <form action="confirmation.html" method="post">
       
                <input type="submit" class="submit-button" name="upi_payment" value="Pay with UPI (Google Pay, PhonePe, Paytm)">
                <input type="submit" class="submit-button" name="card_payment" value="Pay with Credit Card">
                <input type="submit" class="submit-button" name="bank_transfer" value="Bank Transfer">
            </form>
        </section>
    </main>