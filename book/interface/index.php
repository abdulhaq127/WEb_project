<?php
require_once("headfootsidetop/Header.php");
?>
<head>
     <script type="text/javascript">
       function extra_info(str)
       {
        var xhp = new XMLHttpRequest();
        xhp.onreadystatechange = function()
        {
            if(this.readystate == 4 && this.status == 200)
            {
                document.getElementById("extr").innerHTML = this.resposeText;
            }
        }
        xhp.open("GET","extra_information.php?q="+ str, true);
        xhp.send(null);
       } 
    </script>

</head>


<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <?php
            require_once("headfootsidetop/TopBar.php");
        ?>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <?php
            require_once("headfootsidetop/Sidebar.php");
        ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            

            <div>
                <!-- <ul class="breadcrumb">
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul> -->
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-star-empty"></i> Contents</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <!-- put your content here -->
                            <img src="img/a.jpg" style="width: 100%;height: 600px;" class="thumbnail">

                             <!-- <?php 
                              //require_once("bookdetail.php");
                              ?> -->


<div id="extr">if you wont to information about this system click button</div>
<button id="btn" onclick="extra_info()">More Information</button>



















   <?php 
    require_once("headfootsidetop/footer.php");
    ?>

<?php
require_once("headfootsidetop/Js.php");
?>


</body>
</html>
