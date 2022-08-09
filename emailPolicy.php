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
            <h1>4.  EMAIL POLICY</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">Email Policy</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <p>The purpose of this policy is to ensure the proper use of EBC email system and make users aware of what the company deems acceptable and unacceptable use of its email system. The Email facility is a business communication tool and users are required to use this tool in a responsible, effective and lawful manner.</p>
        </section>

        <section class="content">
            <h2 class="page-header">4.1.  LEGAL ISSUES</h2>
            <p>It is important that users are aware of the legal risks of an e-mail:</p>
            <ul>
                <li>If you originate emails or forward emails (originated by another) with any libelous, defamatory, insulting racist or obscene remarks and or content, you and EBC can be held liable.</li>
                <li>If you unlawfully (i.e. without the consent of the party disclosing the information to you) forward confidential information, you and EBC can be held liable.</li>
                <li>If you unlawfully forward or copy messages without permission, you and EBC can be held liable for copyright infringement even though the copyright so infringed is not of the party who sent you the email.</li>
                <li>If you send an attachment that contains a virus, worms, Trojans or hoaxes you and EBC can be held liable.</li>
            </ul>
        </section>

        <section class="content">
            <h2 class="page-header">4.2.  UNACCEPTABLE USE</h2>
            <p></p>
            <ul>
                <li>It is strictly prohibited to originate or forward emails containing libelous, defamatory, racist, religious, or obscene remarks.</li>
                <li><b>Do not forward a message without acquiring permission from the sender first. (User discretion is advised until a formal information classification policy is in place).</b></li>
                <li>Do not send unsolicited email messages.</li>
                <li>Do not distribute pornographic or obscene material through e-mail either internally or externally.</li>
                <li>Do not forge or attempt to forge email messages.</li>
                <li>Do not send email messages using another person’s email account.</li>
                <li><b>Do not copy a message or attachment belonging to another user without permission of the originator.</b></li>
                <li>Do not disguise or attempt to disguise your identity when sending mail.</li>
                <li>Do not use e-mail for communications of a sensitive nature.</li>
                <li>Do not send emails with large attachments. The maximum size of an email that could be sent through corporate systems is limited to 5MB.</li>
                <li>Do not send emails with Music /sound, Executable and Multimedia as attachments.</li>
                <li>Number of external recipients should not exceed 50 per Email.</li>
            </ul>
            <p>All messages distributed via the Company’s email system, even personal emails, are EBC property.</p>
        </section>
       <!--/.content -->
       
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 