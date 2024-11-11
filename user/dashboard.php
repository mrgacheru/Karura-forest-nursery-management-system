<?php
session_start();
if(!isset($_SESSION["user"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<?php
include "connection.php";
include "header.php";
?>



<div id="content">
    <!--breadcrumbs-->
    
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid" style="background-color:white;">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;margin-left:280px;margin-top:90px;">
        <div id="content-header">
        <div id="breadcrumb" style="color:red;"><i class="icon-home"></i>
                <h1>Welcome To Dashboard </h1></div>
    </div>
            <div class="card" style="width: 18rem; border-style:solid; border-width: 1px; border-radius:10px; float:left">
                <div class="card-body">
                    <h3 class="card-title text-center" style="text-align:center;">No Of Products</h3>
                    <h1 class="card-text text-center" style="text-align:center;">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from products");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br>
                </div>


            </div>

            <div class="card" style="width: 18rem; border-style:solid; border-width: 1px; border-radius:10px; float:left; margin-left: 5px;">
                <div class="card-body">
                    <h3 class="card-title text-center" style="text-align:center;">Total Orders</h3>
                    <h1 class="card-text text-center"style="text-align:center;">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from billing_header");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br>
                </div>
            </div>

            <div class="card" style="width: 18rem; border-style:solid; border-width: 1px; border-radius:10px; float:left; margin-left: 5px;">
                <div class="card-body">
                    <h3 class="card-title text-center"style="text-align:center;">Total Company</h3>
                    <h1 class="card-text text-center" style="text-align:center;">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from company_name");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br>
                </div>
            </div>
           
        </div>

    </div>
</div>

<?php
include "footer.php";
?>