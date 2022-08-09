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
            <h1>1.  PURPOSE</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">PURPOSE</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
                <p>The purpose of the policy governing the acceptable use of Information and IT Systems (hereinafter referred to as the “Policy”) is to outline the acceptable use of information and computer equipment/systems at E. B. Creasy Group of Companies. (Hereinafter referred to as “EBC”). This Policy is in place to protect the User and EBC. Inappropriate use exposes EBC to risks including legal issues, virus attacks, compromise of network systems and services.</p>
        </section>
        
        <section class="content">
                <p>This defines a minimum set of Acceptable Use Policies that needs to be followed by EBC and applies to employees, contractors, consultants, temporaries, and other personnel providing services to EBC, including all personnel affiliated with third parties (hereinafter referred to as “Users”). All Computer Hardware, Software, Operating Systems, Storage Media, Network Accounts whether owned or leased by EBC are captured under this Policy (hereinafter referred to as “Systems”).</p>
        </section>
        
<!--        <section class="content">
                <p></p>
        </section>-->
        
        <!--/.content -->
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 