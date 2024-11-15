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
include "header.php";
include "connection.php";
?>
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Stock Master</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid" >
            <div class="row-fluid" style="background-color: white; margin-right:150px;min-height: 1000px; padding:10px;margin-left:350px;margin-top:70px;font-size:11px;">
                <h1>Available Stock</h1>
                <div class="span12">

                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Nursery name</th>
                                <th>Item name</th>
                                <th>Item unit</th>
                                <th>Item Qty</th>
                                <th>Product Selling Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count=0;
                            $res = mysqli_query($link, "select * from stock_master");
                            while ($row = mysqli_fetch_array($res)) {
                                $count=$count+1;
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row["product_company"]; ?></td>
                                    <td><?php echo $row["product_name"]; ?></td>
                                    <td><?php echo $row["product_unit"]; ?></td>
                                    <td><?php echo $row["product_qty"]; ?></td>
                                    <td><?php echo $row["product_selling_price"]; ?></td>


                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>


    </div>




<?php
include "footer.php";
?>