<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add course</title>


    <?php
    include 'side_bar.php';
    include 'header.php';
    include 'connect.php';
    include 'functions.php';
    $update = $_REQUEST['RegisterId'];

    $query = "SELECT * FROM `tblregister` where RegisterId='$update'";

    $result = mysql_query($query)or die(mysql_error());
    $row = mysql_fetch_array($result)or die(mysql_error());



    $error = false;
    ?>

    <?php
    if (isset($_POST['update'])) {

        $demo = $_REQUEST['rupdate'];

        $FirstName = $_REQUEST['FirstName'];
        $LastName = $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];


        $Address = $_REQUEST['Address'];
        $Phone = $_REQUEST['Phone'];


        $update_query = "update `tblregister` set `FirstName`='$FirstName',`LastName`='$LastName', `Email`='$Email',`Address`='$Address',`Phone`='$Phone' where `RegisterId`='$demo'";



        $z = mysql_query($update_query) or die(mysql_error());
        if ($z) {
            ?>

            <script>location.replace('view_Registration.php');</script>

            <?php
        } else {
            echo 'Error';
        }
    }
    ?>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b>Edit Registration</b> </h3>  

                    </div>
                </div>
                <div class="box">
                    <?php if ($error == "success") { ?>
                        <div class='alert alert-success'>
                            A new course was inserted successfully!
                        </div>
                    <?php } ?>	
                    <script src="js/index.js"></script>

                     <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >
                        <input type="hidden" name="rupdate" value="<?php echo $row['RegisterId']; ?>">     
                        <table class="table">

                            <tr>
                                <th width="30%">*First Name :</th>

                                <td><input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>" id="FirstName" class="form-control" placeholder="First Name" maxlength="50"/></td>
                            </tr>
                            <tr>
                                <th width="30%">* Last Name :</th>

                                <td><input type="text" name="LastName" value="<?php echo $row['LastName']; ?>" id="LastName" class="form-control" placeholder="Last Name" maxlength="50"/></td>
                            </tr>
                            <tr>
                                <th width="30%">* Email :</th>

                                <td><input type="text" name="Email" value="<?php echo $row['Email']; ?>" id="Email" class="form-control" placeholder="Email" maxlength="50"/></td>
                            </tr>
                            <tr>
                                <th width="30%">* Address :</th>

                                <td><input type="text" name="Address" value="<?php echo $row['Address']; ?>" id="Address" class="form-control" placeholder="Address" maxlength="150"/></td>
                            </tr>
                            <tr>
                                <th width="30%">* Phone :</th>

                                <td><input type="text" name="Phone" value="<?php echo $row['Phone']; ?>" id="Phone" class="form-control" placeholder="Phone" maxlength="10"/></td>
                            </tr>

                            <tr>
                                <th>&nbsp;</th>

                                <td><input type="submit" name="update" onClick="return validateForm()"  value="Update" class="btn btn-success"/></td>

                            </tr>
                        </table>
                    </form>



                </div>

            </div>

        </div>


    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                



    <!-- END PAGE CONTENT -->
</div>
<?php
include 'footer.php';
?>
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>  



<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>





<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript" src="nicEdit-latest.js"></script>


<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->



</body>
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function ()

    {


        $("#form_register").validate(
                {

                    rules: {

                        'FirstName': {

                            required: true,
                            pattern: /^[a-zA-Z\']+$/,
                            //pattern: /^[a-zA-Z0-9\s\-\'.:]+$/,


                        },

                        'LastName': {

                            required: true,
                            pattern: /^[a-zA-Z\']+$/,
                            //pattern: /^[a-zA-Z0-9\s\-\'.:]+$/,


                        },

                        'Email': {

                            required: true,
                            pattern: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
                            email: true


                        },

                        'Address': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'.\:#,]+$/,

                        },

                        'Phone': {

                            required: true,
                            pattern: /^[0-9]+$/,

                        },

                        'Instigator': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'.:]+$/,

                        }

                    },

                    messages: {

                        'FirstName': {

                            required: "The First Name is mandatory!",
                            pattern: "Enter only characters ",

                        },
                        'LastName': {

                            required: "The Last Name is mandatory!",
                            pattern: "Enter only characters ",

                        },
                        'email': {

                            required: "The email is required!",

                            pattern: "Please enter a valid email address!",
                            email: "Please enter a valid email address!",

                        },
                        'Address': {

                            required: "The address is mandatory!",
                            pattern: "Enter only characters, number and space",

                        },

                        'Phone': {

                            required: "The Phone by is mandatory!",
                            pattern: "Enter only number",

                        },

                        'Instructor': {

                            required: "The instructor is mandatory!",
                            pattern: "Please enter correct value",
                        },

                        'Instigator': {

                            required: "The instigator is mandatory!",
                            pattern: "Please enter correct value",

                        }
                    }

                });

    });

//]]>
</script>

</html>

<?php ob_end_flush(); ?>
