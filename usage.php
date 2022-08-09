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
            <h1>2.  IT USAGE POLICY</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">IT Usage Policy</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <p>
                EBC provides the above-defined Systems for the effective and efficient discharge of official duties.   
            </p>
        </section>

        <section class="content">
            <p>
                The following activities are prohibited with regard to the use of the systems. Under no circumstances is an employee of EBC authorized to engage in any activity that is illegal under Sri Lankan or any International Law while using the systems.
            </p>
        </section>

        <section class="content">
            <p>
                The list below is by no means exhaustive but attempts to provide a framework for activities, which shall fall into the category of unacceptable use.
            </p>
        </section>

        <section class="content">
            <h2 class="page-header">2.1  UNACCEPTABLE USE</h2>
            <ul>
                <li>Unauthorized use, distribution or copying of copyrighted content and material (including pictures, text, music etc.) and the installation of any copyrighted software for which EBC does not have an active license to access corporate business systems and communicate with outside parties.</li>
                <li>Sharing of user accounts (company username/password pairs) and the respective user will be responsible for any activity carried out using an account assigned to him/her. Any exceptions required as a result of business requirements is to be documented and User roll can be assign to a nominated user with the approval of HOD.</li>
                <li>Sharing Files/Folders without proper access restrictions.</li>
                <li>Leaving the computer in unlock mode when physically not present.</li>
                <li>Storing non-business related data on the centrally mapped network drives.</li>
                <li>Installing unauthorized hardware and accessories.</li>
                <li>Installing or playing games on Systems.</li>
                <li>Creating, Distributing or Viewing Pornographic or obscene material.</li>
                <li>Use of Systems for the furtherance of any political, religious agenda.</li>
                <li>Effecting security breaches or disruptions of network communication: Security breaches include, but are not limited to, accessing data of which the User is not an intended recipient or logging into a server or account that the User is not expressly authorized to access, unless these duties are within the scope of the User’s regular duties (IT Administrators). For purposes of this section, "disruption" includes, but is not limited to, network sniffing, network monitoring, ping floods, packet spoofing, denial of service, and forged routing information, Introduction of malicious programs such as viruses, Trojans, worm and Spyware etc.</li>
                <li>Any action using Systems that are aimed at disrupting or harassing another employee or other outside party.</li>
                <li>Operating a computer without a virus scanner which is updated automatically on regular basis.</li>
            </ul>
        </section>
        <!--/.content -->
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 