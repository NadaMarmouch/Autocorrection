<?php

include("includes/admin_inc.php") ;

 ?>

 <!--  Admin page -->
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="assets/admin.css">
     
     <title></title>
   </head>
   <body>
    
     <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CORRECTA</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Admin Profile</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage Instructor's</span>
          </a>
        </li>
        <li>
          <a href="admin_student.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Student's</span>
          </a>
        </li>
        <li>
          <a href="Admin_courses.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Courses</span>
          </a>
        </li>
        <li>
          <a href="contact_admin.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>

     <table>
       <h3> Courses</h3>
       <thead>
         <tr>
           <td>ID</td>
           <td>Courses Name</td>
           <td>Description</td>
           <td>Faculty ID </td>
           
          
         </tr>
       </thead>

       <tbody>

         <?php foreach ($results_assoc2 as $row){ ?>
           <tr>
             <td><?php echo $row['id']; ?></td>
             <td>  <?php echo $row['coursename']; ?> </td>
             <td>  <?php echo $row['description']; ?> </td>
             <td>  <?php echo $row['faculty_id']; ?> </td>
             
           </tr>


   <?php } ?>
          
   </body>
 </html>