<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Page</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
      <link rel="stylesheet" href="./style/sidebar.css">
      <link rel="stylesheet" href="./style/Css.css">
</head>
<body>
      <aside class="sidebar">
      <div class="logo">
            <img src="images/logo.png" alt="logo">
            <h2>HealthCare</h2>
      </div>
            <ul class="links">
                  <h4>Main Menu</h4>
                  <li>
                        <span class="material-symbols-outlined">dashboard</span>
                        <a href="sidebar.php">Dashboard</a>
                  </li>
                        <h4>Appointments</h4>
                  <li>
                        <span class="material-symbols-outlined">book_online</span>
                        <a href="appointment.php">Appointments</a>
                  </li>
                  <hr>
                  <h4>Site Management</h4>
                  <li>
                        <span class="material-symbols-outlined">group</span>
                        <a href="users.php">Users</a>
                  </li>
                  <!-- <li>
                        <span class="material-symbols-outlined">settings</span>
                        <a href="#">Settings</a>
                  </li> -->
                  <hr>
                  <li class="logout-link">
                        <span class="material-symbols-outlined">logout</span>
                        <a href="home.php">Logout</a>
                  </li>
            </ul>
      </aside>
</body>
</html>