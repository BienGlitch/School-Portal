<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in_management(); ?>
<?php include("includes/header.php"); ?>
<article class="col-lg-7 col-lg-offset-1 col-sm-7 col-sm-offset-1 col-lg-push-4 col-sm-push-4">
    <ol class="breadcrumb">
        <li><a href="">Login</a><span class="glyphicon glyphicon-circle-arrow-right"></span></li>
        <li class="active"><a href="">Management staff Area</a><span class="glyphicon glyphicon-circle-arrow-right"></span></li>
    </ol>

    <h2 style="color:red">Management staff Area</h2>
    <p style="color:blue">Welcome to Management Staff Area: <?php  echo $_SESSION['username']; ?></p>
    <p><img src="img/uniportbuilding.png" alt="" class="pull-left img-responsive img-rounded"></p>
    <p>&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Authomated System is that it has a more-or-less normal distribution of entities, as opposed to using 'Content.</p><br/>
    <a href="index.php">Cancel</a>
</article>
<aside class="col-lg-4 col-sm-4 col-lg-pull-8 col-sm-pull-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Please select what you want to do</h4>
        </div>
        <div class="panel-body">
            
            <ul>
                <!--<li><a href="#.php">Add Department HOD for the Session</a></li>
                <li>&nbsp;</li>-->
                <li><a href="new_user_student.php">Add Student User</a></li>
                <li>&nbsp;</li>
                <li><a href="new_user_lecturer.php">Add Lecturer User</a></li>
                <li>&nbsp;</li>
                <li><a href="new_user_hod.php">Add HOD User</a></li>
                <li>&nbsp;</li>
                <li><a href="new_user_senate.php">Add Senate User</a></li>
                <li>&nbsp;</li>
                <li><a href=".php">Edit Student User</a></li> <!-- by mgt staff, Different from one by student. yet to be written  -->
                <li>&nbsp;</li>
                <li><a href="new_user_lecturer.php">Edit Lecturer User</a></li>
                <li>&nbsp;</li>
                <li><a href="#.php">Edit HOD User</a></li>
                <li>&nbsp;</li>
                <li><a href="#.php">Edit Senate User</a></li>

                <!--<li><a href="viewindividualresult.php">Generate Exams Attendants sheets</a></li>
                <li><a href="viewstatementofresult_tra.php">Search Students Data</a></li>
                <li><a href="trackindividualresults.php">Search Students Result</a></li>-->
            </ul>
        </div>
    </div>    
</aside>
<?php include("includes/footer.php"); ?>