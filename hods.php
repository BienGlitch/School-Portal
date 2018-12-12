<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in_hods(); ?>
<?php include("includes/header.php"); ?>
<article class="col-lg-7 col-lg-offset-1 col-sm-7 col-sm-offset-1 col-lg-push-4 col-sm-push-4">
    <ol class="breadcrumb">
        <li><a href="">Login</a><span class="glyphicon glyphicon-circle-arrow-right"></span></li>
        <li class="active"><a href="">Staff Area</a><span class="glyphicon glyphicon-circle-arrow-right"></span></li>
    </ol>

    <h2 style='color:red'>HODs Area</h2>
    <p style='color:blue'>Welcome to HODs Area: <?php  echo $_SESSION['hod_name']; ?></p>
    <p><img src="img/hod.png" alt="" class="pull-left img-responsive img-rounded"></p>
    <p>&nbsp;</p>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Authomated System is that it has a more-or-less normal distribution of entities, as opposed to using 'Content.</p><br/>
    <a href="index.php">Cancel</a>
</article>
<aside class="col-lg-4 col-sm-4 col-lg-pull-8 col-sm-pull-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Please select what you want to do</h4>
        </div>
        <div class="panel-body">
            <ul>
                <li><a href="editnew_user_hod1.php">Edit Hods's  User Account Profile</a></li>
                <li>&nbsp;</li>
                <!--<li><a href="assigncou1.php">Assign Courses</a></li>
                <li>&nbsp;</li>-->
                <li><a href="attendants.php">Generate Attendants Sheets</a></li>
                <li>&nbsp;</li>
                <li><a href="searchStudents.php">Search Students Data</a></li>
                <li>&nbsp;</li>
                <li><a href="searchResults1.php">Search Students Results</a></li>
                <li>&nbsp;</li>
                <li><a href="viewlevelcourses.php">Check Registered Departmental Level Courses</a></li>
                <li>&nbsp;</li>
                <li><a href="viewgroupresult_hod.php">Check Class Results</a></li>
                                              
            </ul>
        </div>
    </div>    
</aside>
<?php include("includes/footer.php"); ?>