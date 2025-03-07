<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket</title>
  <link rel="stylesheet" href="/public/stylesheets/ticket.css">
  
  <style>
    body {
     background-color: hsl(230 73% 5%) ; ;
      margin:auto;
    }

    .container {
      width: 250px;

      box-sizing: border-box;
      text-align: center;
      margin:auto;
    }

    .m-ticket {
      background-color: #f7f7f7;
      border-radius: 10px;
      height:567px; 
      width:auto;
      background-color: white;
    }

    .movie-details {
      text-align: center;
      margin-bottom: 20px;
    }

    .poster {
      width: 200px;
      height: 200px;
    }

    .info,
    .info-cancel,
    .total-amount {
      text-align: center;
    }

    @media screen and (max-width: 768px) {
      .container {
        padding: 10px;
        height: 70px;
      }
    }

    .scan {
      width: 30%;
    }
   
    a.button {
      display: block;
      width: fit-content; 
      margin: 20px auto;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    a.button:hover {
      background-color: #0056b3;
    }

  </style>
</head>

<body>
  
<div class="container">
 
  
  <div class="m-ticket">
    
    <div class="movie-details">
      <p class="m">GYM-Ticket </p>
      <img src="/public/images/Flexi Link Logo.png" class="poster ">
      <div class="movie">
        <h4>{{gymname}}</h4>
        <p>Issued Date: {{ formatedisdate }}</p>
        <p>Expiry Date: {{ formattedexdate }}</p>

      </div>
    </div>

    <div class="ticket-details">
      <div class="ticket">
        <h6>BOOKING ID: {{id}}</h6>
      </div>
    </div>

    <div class="info-cancel">
      Cancellation not available
    </div>

    <div class="total-amount">
      <p>Total Amount</p>
      <p>Rs. {{price}}</p>
    </div>
  </div><!---m-ticket end---->
  
</div><!---container end---->

<a href="/users" class="button">back to home</a>

</body>
</html>