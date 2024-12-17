<?php

    $title = "Events| Peer Point"; //title for header

   //include header which uses title
   include_once("../inc/header.php");

   //include left-side menu 
   include_once("../inc/menu.php");

   //including navigation header
   include_once("../inc/nav.php");

   //include mobile device styling
   include_once("../inc/mobile.php");

?>
        <div class="calender-area mg-b-15" id="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    //include footer
     include_once("../inc/footer.php");
?>