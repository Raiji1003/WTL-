<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booking</title>
    <style>
        body {
        background-image: url('building image.jpeg');
        background-size: cover;
        height: 600px;
      }
    </style>
</head>
<body>
    <header>
        <div id="navbar">
            <img src="logo.png" style="padding-top: 7px; padding-left: 20px; height: 35px; width: 60px;">
           <a id="logo">Vtravellers.in</a>
        </div>
    </header>
        <form action="#">
        <div>
        <p>Your Name</p>
        <input type="text" placeholder="Your Name" required>
        </div>
        <div>
        <p>Your email</p>
        <input type="email" placeholder="Your email"required>
        </div>
        <div>
        <p>Date</p>
        <input type="date">
        </div>
        <div>
        <p>Time</p>
        <input type="time">
        </div>
        <div>
        <p>How many people?</p>
        <select name="select" id="#">
        <option value="1">1 person </option>
        <option value="2">2 persons</option>
        <option value="3">3 persosn</option>
        <option value="4">4 persons</option>
        <option value="5">5 persons</option>
        <option value="5+">5+ persons</option>
        </select>
        </div>
        <button>Submit</button>
        <footer>Made with &hearts;by Vtravellers<br>
            &#169; 2024-&infintie;
        </footer>
</body>
</html>