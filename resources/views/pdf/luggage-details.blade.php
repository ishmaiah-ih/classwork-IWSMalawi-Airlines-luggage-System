<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luggage Details Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center text */
        }

        h1, h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        .header {
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .details, .luggage-items {
            margin-bottom: 20px;
            text-align: left; /* Left-align text in details and luggage items */
        }

        .details p {
            margin: 5px 0;
            font-size: 14px;
        }

        .luggage-items {
            border-top: 2px solid #0056b3;
            padding-top: 10px;
            margin-top: 20px;
        }

        .luggage-items ul {
            list-style: none;
            padding: 0;
        }

        .luggage-item {
            margin-bottom: 10px;
        }

        .luggage-item strong {
            display: block;
            font-size: 14px;
            color: #0056b3;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Luggage Details Receipt</h1>
    <h2>{{ $customer->surname }} {{ $customer->first_name }}</h2>
    <p><strong>Date & Time:</strong> {{ $customer->created_at->format('d/m/Y H:i:s') }}</p>
</div>

<div class="details">
    <p><strong>Email:</strong> {{ $customer->email }}</p>
    <p><strong>Phone Number:</strong> {{ $customer->phone_number }}</p>
    <p><strong>Ticket Number:</strong> {{ $customer->ticket_number }}</p>
    <p><strong>Departure Point:</strong> {{ $customer->departure_point }}</p>
    <p><strong>Destination Point:</strong> {{ $customer->destination }}</p>
</div>

<div class="luggage-items">
    <h2>Luggage Items:</h2>
    <ul>
        @foreach($luggageItems as $item)
            <li class="luggage-item">
                <strong>{{ $item->luggage_name }}</strong>
                Characteristics: {{ $item->char_1 }}, {{ $item->char_2 }}, {{ $item->char_3 }}
            </li>
        @endforeach
    </ul>
</div>

<div class="footer">
    <p>Thank you for choosing Malawi Airlines.</p>
</div>
</body>
</html>
