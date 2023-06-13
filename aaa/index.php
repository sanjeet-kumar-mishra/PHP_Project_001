<style>
    body {
        background-image: url("ll.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        /* You can add additional background properties as needed */
      }
      /* CSS styling for the form */
      form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
      }
      input[type="text"], input[type="email"], input[type="tel"], input[type="number"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      input[type="submit"] {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
<form method="GET" action="pay.php">
    <input type="text" name="name" Placeholder="Name"><br>
    <input type="number" name="phone" Placeholder="Phone Number"><br>
    <input type="email" name="email" Placeholder="Enter Email Address"><br>
    <input type="number" name="total" Placeholder="Enter Amount"><br>
    <input type="date" name="uid" Placeholder="Date"><br>
    <input type="text" name="tid" Placeholder="DR NAME"><br>
    <button  type="submit"  style="background-color: blue; color: white; border: none; padding: 10px 20px; border-radius: 5px;" >Pay</button>
</form>