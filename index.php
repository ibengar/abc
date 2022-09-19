<?php
/**
 * Name:   Axis Auth
 * Author:  Muhammad Quellin
 * FB: https://www.facebook.com/LyCoXyz
 * Created: 10/02/2022
 *
 */
class AxisNET
{
    function cHeader($url,$request,$auth)
    {
        $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://trxpackages.api.axis.co.id/claimmccm/v3');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /method/v4 HTTP/1.1';
$headers[] = 'x-app-version: 7.12.1';
$headers[] = 'Authorization: f2557e5f-e2bd-4ce7-8fb6-7f122273efa8';
$headers[] = 'x-dynatrace: MT_3_2_1922202733_16-0_641ab02d-142a-43c1-a070-345eb704eb64_55_11864_160';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Content-Length: 56';
$headers[] = 'Host: trxpayments.api.axis.co.id';
$headers[] = 'Connection: Keep-Alive';
$headers[] = 'Accept-Encoding: gzip';
$headers[] = 'User-Agent: okhttp/4.2.2';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
curl_close($ch);
echo $curl;
        #sleep(1);
        flush();
        return $server_output;
    }
    function BuyPackage($auth, $pkgid)
    {
        $query = array(
            "service_type" => "PACKAGE",
            "service_id" => "".$pkgid.""
        );
        $request = base64_encode(json_encode($query));
        return $this->cHeader("https://trxpackages.api.axis.co.id/package/batch/v2",$request,$auth);
    }
}

$respon = "";
if(isset($_POST["buy"]))
  {
    $axis = new AxisNET;
    $auth = $_POST["auth"];
    $pkgid_paid = $_POST["pkgid"];
    $execute = $axis->BuyPackage($auth, $pkgid_paid);
    $respon = $execute;
  }

?>
<html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">          
        <meta name="author" content="TTdownloader.com">
            <meta name="robots" content="index, follow">   
    <link rel="apple-touch-icon" sizes="180x180" href="https://ttdownloader.com/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ttdownloader.com/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ttdownloader.com/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://ttdownloader.com/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="https://ttdownloader.com/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">   
        <link rel="canonical" href="https://ttdownloader.com/" />
    <link rel="alternate" href="https://ttdownloader.com/" hreflang="en" />
    <link rel="alternate" href="https://ttdownloader.com/fr/" hreflang="fr" />
    <link rel="alternate" href="https://ttdownloader.com/es/" hreflang="es" />
    <link rel="alternate" href="https://ttdownloader.com/de/" hreflang="de" />
    <link rel="alternate" href="https://ttdownloader.com/it/" hreflang="it" />
    <link rel="alternate" href="https://ttdownloader.com/" hreflang="x-default" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//use.fontawesome.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//ssl.google-analytics.com">
    <!-- Open Graph data -->
    <meta itemprop="image" content="https://ttdownloader.com/assets/img/favicons/og-image.jpg" />       
        <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://ttdownloader.com/"/>
    <meta property="og:image" content="https://ttdownloader.com/assets/img/favicons/og-image.jpg"/>
    <meta property="og:image:width" content="279"/>
    <meta property="og:image:height" content="279"/>
    <meta property="og:site_name" content="TTdownloader.com"/>
    <!-- Custom styles for this template -->
    <link href="https://ttdownloader.com/assets/css/style.css?8" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700, 800, 900" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->                                                                               
                   <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav nav-list fr">
                 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle box-shadow" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> English&nbsp;&nbsp;<span class="fa fa-chevron-down"></span></a>
                                <ul class="dropdown-menu remove-style">
                                    <li><a  href="https://ttdownloader.com/en/"><span class="fa fa-check"></span>English</a></li>
                                    <li><a class="no-span" href="https://ttdownloader.com/fr/">Français</a></li>
                                    <li><a class="no-span" href="https://ttdownloader.com/it/">Italiano</a></li>
                                    <li><a class="no-span" href="https://ttdownloader.com/de/">Deutsch</a></li>
                                    <li><a class="no-span" href="https://ttdownloader.com/es/">Español</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
        </div>
    </div>
</header>
<section class="text-center primary-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

               <div class="wow scaleIn" data-wow-duration="0ms" data-wow-delay="0ms">

    <center>
    <p><p>
    <img src="https://axis.co.id/assets/ico/apple-touch-icon.png" width="150" height="140"/>
  	</center>

              </div>
      
    <h1 class="title">TEMBAK AXIS</h1> 
    <hr/>
    <div class="form-group">
    
    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
            <div class="Login" style="display: block;"> 
    
    
    <i style="color:yellow" class="fa fa-user-secret"> Sukma Wijaya </i> | <i style="color:aqua" class="fa fa-share-alt-square">Injections West Java</i>
 
                       
            <hr/>
    <div class="form-group">   
    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
            <div class="Login" style="display: block;"> 
	          
            
              <label>MASUKAN AUTH </label>
            <input class="form-control" type="text" name="auth" value="<?php echo isset($_POST['auth']) ? $_POST['auth'] : ''; ?>" placeholder="fabb2d47-xxxxxx-xxxxxx-xxxxx-xxxxx-xxxx" required><br>
            
            </div>
            
<select name="pkgid" style="width: 300px;">
<option value="">--- PILIH PAKET ---</option>
<option value="3215620">BOOSTR EDUKASI 15GB 7Hari Rp8900</option>
<option value="3215619">BOOSTR EDUKASI 5GB 7Hari Rp2900</option>
<option value="3213038">Paket Nonton Vision+ 1GB 7Hari Rp1000</option>
<option value="3213808">BRONET Mini 5GB 7Hari</option>
<option value="3213756">KUOTA VIDEO 1GB 14Hari</option>
<option value="3212861">KUOTA GAMES 512MB 7Hari</option>
</select>
     </div>
	 <button type="submit" class="btn btn-info" name="buy">TEMBAK</button> 
	 
       	  	  		                 
<hr/>
    <div class="form-group">   
    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
            <div class="Login" style="display: block;">
                       
 
                         
            </form>
             <textarea class="form-control input-sm" type="textarea" placeholder="Pesan" maxlength="150" rows="3" style="text-align: center;" readonly><?php echo $respon; ?></textarea>
<center>

<hr/>
    <div class="form-group">   
    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
            <div class="Login" style="display: block;">
            
  
              

    <style>
      a {
        display: block;
        background: orange;
        padding: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <a href="https://tools.tutorialinjectid.my.id/auth-axis/">
      <div>
     <label>KLIK DI SINI UNTUK AMBIL AUTH </label>
      </div>
    </a>
  					                     					


 <hr/>
    <div class="form-group">   
    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
            <div class="Login" style="display: block;">       					
                       					                     					             


                                 