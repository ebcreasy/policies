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
            <h1>5.  INTERNET USAGE POLICY</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">Internet Usage Policy</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <p>Internet access is granted to Users to facilitate the efficient discharge of their duties as with other IT resources. This should be used extensively by the employees for official purposes and should not be abused.</p>
            <p>The Internet can be a magnificent source of detailed, current information that can enhance employee productivity. This policy hopes to guide Users to make use of this resource in a way that will help them achieve their official goals.</p>
            <p>Users are advised not to use the Internet for any purpose which would reflect negatively on EBC. Internet Access may be requested through the Head of the department.</p>
        </section>

        <section class="content">
            <h2 class="page-header">5.1.  UNACCEPTABLE USE</h2>
            <ul>
                <li>Internet access is granted only through the corporate network (and proxy) and attempting to gain Internet access through unauthorized means (installing unauthorized modems etc.) is strictly prohibited.</li>
                <h4 class="page-header"><b><i>User shall not:</i></b></h4>
                <li>Browse, distribute or download pornographic or obscene material in any form.</li>
                <li>Engage in criminal activity including but not limited to hacking, cracking, sniffing or disrupting EBC or third party systems.</li>
                <li>Access unauthorized web based third party e-mail accounts such as Yahoo, Hotmail, Gmail, SLT Net etc.</li>
                <li>Use IM clients other than approved and authorized</li>
                <li>Visit or engage in online gambling activities or other gaming activities</li>
                <li>Access to any Social Media networks unless approved and authorized.</li>
                <li>Engage in activity that will infringe the copyrights of others by sharing/ distributing/ downloading of copyrighted material such as but not limited to music through Peer-to-Peer applications. In addition these applications will use up a lot of bandwidth and this will hinder use of the network by others.</li>
                <li>Install server applications accessible from the Internet is strictly forbidden to general users. If such use is required, prior approval needs to be sought.</li>
                <li>Share information with third party.</li>
            </ul>
        </section>

        <!--/.content -->
        
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 