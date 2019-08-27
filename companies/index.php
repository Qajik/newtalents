<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Companies</title>
    <link href="../assets/css/includes/jquery-ui-1.12.1.min.css" rel="stylesheet">
    <link href="../assets/css/includes/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/common.css" rel="stylesheet">
    <link href="../assets/css/companies/company-profile.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/companies/talents-requests.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="wrap">
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brandOptionLogoClass navbar-brand" href="/">
                <img src="../assets/img/main-top-logo.png" alt="My Application"></a>
            </div>

            <div class="navbar-nav navbar-right nav nav-bar-config">
                <img src="../assets/img/Settings_icon@3x.png">
                <span title="help">Help</span>
            </div>

        </div>
    </nav>
    <div class="container">
                        
<!---Section Begin--->
<section>
    <div class="row sectionMainBar">
        <div class="col-md-2">
            <div class="leftSidbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="profilInfoImage">
                            <img src="../assets/img/company_logo.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profilInfoName">
                            <span class="frstName">Company</span>
                            <span class="lastName">Name</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="nav flex-column leftBarProfileNavi">
                            <a class="nav-link active" href="#">
                                <img src="../assets/img/Home_icon.png" alt="home icon">
                                <span>Home</span>
                            </a>
                            <a class="nav-link" href="#">
                                <img src="../assets/img/Contacts_icon.png" alt="contact icon"> 
                                <span>Contacts</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
<!--Top Profile Block begin-->
            <div class="row">
                <div class="col-md-12">
                    <div class="profileHeadBlock">
                        <div class="profileTimelineBackground">
                        </div>
                        <div class="topProfileInfoMain">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="profileImage">
                                        <img src="../assets/img/company_logo.png">
                                    </div>
                                    <div class="userInfoTexts">
                                        <span class="userNameTextSpan userMainInfoTextSpan">Company name</span>
                                        <span class="userPositionTextSpan userMainInfoTextSpan userProfileAditionalInfo">Industry</span>
                                        <span class="userLocationTextSpan userMainInfoTextSpan userProfileAditionalInfo">Location</span>
                                        <span class="userBirthdayTextSpan userMainInfoTextSpan userProfileAditionalInfo">Website</span>
                                        
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-info settingsToolButtonProfileRight"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--Top Profile Block end-->
<!--Tab Menu Block Begin-->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabMenuBlock">
                        <!-- Includin profile details -->
                        <?php 
                            if(file_exists("tab-menu.php")){
                                require_once "tab-menu.php";    
                            }
                        ?>
                        <div class="tab-content profileOptionLists" id="pills-tabContent">
                            <!-- Includin profile details -->
                            <?php 
                                if(file_exists("profile-details.php")){
                                    require_once "profile-details.php";    
                                }
                            ?>
                            <!-- Includin talents request -->
                            <?php 
                                if(file_exists("talents-requests.php")){
                                    require_once "talents-requests.php";    
                                }
                            ?>
                             <!-- Includin activity -->
                            <?php 
                                if(file_exists("activity.php")){
                                    require_once "activity.php";    
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
<!--Tab Menu Block End-->
        </div>
    </div>
</section>

<!---Section End--->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">Talent foo left</p>
        <p class="pull-right">Talent foo right</a></p>
    </div>
</footer>

<script src="../assets/js/includes/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="../assets/js/common_talent.js" type="text/javascript"></script>
<script src="../assets/js/includes/jquery-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/includes/bootstrap.js" type="text/javascript"></script>
<script src="../assets/js/company-profile.js" type="text/javascript"></script>

</body></html>