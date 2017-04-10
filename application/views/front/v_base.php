<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" itemprop="description" content="">

    <meta name="author" content="WIX">

    <title>Kosher Culinary Travel</title>
    <link rel="shortcut icon" href="./img/ico.jpg">

    <meta itemprop="name" content="">

    <meta name="google-site-verification" content="b3Z7seDpsg-x0lbfzqT_L4ZMUMlwTii5dQ0xmZTkASA"/>

    <!-- <meta itemprop="image" content="https://cdn.okezone.com/www/2016/img/OKZ3.gif">
    <meta itemprop="thumbnailUrl" content="https://cdn.okezone.com/www/2016/img/OKZ3.gif"/> -->

    <meta http-equiv="Content-Language" content="id"/>
    <meta name="googlebot-news" content="index,follow"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="all"/>


    <link rel="publisher" href="https://plus.google.com/106765133760162647043">
    <link rel="author" href="https://plus.google.com/106765133760162647043">
    <link rel="image_src" href="https://cdn.okezone.com/www/2016/img/OKZ3.gif"/>

    <!-- styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/pace.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</head>
<body>
<?php
$json = file_get_contents(base_url()."public/contact.json");
$contact = json_decode($json);
?>
<nav>
    <div class="container-fluid container-fluid-header">

        <div class="container-kosher container-header">
            <div class="container-header1">
                <div class="logohead-kosher"><a href="#"></a></div>
            </div>
            <div class="container-header2">
                <div class="contacthead-kosher">
                    <p><span>P.</span> <?php echo $contact->contact->phone ?></p>
                    <p><span>E.</span> <?php echo $contact->contact->email ?></p>
                </div>

                <div class="navhead-kosher navhead-kosher-desktop">
                    <ul>
                        <li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
                        <li><a href="<?php echo base_url();?>aboutus">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="dropdown">
                            <a href="./product.html" class="dropbtn">Product Offering</a>
                            <div class="dropdown-content">
                              <a href="#">Tuscan Truffle Hunt Tour</a>
                              <a href="#">Greece Truffle Hunt Tour</a>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url();?>travelservice">Travel Services</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="navhead-kosher navhead-kosher-ipad">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Product Offering</a>
                        <div class="dropdown-content">
                          <a href="#">Tuscan Truffle Hunt Tour</a>
                          <a href="#">Greece Truffle Hunt Tour</a>
                        </div>
                    </li>
                    <li><a href="#">Travel Services</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

        </div>

    </div>
</nav><!-- container-header -->

<?php echo $content; ?>

   <div class="container-fluid container-fluid-bodyfoot p-nol">
      <div class="container-kosher-thumb">
         <div class="body-home-footersec">
             <div class="body-cont-footersec">
                 <p><a href="#">Contact Us</a></p>
             </div>
             <div class="body-cont-footersec">
                 <p><a href="#">have a question or comment? </a></p>
             </div>
         </div>
      </div>
   </div>
<footer class="container-fluid container-fluid-footer p-nol">
        <div class="container-kosher-thumb">
           <div class="cont-body-footer">
             <div class="iscont-body-footer1">
               <div class="list-cont-footer">
                   <p><span>E.</span> <?php echo $contact->contact->email ?></p>
                   <p><span>M.</span> <?php echo $contact->contact->mobile ?></p>
                   <p><span>P.</span> <?php echo $contact->contact->phone ?></p>
               </div>

               <div class="list-sosmed-footer">
                   <p><a href="<?php echo $contact->contact->facebook ?>" class="fb-kosher"></a></p>
                   <p><a href="<?php echo $contact->contact->instagram ?>" class="ig-kosher"></a></p>
               </div>
              </div>

              <div class="iscont-body-footer2">
                  <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Product Offering</a></li>
                      <li><a href="#">Travel Services</a></li>
                      <li><a href="#">Destinations</a></li>
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">Gallery</a></li>
                  </ul>
              </div>

              <div class="iscont-body-footer3">
                  <form method="" id="formmessage">
                        <div class="form-foot2" id="resultmessage"> </div>
                        <div class="form-foot1">
                           <input name="from" id="from" class="form-control form-control-footer" placeholder="Name" type="text" required>
                           <input name="email" id="email" class="form-control form-control-footer" placeholder="Email" type="email" required>
                           <input name="phone" id="phone" class="form-control form-control-footer" placeholder="Phone" type="text" required>
                           <input name="subject" id="subject" class="form-control form-control-footer" placeholder="Subject" type="text" required>
                       </div>
                       <div class="form-foot1">
                           <textarea class="form-control form-control-footer" type="textarea" id="body" name="body" placeholder="Message" maxlength="140" rows="8" required></textarea>
                        </div>
                        <button id="submit" class="btn btn-subform">Submit</button>
                  </form>
              </div>

              <div class="clearfix"></div>

                    <p>© Kosher Culinary Travel. All Rights Reserved <?php echo date("Y");?>.</p>
          </div>
       </div>
 <script>
 $(document).ready(function(){
    $("#submit").click(function(){
       var from = $("#from").val();
       var email = $("#email").val();
       var phone = $("#phone").val();
       var subject = $("#subject").val();
       var body = $("#body").val();
       var BASE_URL = "<?php echo base_url();?>";
       // Returns successful data submission message when the entered information is stored in database.
       var dataString = 'from='+ from + '&email='+ email + '&phone='+ phone + '&subject='+ subject + '&body='+ body;
       if(from==''||email==''||phone==''||subject==''||body=='')
       {
       alert("Please Fill All Fields");
       }
       else
       {
          $.ajax({
             type: "POST",
             url: BASE_URL+"home/newmessage",
             data: dataString,
             cache: false,
             success: function(result){
                $("#formmessage")[0].reset();
                document.getElementById("resultmessage").innerHTML="Successfully submitted";
               //  alert("result");
             }
         });
      }
    return false;
    });
 });
 </script>
    </footer>
