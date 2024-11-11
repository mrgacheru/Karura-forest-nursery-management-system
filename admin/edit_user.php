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
$firstname="";
$lastname="";
$username="";
$password="";
$status="";
$role="";
$res=mysqli_query($link,"select * from user_registration where id=$id");
while($row=mysqli_fetch_array($res))
{
    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $username=$row["username"];
    $password=$row["password"];
    $status=$row["status"];
    $role=$row["role"];
}
?>



    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    testing</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;margin-left:350px;margin-top:45px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Edit User</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">First Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Last Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">User Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="User name" name="username" readonly value="<?php echo $username; ?>"/>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Password</label>

                                    <div class="controls">
                                        <input type="password" class="span11" placeholder="Enter Password"
                                               name="password" value="<?php echo $password; ?>"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Select Role</label>

                                    <div class="controls">
                                        <select name="role" class="span11">
                                            <option <?php if($role=="user"){echo "selected";} ?>>user</option>
                                            <option <?php if($role=="admin"){echo "selected";} ?>>admin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Select Status</label>

                                    <div class="controls">
                                        <select name="status" class="span11">
                                            <option <?php if($status=="active"){echo "selected";} ?>>active</option>
                                            <option <?php if($status=="inactive"){echo "selected";} ?>>inactive</option>
                                        </select>
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
if(isset($_POST["submit1"]))
{
 mysqli_query($link,"update user_registration set firstname='$_POST[firstname]',lastname='$_POST[lastname]',password='$_POST[password]',role='$_POST[role]',status='$_POST[role]' where id=$id") or die(mysqli_error($link));
?>
    <script type="text/javascript">
            document.getElementById("success").style.display = "block";
            setTimeout(function(){
                window.location="add_new_user.php";
            },3000);
        </script>
<?php
}
?>



<?php
include "footer.php";
?>