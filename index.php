

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login AXIS</title>
<script src="assets/jquery-3.6.0.min.js"></script>

<link href="assets/bootstrap.css" rel="stylesheet">
<link href="assets/font-awesome.css" rel="stylesheet">
<link href="assets/animate.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">
<link href="assets/checkbox.css" rel="stylesheet">
<!-- Favicons -->
<link rel="icon" type="image/png" sizes="16x16" href="https://axis.co.id/assets/img/brand/logo_axis_purple.svg">

<style type="text/css">
#wrapshopcart {  width:430px; margin:10em auto; padding:auto; background:#fff; border-radius:10px; }
#response { text-align: center; }
#EE{ width: 50%;}
textarea { resize:none; }
#count { text-align: right; }
.header{
  background-image: url("assets/img/bg/bg-head-home.png");
  height:70px;
  padding:10px;
}
a.logo-home{
  background-image: url("assets/img/logo-home.png");
  height:60px;
  width:120px;
  display:inline-block;
  background-size:100%
}
.welcome-intro{
    margin:0 0 0;
    max-width:100%
}
</style>

</head><body class="white-bg">
  
  <div class="header">    
    <div class="container">

      <a href="/" class="logo-home"></a>
      <a href="https://www.facebook.com/LyCoXyZ/" class="pull-right"> <h4>Muhammad Queliin</h4></a>
    </div>

    <div id="wrapshopcart">
      <div class="wrapper animated fadeIn">
            <div class="col-md-12">
                <div class="form">
                    <div class="passwordBox">
                        <div class="ibox-content">

                        <!--<div align="center">
                            <img src="assets/img/components/welcome-intro.png" class="welcome-intro">
                          </div>
                        -->

                          <div class="form-group">

                            <form action="/index.php" method="post">
                            <div class="login" style="display: block;">

                            <br/>                   
                            
                            <div>
                              <center><span style="color: purple"><label>Masukkan Nomor Axis:</label></span><center>
                              </div>     

                              <br/>

                            <input class="form-control" type="text" name="nomor" value="" placeholder="Contoh: 08xxxx" required><br>
                           
                            <div>
                              <center>
                                <button type="submit" class="btn btn-md btn-info btn-block" data-somestringvalue-text="loading" autocomplete="off" name="SendOTP">Request OTP</button>
                                <center></div>    

                                <br/>

                                <div>
                                  <center>
                                    <span style="color: red"><h4></h4></span>
                                 <center></div>      

                            </div>
                          </div>
                        </div>			
                      </div>
                    </div>
                  </div>
                </div>

          
	</body>
</html>