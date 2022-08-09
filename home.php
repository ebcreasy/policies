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
        <section class="content-header">
            <h1>
                E.B CREASY GROUP OF COMPANIES - CODE OF CONDUCTS
            </h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <!-- Solid boxes -->
            <div class="row">
                <div class="col-md-4">
                    <!-- IT POLICIES -->
                    <a href="itPolicies.php">
                        <div class="box box-solid bg-aqua">
                            <div class="box-header" >
                                <h3 class="box-title">IT POLICIES</h3>
                            </div>
                            <div class="box-body">
                                <!--Box class: <code>.box.box-solid.bg-navy</code>-->
                                <p>The purpose of the policy governing the acceptable use of Information and IT Systems is to outline the acceptable use of information and computer equipment/systems at E. B. Creasy Group of Companies......</p>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </a>
                </div><!-- /.col -->

                <div class="col-md-4">
                    <!-- HRIS POLICIES -->
                    <a href="#">
                        <div class="box box-solid bg-red">
                            <div class="box-header">
                                <h3 class="box-title">HRIS POLICIES</h3>
                            </div>
                            <div class="box-body">
                                <p>The purpose of the policy governing the acceptable use of Information and IT Systems is to outline the acceptable use of information and computer equipment/systems at E. B. Creasy Group of Companies......</p>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </a>
                </div><!-- /.col -->

                <div class="col-md-4">
                    <!-- DR POLICIES -->
                    <a href="#">
                        <div class="box box-solid bg-purple">
                            <div class="box-header">
                                <h3 class="box-title">DR POLICIES</h3>
                            </div>
                            <div class="box-body">
                                <p>The purpose of the policy governing the acceptable use of Information and IT Systems is to outline the acceptable use of information and computer equipment/systems at E. B. Creasy Group of Companies......</p>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->


        </section><!-- /.content --> 
        <!--/.content -->
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 