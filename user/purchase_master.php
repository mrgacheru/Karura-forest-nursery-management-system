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
<style>
    /* Widget Box Styles */
.widget-box {
    background-color: #f4f4f4;
    margin-left: 400px;
    margin-top: 40px;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
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
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.form-horizontal .control-group .controls select,
.form-horizontal .control-group .controls input {
    width: calc(100% - 40px);
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.form-actions {
    text-align: center;
    margin-top: 20px;
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
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Add New Purchase</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid">
            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h1>Add New Purchase</h1>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Select Nursery:</label>

                                    <div class="controls">
                                        <select class="span11" name="company_name" id="company_name"
                                                onchange="select_company(this.value)">
                                            <option>Select</option>
                                            <?php
                                            $res = mysqli_query($link, "select * from company_name");
                                            while ($row = mysqli_fetch_array($res)) {
                                                echo "<option>";
                                                echo $row["company_name"];
                                                echo "</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Select tree:</label>

                                    <div class="controls" id="product_name_div">
                                        <select class="span11">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Select Unit:</label>

                                    <div class="controls" id="unit_div">
                                        <select class="span11">
                                            <option>Select</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Enter Packing Size</label>

                                    <div class="controls" id="packing_size_div">
                                        <select class="span11">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Enter Qty</label>

                                    <div class="controls">
                                        <input type="text" name="qty" value="0" class="span11">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Enter Price</label>

                                    <div class="controls">
                                        <input type="text" name="price" value="0" class="span11">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Select Party Name</label>

                                    <div class="controls">
                                        <select class="span11" name="party_name">
                                            <?php
                                            $res=mysqli_query($link,"select * from party_info");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["businessname"];
                                                echo "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Select Purchase Type</label>

                                    <div class="controls">
                                        <select class="span11" name="purchase_type">
                                            <option>Cash</option>
                                            <option>Debit</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Enter Expiry Date</label>

                                    <div class="controls">
                                        <input type="text" class="span11" name="dt" id="dt" autocomplete="off" required placeholder="click here to open calendar" required>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" name="submit1" class="btn btn-success">Purchase Now</button>
                                </div>

                                <div class="alert alert-success" id="success" style="display:none">
                                    Purchase Inserted Successfully!
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


        </div>


    </div>


    <script type="text/javascript">
        function select_company(company_name) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("product_name_div").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "forajax/load_product_using_company.php?company_name=" + company_name, true);
            xmlhttp.send();

        }

        function select_product(product_name, company_name) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("unit_div").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "forajax/load_unit_using_products.php?product_name=" + product_name + "&company_name=" + company_name, true);
            xmlhttp.send();

        }

        function select_unit(unit, product_name, company_name) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("packing_size_div").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "forajax/load_packingsize_using_unit.php?unit=" + unit + "&product_name=" + product_name + "&company_name=" + company_name, true);
            xmlhttp.send();


        }
    </script>

<?php
if (isset($_POST["submit1"])) {

    $today_date=date('Y-m-d');

    mysqli_query($link,"insert into purchase_master values(NULL,'$_POST[company_name]','$_POST[product_name]','$_POST[unit]','$_POST[packing_size]','$_POST[qty]','$_POST[price]','$_POST[party_name]','$_POST[purchase_type]','$_POST[dt]','$today_date','$_SESSION[user]')") or die(mysqli_error($link));

    $count=0;
    $res=mysqli_query($link,"select * from stock_master where product_company='$_POST[company_name]' && product_name='$_POST[product_name]' && product_unit='$_POST[unit]'");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        mysqli_query($link,"insert into stock_master values(NULL,'$_POST[company_name]','$_POST[product_name]','$_POST[unit]','$_POST[qty]','0')") or die(mysqli_error($link));
    }
    else{
      mysqli_query($link,"update stock_master set product_qty=product_qty+$_POST[qty] where product_company='$_POST[company_name]' && product_name='$_POST[product_name]' && product_unit='$_POST[unit]'") or die(mysqli_error($link));
    }

    ?>
    <script type="text/javascript">
        document.getElementById("success").style.display="block";
    </script>
    <?php


}
?>

<?php
include "footer.php";
?>