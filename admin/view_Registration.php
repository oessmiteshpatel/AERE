<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
//include 'functions.php';
//$q = "SELECT * FROM `tbl_1year` ";

$query = "SELECT * FROM `tblregister` ";

$result = mysql_query($query)or die(mysql_error());
?>


<div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title"> <b>List of registration for all courses</b> </h3>   

        <div class="btn-group pull-right">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export All Users</button>
            <ul class="dropdown-menu">
                
                <li><a href="#" onClick ="$('#customers2').tableExport({tableName:'registration',type: 'excel', escape: 'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                
            </ul>
        </div> 


    </div>
    <div class="panel-body">
        <table id="customers2" class="table datatable">
            <thead>
                <tr>
                    <th class="text-center">Sr#</th>
                    
                   
                    <th class="text-center"> First Name </th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Is Active </th>
                    <th class="text-center"> Action </th>
                   
                    


                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysql_fetch_array($result)) {
                     $IsActive = $row['IsActive'];
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        
                        
                        <td class="text-center"><?php echo $row['FirstName']; ?></td>
                        <td class="text-center"><?php echo $row['LastName']; ?></td> 
                        <td class="text-center"><?php echo $row['Email']; ?></td>
                        <td class="text-center"><?php echo $row['Address']; ?></td>
                        <td class="text-center"><?php echo $row['Phone']; ?></td>
                        
                        
                        
                        <td class="text-center">  
                            <?php
                            if (($IsActive) == '0') {
                                ?>
                                <a href="action_Reg.php?IsActive=<?php echo $row['RegisterId']; ?>" 
                                   class="act" onclick="return confirm('Activate <?php echo $data ?>');"> Deactive <!--<i class="fa fa-times"> </i> --> </a>
                                   <?php
                               }
                               if (($IsActive) == '1') {
                                   ?>
                                <a href="action_Reg.php?IsActive=<?php echo $row['RegisterId']; ?>" 
                                   class="deact" onclick="return confirm('Are you sure you want to deactivate this user <?php echo $data ?>');">Active <!--<i class="fa fa-check"></i>--></a>
        <?php
    }
    ?>

                        </td>
                        <td class="text-center">  <a title="Edit"  href="edit_registerd.php?RegisterId=<?php echo$row['RegisterId']; ?>"><i class="fa fa-pencil"></i></a> </td>
                       

                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
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
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>








<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->


<script>
       $('#customers2').dataTable( {
    "oLanguage": {
      "sLengthMenu": "Show _MENU_ of Users",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ Users"
    }
});
    
           
            
        </script>

</body>
</html>
