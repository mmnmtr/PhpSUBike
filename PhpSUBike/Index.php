<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home DataSuGb</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        body{
          font-family: 'Kanit', sans-serif;
            color: #398a6a;
            background-color: #f9f8f5;
        }
        header{
          width: 100%;
          height: 80px;
          background-color: #398a6a;
          color: #f9f8f5;
          font-family: 'Nunito', sans-serif;
        }
        .navbar {
          padding: 0;
        }
        .navbar-nav {
          margin-top: 10px;
        }
        .bg-site{
          background-color: #398a6a00;
          width: 100%;
          padding-top: 10px; 
        }
        .navbar-light .navbar-brand {
          font-size: 2.25em;
          color: #f9f8f5;
          font-weight: bolder;
        }
        .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
          color: #398a6a;
        }
        .bg-light {
            background-color: #f9f8f5!important;
        }
        .server{
          height: auto;
          margin-top: -10px;
        }
        .server label{
          padding-top: 10px;
        }
        .server-btn{
          margin-left: 20px;
          float: right;
        }
        .btn-log{
          width: 140px;
          height: 40px;
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          float: left;
        }
        .nav-link {
          display: block;
          padding: 0;
        }
        .navbar-light .navbar-nav .nav-link{
          color: #f9f8f5;
        }
        .headimg{
          width: 100%;
          height: auto;
          float: left;
        }
        .headimg img{
          width: 100%;
          height: auto;
          float: left;
        }
        /* =============== จบheader ===============  */
        .database{
          color: #398a6a;
          float: left;
          width: 100%;
        }
        .database-title{
          width: 100%;
          height: auto;
          color: #398a6a;
          margin-top: 100px;
          text-align: center;
          float: left;
        }
        .database-title h1{
          font-size: 2.8em;
          letter-spacing: 3px;
          font-weight: 800;
          text-shadow: 1px 0 #398a6a, 0 1px #398a6a, 1px 0 black, 0 1px #398a6a;
          font-family: 'Nunito', sans-serif;
        }
        .database-title h4{
          margin-top: 20px;
          padding-bottom: 40px;
        }
        .menu{
          width: 162px;
          height: auto;
          float: left;
          margin: 0 15px 0 15px;
        }
        .btn-menu{
          width: 162px;
          height: 65px;
          border-color: #398a6a;
          background-color: #f9f8f5;
          color: #398a6a;
          border-radius: 10px;
          margin-top: 10px;
          float: left;
          font-size: 1.1rem;
          padding: 1.1rem 0.75rem;
        }
        .btn-menu.active{
          
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          float: left;
        }
        .btn-menu:hover{
          
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          float: left;
        }
        
        /* =============== จบicon + logo ===============  */
        
        .line2{
            width: 100%;
            height: 10px;
            margin-top: 60px;
            background-color: #398a6a;
            border-radius: 50px;
            float: left;
        }
        
        /* =============== จบตาราง ===============  */
        footer{
          width: 100%;
          height: 70px;
          background-color: #398a6a;
          margin-top: 90px;
          float: left;
        }
        footer h5{
          text-align: center;
          color: #f9f8f5;
          margin-top: 30px;
          font-family: 'Nunito', sans-serif;
        }
        /* =============== จบหัวfooter ===============  */
        
    </style>

</head>
<body>

      <header>
        <div class="container">
          <div class="row">
            
            <nav class="navbar navbar-light bg-site">
              <a class="navbar-brand" href="index.php">DATASUGB</a> 
              <ul class="nav navbar-nav pull-right">
                <div class="server">
                  <label class="server-status">YOU ARE LOGGED IN AS :  </label>
                  <label class="server-status"> ADMIN </label>
                  <span class="server-btn" >
                    <button class="nav-item btn btn-log">
                      <a class="nav-link" href="#">LOGOUT</a>
                    </button>
                  </span>
                </div>
              </ul>
            </nav>
          </div>
        </div>

        <div class="headimg">
          <img src="https://sv1.picz.in.th/images/2018/11/24/3sTXr9.png" alt="3sTXr9.png"/>
        </div>
      </header>

      <!-- /* =============== จบheader ===============  */ -->

      <article class="database">
        <div class="container">
          <div class="row">

            <div class="col col-12 text-center database-title">
              <blockquote class="blockquote">
                <h1 class="mb-0"> DATASUGB </h1>
                <h4 class="mb-0"> ระบบฐานข้อมูลยืม-คืนจักรยาน มหาวิทยาลัยศิลปากรวิทยาเขตสารสนเทศเพชรบุรี</h4>
              </blockquote>
            </div>

            <div class="d-block mx-auto">
              <div class="menu">
                <a href="registerMember.php" class="target btn btn-menu ">เพิ่มสมาชิก</a>
              </div>
              <div class="menu">
                <a href="registerBike.php" class="target btn btn-menu">เพิ่มจักรยาน</a>
              </div>
              <div class="menu">
                <a href="MemberCard.php" class="target btn btn-menu ">บัตรสมาชิก</a>
              </div>
              <div class="menu">
                <a href="Station.php" class="target btn btn-menu ">สถานีจักรยาน</a>
              </div>
              <div class="menu">
                <a href="Faculty.php" class="target btn btn-menu ">ข้อมูลคณะ</a>
              </div>
            </div>

            
          </div>
        </div>
      </article>
      <!-- /* =============== จบcontent ===============  */ -->

      

      
      <footer>
        <h5>DATABASE SYSTEM : SILPAKORN GREEN BIKE</h5>

      </footer>
     
</body>
</html>