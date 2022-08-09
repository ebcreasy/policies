<?php
session_start();
if (!isset($_SESSION["loginUser"])) {
    header("location:index.php");
} else {
    ?>
    <!--              including header page                -->
    <?php include 'header.php'; ?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>7.  ENFORCEMENT</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">Enforcement</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <ul>
                <li>Any employee found to have violated this policy may be subject to disciplinary action.</li>
                <li>This policy may be modified as and when required and the users will be informed appropriately.</li>
            </ul>
        </section>

        <!--/.content -->
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 