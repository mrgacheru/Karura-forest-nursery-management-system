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
    .container-fluid { 
        padding: 20px; 
    }
    
    .row-fluid { 
        background-color: white; 
        min-height: 1000px; 
        padding: 10px; 
        margin-left:350px;
        width: 1400px;
        font-size:11px;
    }
    
    .span7 { 
        width: 58.33333333%; 
        float: left; 
        margin-left: 1.04166667%; 
    }

    /* Widget Box Styles */
    .widget-box { 
        background-color: #f4f4f4; 
        margin-top: 10px; 
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
        font-size:11px;
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
    
    .form-horizontal .control-group .controls input, 
    .form-horizontal .control-group .controls select { 
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
    
    .alert-danger { 
        background-color: #f2dede; 
        color: #a94442; 
        border: 1px solid #ebccd1; 
    }
    
    .alert-success { 
        background-color: #dff0d8; 
        color: #3c763d; 
        border: 1px solid #d6e9c6; 
    }
    
    /* Table Styles */
    .table { 
        width: 100%; 
        border-collapse: collapse; 
        margin-bottom: 20px; 
    }
    
    .table th, 
    .table td { 
        padding: 10px; 
        text-align: left; 
        border: 1px solid #ddd; 
    }
    
    .table th { 
        background-color: #333; 
        color: white; 
    }
    
    .table tr:nth-child(even) { 
        background-color: #f9f9f9; 
    }
    
    .widget-content nopadding { 
        padding: 0; 
    }
</style>

<?php
include "header.php";
include "../user/connection.php";
?>


    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Add User</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px; margin-top:40px;margin-left:350px;">
            <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h1>Add User</h1>
                        </div>
                <div class="span7">
                    <div class="widget-box">
                        
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">First Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="First name" name="firstname"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Last Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Last name" name="lastname"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">User Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="User name" name="username"/>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Password</label>

                                    <div class="controls">
                                        <input type="password" class="span11" placeholder="Enter Password"
                                               name="password"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Select Role</label>

                                    <div class="controls">
                                        <select name="role" class="span11">
                                            <option>user</option>
                                            <option>admin</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="alert alert-danger" id="error" style="display:none">
                                    This Username Already Exist! Please Try Another.
                                </div>


                                <div class="form-actions">
                                    <button type="submit" name="submit1" class="btn btn-success">Save</button>
                                </div>

                                <div class="alert alert-success" id="success" style="display:none">
                                    Record Inserted Successfully!
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-content nopadding" >
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Name</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from user_registration");
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["firstname"]; ?></td>
                                    <td><?php echo $row["lastname"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["role"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                    <td><a href="edit_user.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></td>
                                    <td><a href="delete_user.php?id=<?php echo $row["id"]; ?>" style="color:red">Delete</a></td>
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
if (isset($_POST["submit1"])) {

    $count = 0;
    $res = mysqli_query($link, "select * from user_registration where username='$_POST[username]'");
    $count = mysqli_num_rows($res);

    if ($count > 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("error").style.display = "block";
        </script>
        <?php
    } else {
        mysqli_query($link, "insert into user_registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[role]','active')");
        ?>
        <script type="text/javascript">
            document.getElementById("error").style.display = "none";
            document.getElementById("success").style.display = "block";
            setTimeout(function () {
                window.location.href = window.location.href;
            }, 3000);
        </script>
        <?php
    }


}

?>


<?php
include "footer.php";
?>