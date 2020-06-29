<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
        .about-site{
          float: left;
          width: 100%;
        }
        .about-img{
          width: 100%;
          height: auto;
          margin-top: 50px;
          float: left;
        }
        .about-img img{
          width: 100%;
          height: auto;
        }
        .about-text{
          width: 100%;
          height: auto;
          color: #398a6a;
          margin-top: 20px;
          text-align: center;
          float: left;
        }
        .about-text h4{
          font-weight: bolder;
        }
        .about-content{
          width: 100%;
          height: auto;
          color: #000000;
          margin-top: 20px;
          float: left;
        }
        .about-content h4{
          padding-bottom: 10px;
        }
        .btn-read{
          width: 185px;
          height: 40px;
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          margin-top: 20px;
          float: left;
        }
        .line{
          width: 100%;
          height: 10px;
          margin-top: 50px;
          background-color: #398a6a;
          border-radius: 50px;
          float: left;
        }
        /* =============== จบContent ===============  */
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
          width: 210px;
          height: auto;
          float: left;
          margin: 0 15px 0 15px;
        }
        .menu2{
          width: 185px;
          height: auto;
          float: left;
          margin: 0 15px 0 15px;
        }
        .btn-menu{
          width: 210px;
          height: 65px;
          border-color: #398a6a;
          background-color: #f9f8f5;
          color: #398a6a;
          border-radius: 10px;
          margin-top: 50px;
          float: left;
          font-size: 1.2rem;
          padding: 1.1rem 0.75rem;
          font-family: 'Nunito', sans-serif;
        }
        .btn-menu.active{
          width: 210px;
          height: 65px;
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          float: left;
        }
        .btn-menu:hover{
          width: 210px;
          height: 65px;
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          float: left;
        }
        /* =============== จบหัวdatabase ===============  */
        .insert-title{
          float: left;
          width: 100%;
        }
        .insert-img{
          width: 100%;
          height: auto;
          margin-top: 100px;
          float: left;
        }
        .insert-img img{
          width: 100%;
          height: auto;
        }
        .insert-text{
          width: 100%;
          height: auto;
          margin-top: 25px;
          text-align: center;
          float: left;
        }
        .insert-text h4{
          font-weight: bold;
          color: #398a6a;
          font-family: 'Nunito', sans-serif;
        }
        .insert-text h5{
          font-size: 1.3rem;
          color: #000000;

        }
        /* =============== จบicon + logo ===============  */
        
        .form-group{
          margin-top: 35px;
          width: 100%;
          float: left;
        }
        .form-control{
          height: 40px;
          color: #398a63;
          background-color: #f9f8f5;
          border: 1px solid #398a39;
          border-radius: 10px;
        }
        select {
          border-radius: 10px 10px 10px 10 px;
        }
        .btn-do{
          width: 185px;
          height: 40px;
          border-color: #398a6a;
          background-color: #398a6a;
          color: #f9f8f5;
          border-radius: 10px;
          margin-top: 50px;
          float: right;
          font-family: 'Nunito', sans-serif;
        }
        .btn-do:hover{
          color: #f9f8f5;
        }
        .line2{
            width: 100%;
            height: 10px;
            margin-top: 60px;
            background-color: #398a6a;
            border-radius: 50px;
            float: left;
        }
        form{
          width: 100%;
        }
        /* =============== จบInsert ===============  */
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
<?php   
  require_once('process.php');
  $mysqli->set_charset('utf8');
 
?>
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

      <article class="about-site">
        <div class="container">
          <div class="row">
            <div class="col col-12">
              <div class="col-6 col-md-2 offset-md-5 offset-3">
                <div class="about-img">
                  <img src="https://sv1.picz.in.th/images/2018/11/24/3stZTg.png" alt=""/>
                </div>
              </div>
            </div>

            <div class="col col-12">
              <div class="col-6 col-md-4 offset-md-4 offset-3">
                <div class="about-text">
                  <h4>รายละเอียด</h4>
                </div>
              </div>
            </div>

            <div class="col col-12 text-center about-content">
              <blockquote class="blockquote">
                <h4 class="mb-0"> "โครงการ Silpakorn Green Bike </h4>
                <h4 class="mb-0"> เกิดโดยความร่วมมือกันของงานสวัสดิการและกิจกรรมนักศึกษาและ</h4>
                <h4 class="mb-0"> สโมสรนักศึกษาในเบื้องต้นได้มีการ รณรงค์ไปบ้างแล้วโดยโครงการนี้คือการนำจักรยาน</h4>
                <h4 class="mb-0"> เก่าที่นักศึกษาเลิกใช้งานแล้วนำมาซ่อมเปลี่ยนอะไหล่ให้อยู่ในสภาพที่พร้อมใช้งาน
                <h4 class="mb-0"> จากนั้นนำจักรยานมาพ่นสีและประกอบใหม่"</h4>
               </blockquote>
            </div>

            <div class="d-block mx-auto">
                <a href="#" class="target btn btn-read">READ MORE</a>
            </div>

            <div class="col col-md-12" >
              <div class="row">
                <div class="line2"></div>
              </div>
            </div>

          </div>
        </div>
      </article>
      <!-- /* =============== จบcontent ===============  */ -->

      

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
                <a href="registerMember.php" class="active target btn btn-menu ">MEMBER</a>
              </div>
              <div class="menu">
                <a href="registerBike.php" class="target btn btn-menu">BICYCLE</a>
              </div>
            </div>
            <!-- /* =============== จบicon + logo ===============  */ -->

            <div class="insert-title">
              <div class="col col-12">
                <div class="col-6 col-md-1 mx-auto">
                  <div class="insert-img">
                      <img src="https://sv1.picz.in.th/images/2018/11/24/3s169t.png" alt="3s169t.png"/>
                  </div>
                </div>
              </div>
              <div class="col col-12">
                <div class="col-6 col-md-4 offset-md-4 offset-3">
                  <div class="insert-text">
                    <h4>INSERTMEMBER</h4>
                    <h5>เพิ่มข้อมูลสมาชิกผู้ยืมจักรยาน</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- /* =============== จบinsert-title ===============  */ -->
            
            <div class="container h-100">
            
              <div class="row align-items-center">
                <form action="process.php" method='POST'>

                <div class="row">
                   <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">รหัสประจำตัว</label>
                      <input type="text"  class="form-control" name="student_Id"  value="<?php echo $student_Id;?>" placeholder="">
                    </div>
                  </div>

                  <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">ชื่อ</label>
                      <input type="text"  name='student_FName' class="form-control" value="<?php echo $student_FName; ?>" placeholder="">
                    </div>
                  </div>

                  <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">นามสกุล</label>
                      <input type="text" name='student_LName'class="form-control" value="<?php echo $student_LName; ?>" placeholder="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">คณะ</label>
                      <select name="Faculty_Id" id="" class="form-control">
                        <option></option> 
                        <option value="<?php echo $Faculty_Id='F11'; ?>">คณะสัตวศาสตร์และเทคโนโลยีการเกษตร</option>
                        <option value="<?php echo $Faculty_Id='F12'; ?>">คณะวิทยาการจัดการ</option>
                        <option value="<?php echo $Faculty_Id='F13'; ?>">คณะเทคโนโลยีสารสนเทศและการสื่อสาร</option>
                      </select>
                    </div>
                  </div>
      
                  <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">ชั้นปี</label>
                      <select name="student_Grade" id="" class="form-control">                      
                        <option value="<?php echo $student_Grade=1; ?>">1</option>
                        <option value="<?php echo $student_Grade=2; ?>">2</option>
                        <option value="<?php echo $student_Grade=3; ?>">3</option>
                        <option value="<?php echo $student_Grade=4; ?>">4</option>
                      </select>
                    </div>
                  </div>

                  <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">เบอร์โทรศัพท์</label>
                      <input type="text" name='student_phone' class="form-control"  value="<?php echo $student_phone; ?>" placeholder="">
                    </div>
                  </div>
      
                 
                </div>

                <div class="row">
                   <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">รหัสหมายเลขบัตร</label>
                      <input type="text"  class="form-control" name="Card_ID"  value="<?php echo $Card_ID;?>" placeholder="">
                    </div>
                  </div>

                   <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">รหัสปลดล็อคจักรยาน</label>
                      <input type="text" name='Card_Password' class="form-control"  value="<?php echo $Card_Password; ?>" placeholder="">
                    </div>
                  </div>

                  <div class="col col-12 col-md-4">
                    <div class="form-group">
                      <label for="formGroupExampleInput">คะแนน</label>
                      <input type="text"  name='Card_Point' class="form-control" value="<?php echo $Card_Point=100; ?>" placeholder="100">
                    </div>
                  </div>

                   
                </div>

                </div>
    
                <div class="row justify-content-end">
                  <div class="menu2">
                    <a href="viewMember.php" class="target btn btn-do ">VIEW</a>
                  </div>

                  <div class="menu2">
                    <?php 
                      if ($update == true):
                    ?>
                    <button type='submit' name='update' class="btn btn-do form-control">UPDATE</button>
                    <?php else: ?>
                    <button type='submit' name='save' class="btn btn-do form-control">INSERT</button>
                    <?php endif; ?>
                  </div>
                </div>

                </form>
              </div>
            </div>

            <div class="line2"></div>

          </div>
        </div>
      </article>
      

      <footer>
        <h5>DATABASE SYSTEM : SILPAKORN GREEN BIKE</h5>

      </footer>
      <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script> 
</body>
</html>