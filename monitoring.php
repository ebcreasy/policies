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
            <h1>6.  MONITORING</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">Monitoring</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <ul>
                <li>EBC employees shall have no privacy in anything they store, send or receive on the Company’s Systems and information could be accessed by an authorized person with prior approval.</li>
                <li>EBC may monitor any activity without prior notice.</li>
                <li>EBC is not obliged to monitor activity.</li>
            </ul>
        </section>

        <!--/.content -->
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 