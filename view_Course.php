
<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
//include 'functions.php';
//$q = "SELECT * FROM `tbl_1year` ";

$query = "SELECT * FROM `tblcourse` ";

$result = mysql_query($query)or die(mysql_error());
?>


<div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title"><b>List of all courses</b> </h3>   

        <div class="btn-group pull-right">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export All Users For All Courses</button>
            <ul class="dropdown-menu">
                
               
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'excel', escape: 'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                
            </ul>
        </div> 


    </div>
    <div class="panel-body">
        <table id="customers2" class="table datatable">
            <thead>
                <tr>
                    <th>Sr#</th>
                    <th class="text-center">Course title </th>

                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Location</th>
                    <th class="text-center" width="100">Time</th>
                   
                    <th class="text-center">#UserRegst.</th>
                    <th class="text-center">Total Capacity </th>


                    <th class="text-center">Action</th>



                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysql_fetch_array($result)) {

                    $IsStatus = $row['IsStatus'];
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td class="text-center" width="300"><?php echo $row['Title']; ?></td>

                        <?php $sdate = date_create($row['StartDate']); ?>
                        <td class="text-center"><?php echo date_format($sdate, 'm/d/Y') ?></td> 

                        <?php $edate = date_create($row['EndDate']); ?>
                        <td class="text-center"><?php echo date_format($edate, 'm/d/Y') ?></td>
                        <td width="100" class="text-center"><?php echo $row['Location']; ?></td>
                        <td class="text-center"><?php echo $row['Time']; ?></td>


                        


                        <td class="text-center"><?php echo $row['NoofUserRegistered']; ?></td>
                        <td class="text-center"><?php echo $row['TotalCapacity']; ?></td>
                        <td class="text-center">
                            <?php
                            if (($IsStatus) == '0') {
                                ?>
                                <a title="Active"  href="action.php?IsStatus=<?php echo $row['CourseID']; ?>" 
                                   class="act" onclick="return confirm('Activate <?php echo $data ?>');"> <i class="fa fa-times"></i> </a>
                                   <?php
                               }
                               if (($IsStatus) == '1') {
                                   ?>
                                <a title="InActive"  href="action.php?IsStatus=<?php echo $row['CourseID']; ?>" 
                                   class="deact" onclick="return confirm('Are you sure you want to deactivate this course <?php echo $data ?>');"> <i class="fa fa-check"></i></a>
                                   <?php
                                }
                                ?><label> | </label>
                            <a title="Edit"  href="edit.php?CourseID=<?php echo$row['CourseID']; ?>"><i class="fa fa-pencil"></i></a><label> | </label>
                            <a class="simpleConfirm" title="Delete" href="delete.php?CourseID=<?php echo $row['CourseID']; ?>" ><i class="fa fa-minus-circle"></i></a></td>

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
      "sLengthMenu": "Show _MENU_ Courses",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ Courses"
    }
});
    
            $(".simpleConfirm").confirm();
            
        </script>

</body>
</html>
