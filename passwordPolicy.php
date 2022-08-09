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
            <h1>3.  PASSWORD POLICY</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="itPolicies.php"><i class="fa fa-dashboard"></i> IT Policy</a></li>
                <li class="active">Password Policy</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <p>
                Passwords are an important aspect of security of the Systems. They are the front line of protection for User Accounts. A poorly chosen password may result in the compromise of EBC's entire network. Therefore it is necessary to establish a policy for the creation of strong passwords, the protection of those passwords, and the frequency of change.
            </p>
        </section>

        <section class="content">
            <h2 class="page-header">3.1.  GENERAL</h2>
            <ul>
                <li>All system-level passwords (e.g., root, enable, DBA/Network admin, application administration accounts, etc.) must be changed every 60 days.</li>
                <li>All user-level passwords must be changed at least every 60 days.</li>
                <li>User accounts that have system-level privileges granted through group memberships must have a unique password from all other accounts held by that user.</li>
                <li>Passwords must not be inserted into email messages or other forms of electronic communication.</li>
                <li>All user-level and system-level passwords should contain at least eight characters, including one upper case letter, one special character and one numeric.</li>
            </ul>
        </section>

        <section class="content">
            <h2 class="page-header">3.2 PASSWORD PROTECTION STANDARDS</h2>
            <ul>
                <li>Do not use the same password for EBC account as for other non- EBC access. (e.g., Personal ISP account, Internet Banking, Benefits, etc.). Where possible, do not use the same password for various EBC access needs.</li>
                <li>Do not share EBC passwords with anyone, including administrative assistants, secretaries or your colleagues. All passwords are to be treated as sensitive, confidential EBC information.</li>
                <li>It is strictly prohibited to share user accounts for any system. If an employee with high level privileges will be away from work for any reason, there must be another employee who will be delegated these privileges and responsibilities to carry out the work.</li>
                <ul>
                    <h4 class="page-header"><i>Here is a list of "don’ts":</i></h4>
                    <li>Refrain from using your username as your password.</li>
                    <li>Refrain from revealing your password to anyone including your Superiors, IT administrators or family members.</li>
                    <li>Do not reveal a password in an email message or over the phone.</li>
                    <li>Refrain from talking about a password in front of others.</li>
                    <li>Refrain hinting at the format of a password (e.g., "my family name").</li>
                    <li>Refrain from revealing a password or details about it on questionnaires or security forms.</li>
                    <li>If someone demands a password, refer him or her to this document or have him or her call someone responsible in IT Division.</li>
                    <li>Do not use the "Remember Password" feature of applications (e.g. Email, Internet Proxy).</li>
                    <li>Again, do not write passwords down and store them anywhere. Do not store passwords in a file on ANY computer system (including PDA‟s, Mobile Phones or similar devices).</li>
                    <li>Refrain from using at least the three previously used passwords when the password is being changed.</li>
                </ul>
                <li>If an account or password is suspected to have been compromised, report the incident to Manager IT.</li>
            </ul>
        </section>

        <!--/.content -->
    </aside><!-- /.right-side -->



    <?php
//                including footer page                
    include 'footer.php';
}
?> 