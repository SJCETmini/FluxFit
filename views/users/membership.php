<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Membership Details</title>
<style>
  :root {
    --clr-primary: hsl(230, 73%, 5%);
    --clr-secondary: hsl(191, 92%, 14%);
  
    --clr-accent-500: hsl(169, 88%, 75%);
    --clr-accent-300: hsl(169, 70%, 85%);
  
    --clr-white: hsl(240, 0%, 100%);
    --clr-dark: hsl(230, 0%, 0%);
  }

  body {
    background-color: var(--clr-secondary);
    color: var(--clr-white);
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .membership-details {
    max-width: 500px;
    padding: 40px;
    border: 2px solid var(--clr-primary);
    border-radius: 10px;
    background-color: var(--clr-primary);
  }

  .membership-details h2 {
    color: var(--clr-accent-500);
    margin-top: 0;
  }

  .membership-details p {
    color: var(--clr-white);
    margin-bottom: 20px;
  }

  .line-through {
    text-decoration: line-through;
  }

  .pay-now-btn {
    background-color: var(--clr-accent-500);
    color: var(--clr-dark);
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .pay-now-btn:hover {
    background-color: var(--clr-accent-300);
  }
</style>
</head>
<body>

<div class="membership-details">
  <h2>Membership Details</h2>

  <?php

  include '../../config.php';
  $uid = $_COOKIE['user_id'];
  $gym_id = $_GET['id'];

  $sql = "SELECT * FROM gyms WHERE id='$gym_id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $gym_details= $row;
    
  }


  $sql = "SELECT * FROM memberships WHERE gym_id='$gym_id' AND uid='$uid'";
  $result = mysqli_query($conn, $sql);
  $membership=false;

  if ($result) {

    if (mysqli_num_rows($result) > 0){
      $membership=true;
    }
    
  }

  

  
  if($membership==true){
    print("<p>Membership Status: Member</p>");
    $total_amount=$gym_details['monthly_fee'];
  }else{
    print("<p>Membership Status:Not a Member</p>");
    $total_amount=$gym_details['membership_fee']+$gym_details['monthly_fee'];
  }
?>
  <ul>
    <li>Amount to be Paid:
      <ul>
        <?php
        if($membership==true){
          print('<li>Membership Fee: <span id="membership-fee">not applicable</span></li>');
        }else{
  
        print('<li>Membership Fee: <span id="membership-fee">Rs '.$gym_details['membership_fee'].'</span></li>');
        }
   ?>
        <li>Monthly Fee: Rs <?php print($gym_details['monthly_fee']) ?></li>
      </ul>
    </li>
  </ul>
  <hr>
  <p>Total Amount to be Paid: <span id="total-amount">Rs <?php print($total_amount) ?></span></p>
  <form action="userReg.php" method="post">
  <input type="hidden" name="gym_id" value="<?php echo htmlspecialchars($gym_id); ?>">
  <button id="bookNowBtn" class="bookNowBtn" type="submit" name="payment">Pay Now</button>
  </form>
</div>


<script>
    document.getElementById("bookNowBtn").addEventListener("click", function() {
        // Get the gym name from the script tag directly
        const gymName = "<?php print($gym_details['name']) ?>"; // Accessing the gym name from Handlebars

        // Get other details similarly
        const Fee = <?php print($gym_details['monthly_fee']) ?>
        const gymid="<?php print($gym_details['id']) ?>"

        // Create an object with the details
        const bookingDetails = {
            gymName: gymName,
            Fee: Fee,
            gymid:gymid
            // Add more details here if needed
        };

        // Send the details to the server
        fetch('/users/member/stripe-checkout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(bookingDetails)
        })
        .then(response => response.json())
        .then(data => {
            // Redirect to the URL received from the server
            window.location.href = data.url;
        })
        .catch(error => {
            // Handle errors if any
            console.error('Error:', error);
        });
    });
</script>

</body>
</html>
