<?php 
    $page = \Cms::getMeta();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $page['title'] ?></title>
        <meta name="description" content=" <?php echo $page['desc'] ?> ">
        <meta name="keywords" content="<?php echo $page['keyword'] ?>">
        
        <link rel="shortcut icon" href="<?php echo \Yii::app()->theme->baseUrl ?>/img/favicon.png"/>
        <link rel="stylesheet" href="<?php echo \Yii::app()->theme->baseUrl ?>/assets/css/common.css"/>


    </head>
    
<?php if(strstr(\Yii::app()->request->serverName, 'cheapticket')){?>
    <body id="app">
<?php } else if(strstr(\Yii::app()->request->serverName, 'airtickets')){ ?>
    <body id="app" class="AirticketIndia">
<?php } ?>
    
        <main>
            <header>
                <div class="ui large fixed top menu">
                    <div class="header item"></div>
                    <a class="active item flights" href="/b2c/flights/search">Flights</a>
                    <!--            <a class="item hotels">Hotels</a>-->
                    <!--            <a class="item bus">Bus</a>-->
                </div>
            </header>

            <div >
                <?php echo $content; ?>
            </div>
            <footer style="display:none">
                <div class="ui bootom aligned vertical footer segment" style="  background-color: rgb(232, 231, 231);">
                    <div class="ui four column center aligned stackable grid">
                         
                         
                        <div class="top aligned column">
                            <h4 >Quick Links</h4>
                          <div class="ui link list ">
                                     <a class="item" href="/b2c/cms/view/5" target="_blank">About Us</a>
                                     <a class="item" href="/b2c/cms/view/1" target="_blank">Contact Us</a>
                                     <a class="item" href="/b2c/cms/view/2" target="_blank">Terms of Service</a>
                                     <a class="item" href="/b2c/cms/view/4" target="_blank">Privacy Policy</a>
                                     <a class="item" href="/b2c/cms/visa/14" target="_blank">Visa</a> 
                         
                               
                            </div>
                        
                        </div>
                        <div class="top aligned column">
                           <h4>Accredited by</h4>
                                <img src="/themes/B2C/dev/img/iata_blue.png" alt="">
                        </div>
                        <div class="top aligned column">
                           <h4>Payment Options</h4>
                                <img src="/themes/B2C/dev/img/cardTypes.png" alt=""><br>
                                Internet Banking
                        </div>
                        
                    </div>
                </div>

            </footer>
        </main>

        <div id="popup-container">

        </div>

    </body>
</html>