<?php 
 
session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FUTO Ambulance</title>
  <style>
    /* General Styles */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    /* Header */
    .header {
      background: linear-gradient(90deg, #ff4c4c, #ff2e2e);
      color: #fff;
      padding: 1rem 0;
      text-align: center;
    }

    .header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    .header p {
      font-size: 1.2rem;
    }

    /* Main Section */
    .main {
      padding: 2rem 0;
    }

    .main h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 2rem;
      color: #ff4c4c;
    }

    .ambulance-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .ambulance-card {
      background: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .ambulance-card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      border-color: #ff4c4c;
    }

    .ambulance-card h3 {
      margin-bottom: 0.5rem;
      color: #ff4c4c;
    }

    .ambulance-card p {
      margin: 0.5rem 0;
      color: #555;
    }

    .ambulance-card a {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
      margin-top: 1rem;
      display: inline-block;
    }

    .ambulance-card a:hover {
      text-decoration: underline;
    }

    /* Footer */
    .footer {
      background: #333;
      color: #fff;
      text-align: center;
      padding: 1rem 0;
      margin-top: 2rem;
    }

    .footer p {
      margin: 0;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <header class="header">
    <Span>Welcome <b><?php echo $_SESSION['fullname'];  ?></b> to</Span>
    <span><a href="logout.php">Logout</a></span>
    <div class="container">
      <h1>FUTO Ambulance</h1>
      <p>Your safety is our priority. Find ambulances available near you.</p>
    </div>
  </header>

  <main class="main">
    <div class="container">
      <h2>Available Ambulances</h2>
      <div class="ambulance-list">
        <div class="ambulance-card">
          <h3>Ambulance 1</h3>
          <p>Location: FUTO Gate</p>
          <p>Status: Available</p>
          <a href="ambulance1.html">View Details</a>
        </div>
        <div class="ambulance-card">
          <h3>Ambulance 2</h3>
          <p>Location: School of Engineering</p>
          <p>Status: In Transit</p>
        </div>
        <div class="ambulance-card">
          <h3>Ambulance 3</h3>
          <p>Location: Medical Center</p>
          <p>Status: Available</p>
        </div>
        <div class="ambulance-card">
          <h3>Ambulance 4</h3>
          <p>Location: Hostel Area</p>
          <p>Status: Under Maintenance</p>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 FUTO Ambulance. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
