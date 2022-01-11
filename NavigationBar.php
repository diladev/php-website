<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="navStyle.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-user'></i>
      <span class="logo_name">Admin</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bxs-book-add' ></i>
          <span class="link_name">Add course</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Add course</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-task'></i>
          <span class="link_name">Absent Sheet</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Absent Sheet</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-user-plus'></i>
          <span class="link_name">Add user</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Add user</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-user-check' ></i>
          <span class="link_name">Take Attendence</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Take Attendence</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-home'></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
      <li>
        <li>
          <a href="#">
            <i class='bx bx-log-out' ></i>
            <span class="link_name">Logout</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Logout</a></li>
          </ul>
        </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Admin Page
      </span>
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
