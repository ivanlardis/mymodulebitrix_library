<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?IncludeTemplateLangFile(__FILE__);?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>


    <?$APPLICATION->ShowHead();?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <!-- Bootstrap Core CSS
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/bower_components/bootstrap/dist/css/bootstrap.min.css",        true);?>
    <!-- MetisMenu CSS
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/bower_components/metisMenu/dist/metisMenu.min.css",        true);?>
    <!-- Custom CSS
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/dist/css/sb-admin-2.css",        true);?>
    <!-- Custom Fonts
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/bower_components/font-awesome/css/font-awesome.min.css",        true);?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    >
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/html5shiv.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/respond.min.js", true);?>
    <![endif]-->

</head>

<body>
<?$APPLICATION->ShowPanel();?>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/firmname.php"
                    ));
                ?>

            </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            &nbsp;<?$APPLICATION->IncludeComponent(
                "bitrix:system.auth.form",
                "myavt",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "FORGOT_PASSWORD_URL" => "",
                    "PROFILE_URL" => "",
                    "REGISTER_URL" => "",
                    "SHOW_ERRORS" => "N"
                )
            );?>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <!-- поиск -->
                    <!--
                    <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                </li>-->
                    <!--  поиск -->



                    <!-- меню -->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        Array(
                            "COMPONENT_TEMPLATE" => "top_menu",
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MAX_LEVEL" => "2",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        )
                    );?>


                    <!-- меню -->


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">