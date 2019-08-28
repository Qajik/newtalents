<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talents</title>
    <link href="../assets/css/includes/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/common.css" rel="stylesheet">
    <link href="../assets/css/talents/talents-profile.css" rel="stylesheet">
    <link href="../assets/css/talents/talents-projects.css" rel="stylesheet">
    <link href="../assets/css/talents/talents-cv.css" rel="stylesheet">
    <link href="../assets/css/talents/talents-activity.css" rel="stylesheet">
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
                                    <img src="../assets/img/profileDefaultSmall.png">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profilInfoName">
                                    <span class="frstName">David</span>
                                    <span class="lastName">Yan</span>
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
                                                <img src="../assets/img/defaultManPictureBig.png">
                                            </div>
                                            <div class="userInfoTexts">
                                                <span class="userNameTextSpan userMainInfoTextSpan">David Yan</span>
                                                <span class="userPositionTextSpan userMainInfoTextSpan userProfileAditionalInfo">Position</span>
                                                <span class="userBirthdayTextSpan userMainInfoTextSpan userProfileAditionalInfo">Birthday</span>
                                                <span class="userLocationTextSpan userMainInfoTextSpan userProfileAditionalInfo">Location</span>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-info settingsToolButtonProfileRight">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabMenuBlock">
                                <!-- Includin tab menu items -->
                                <?php 
                                    if(file_exists("tab-menu.php")){
                                        require_once "tab-menu.php";    
                                    }
                                ?>
                                <!-- Includin profile details -->
                                <?php 
                                    if(file_exists("profile-details.php")){
                                        require_once "profile-details.php";    
                                    }
                                ?>
                                <!-- Includin profile details -->
                                <?php 
                                    if(file_exists("profile-details.php")){
                                        require_once "profile-details.php";    
                                    }
                                ?>
                                <!-- Includin projects -->
                                <?php 
                                    if(file_exists("projects.php")){
                                        require_once "projects.php";    
                                    }
                                ?>
                                <!-- Includin activity -->
                                <?php 
                                    if(file_exists("activity.php")){
                                        require_once "activity.php";    
                                    }
                                ?>
                                <!-- Includin create cv -->
                                <?php 
                                    if(file_exists("create-cv.php")){
                                        require_once "create-cv.php";    
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
        <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">Talent foo left</p>
        <p class="pull-right">Talent foo right</a></p>
    </div>
</footer>

<script
  src="../assets/js/includes/jquery-3.3.1.min.js"></script>
<script src="../assets/js/common_talent.js"></script>
<script src="../assets/js/includes/bootstrap.js"></script>

</body>
</html>