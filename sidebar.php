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
                  <li>
                        <span class="material-symbols-outlined">settings</span>
                        <a href="#">Settings</a>
                  </li>
                  <hr>
                  <li class="logout-link">
                        <span class="material-symbols-outlined">logout</span>
                        <a href="#">Logout</a>
                  </li>
            </ul>
      </aside>
      <main class="ease-soft-in-out xl:ml-68.5 relative rounded-xl transition-all duration-200">
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                  <nav>
                  <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="leading-normal text-sm">
                        <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
                  </ol>
                  <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
                  </nav>

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                  <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                              <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-search"></i>
                              </span>
                              <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                        </div>
                  </div>
            </div>
            </div>
      </nav>
      </main>
</body>
</html>