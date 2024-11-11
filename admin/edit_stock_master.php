<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container-fluid {
    padding: 20px;
}

.row-fluid {
    background-color: white;
    min-height: 1000px;
    padding: 10px;
}

/* Widget Box Styles */
.widget-box {
    background-color: #f4f4f4;
    margin-top: 10px;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.widget-title {
    background-color: #333;
    color: white;
    padding: 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    display: flex;
    align-items: center;
}

.widget-title .icon {
    margin-right: 10px;
}

.widget-content {
    background-color: white;
    padding: 20px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.form-horizontal .control-group {
    margin-bottom: 15px;
}

.form-horizontal .control-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.form-horizontal .control-group .controls input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.form-actions {
    text-align: center;
}

.form-actions .btn-success {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-actions .btn-success:hover {
    background-color: #4cae4c;
}

.alert {
    padding: 10px;
    margin-top: 20px;
    border-radius: 4px;
    text-align: center;
}

.alert-success {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #d6e9c6;
}

</style>

<?php
include "header.php";
include "../user/connection.php";
$id=$_GET["id"];
$product_company="";
$product_name="";
$product_unit="";
$product_qty="";
$product_selling_price="";

$res=mysqli_query($link,"select * from stock_master where id=$id");
while($row=mysqli_fetch_array($res))
{
    $product_company=$row["product_company"];
    $product_name=$row["product_name"];
    $product_unit=$row["product_unit"];
    $product_qty=$row["product_qty"];
    $product_selling_price=$row["product_selling_price"];

}
?>
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Edit Stocks Price</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid"7n>
            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;margin-left:350px;margin-top:45px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Edit Stocks Price</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Product Company:</label>

                                    <div class="controls">
                                        <input type="text" name="product_company" class="span11" value="<?php echo $product_company; ?>" readonly>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Product Name:</label>

                                    <div class="controls">
                                        <input type="text" name="product_name" class="span11" placeholder="Enter Product Name" value="<?php echo $product_name; ?>" readonly>
                                    </div>
                                </div>




                                <div class="control-group">
                                    <label class="control-label">Product Unit</label>

                                    <div class="controls">
                                        <input type="text" name="product_unit" class="span11" placeholder="Enter Packing Size" value="<?php echo $product_unit ?>" readonly>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Product Qty</label>

                                    <div class="controls">
                                        <input type="text" name="product_qty" class="span11" placeholder="Enter Packing Size" value="<?php echo $product_qty; ?>" readonly>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Product Selling Price</label>

                                    <div class="controls">
                                        <input type="text" name="product_selling_price" class="span11" placeholder="Enter Packing Size" value="<?php echo $product_selling_price; ?>">
                                    </div>
                                </div>



                                <div class="form-actions">
                                    <button type="submit" name="submit1" class="btn btn-success">Update</button>
                                </div>

                                <div class="alert alert-success" id="success" style="display:none">
                                    Record Updated Successfully!
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>


    </div>


<?php
if (isset($_POST["submit1"])) {

    mysqli_query($link,"update stock_master set product_selling_price='$_POST[product_selling_price]' where id=$id") or die(mysqli_error($link));
    ?>
    <script type="text/javascript">
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location="stock_master.php";
        },2000);
    </script>
    <?php

}
?>

<?php
include "footer.php";
?>