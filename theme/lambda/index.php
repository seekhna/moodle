<!DOCTYPE html>
<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>Lambda - Responsive Moodle Theme - Live Demo: Log in to the site</title>
    <link rel="shortcut icon" href="http://lambda.redpithemes.com/theme/image.php/lambda/theme/1613152043/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Lambda - Responsive Moodle Theme - Live Demo: Log in to the site" />
<link rel="stylesheet" type="text/css" href="http://lambda.redpithemes.com/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://lambda.redpithemes.com/theme/styles.php/lambda/1613152043_1/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"http:\/\/lambda.redpithemes.com","sesskey":"Ps4y0mDyFF","themerev":"1613152043","slasharguments":1,"theme":"lambda","iconsystemmodule":"core\/icon_system_standard","jsrev":"1613152043","admin":"admin","svgicons":true,"usertimezone":"Europe\/Berlin","contextid":1};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"http:\/\/lambda.redpithemes.com\/lib\/yuilib\/3.17.2\/","comboBase":"http:\/\/lambda.redpithemes.com\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"http:\/\/lambda.redpithemes.com\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"http:\/\/lambda.redpithemes.com\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"http:\/\/lambda.redpithemes.com\/theme\/yui_combo.php?m\/1613152043\/","combine":true,"comboBase":"http:\/\/lambda.redpithemes.com\/theme\/yui_combo.php?","ext":false,"root":"m\/1613152043\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-event":{"requires":["event-custom"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-format_grid-gridkeys":{"requires":["event-nav-keys"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-beautify":{},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"http:\/\/lambda.redpithemes.com\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"http:\/\/lambda.redpithemes.com\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1613152043\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"http:\/\/lambda.redpithemes.com\/lib\/javascript.php\/1613152043\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"http:\/\/lambda.redpithemes.com\/lib\/javascript.php\/1613152043\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400%7CRaleway:500" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" crossorigin="anonymous">
</head>

<body  id="page-login-index" class="format-site  path-login dir-ltr lang-en yui-skin-sam yui3-skin-sam lambda-redpithemes-com pagelayout-login course-1 context-1 notloggedin login_lambda has-region-footer-left used-region-footer-left has-region-footer-middle used-region-footer-middle has-region-footer-right used-region-footer-right" >

<div class="skiplinks">
    <a href="#maincontent" class="skip">Skip to main content</a>
</div><script type="text/javascript" src="http://lambda.redpithemes.com/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="http://lambda.redpithemes.com/theme/jquery.php/core/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http://lambda.redpithemes.com/theme/jquery.php/theme_lambda/jquery.easing.min.1.4.js"></script>
<script type="text/javascript" src="http://lambda.redpithemes.com/theme/jquery.php/theme_lambda/scripts.js"></script>
<script type="text/javascript" src="http://lambda.redpithemes.com/theme/jquery.php/theme_lambda/camera.js"></script>
<script type="text/javascript" src="http://lambda.redpithemes.com/theme/jquery.php/theme_lambda/bxslider.js"></script>
<script type="text/javascript" src="http://lambda.redpithemes.com/lib/javascript.php/1613152043/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<div id="wrapper" style="border-top: none;">


<div id ="page-header-nav" class="clearfix">
       
    <div class="container-fluid">    
    <div class="row-fluid">
    <!-- HEADER: LOGO AREA -->
        	
                            <div class="logo-header">
                	<a class="logo" href="http://lambda.redpithemes.com" title="Home">
                    <img src="//lambda.redpithemes.com/pluginfile.php/1/theme_lambda/logo/1613152043/logo-site.png" class="logo" alt="logo" />                    </a>
                </div>
             
            
    </div>
    </div>
               
</div>


<div id="page" class="container-fluid" style="background-clip:padding-box;background-color: rgba(255, 255, 255, 0.85);border: 8px solid rgba(255, 255, 255, 0.35);border-radius: 3px; margin-top: 25px;">

    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
        
            <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><div class="loginbox clearfix twocolumns">

    <div class="loginpanel">

        <h2>Log in</h2>

        <div class="subcontent loginsub">
            <form action="http://lambda.redpithemes.com/login/index.php" method="post" id="login">
                <div class="loginform">
                    <div class="form-label">
                        <label for="username">
                                Username
                        </label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="username" id="username" size="15" value="" autocomplete="username">
                    </div>
                    <div class="clearer"><!-- --></div>
                    <div class="form-label">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" id="password" size="15" value="" autocomplete="current-password">
                    </div>
                </div>

                <div class="clearer"><!-- --></div>
                    <div class="rememberpass">
                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                        <label for="rememberusername">Remember username</label>
                    </div>
                <div class="clearer"><!-- --></div>
                <input id="anchor" type="hidden" name="anchor" value="" />
                <script>document.getElementById('anchor').value = location.hash;</script>
                <input type="hidden" name="logintoken" value="79w2DwsRmfcVMJAbL81GMex6dNxVNQky">
                <input type="submit" id="loginbtn" value="Log in" />
                <div class="forgetpass">
                    <a href="http://lambda.redpithemes.com/login/forgot_password.php">Forgotten your username or password?</a>
                </div>
            </form>

            <div class="desc">
                Cookies must be enabled in your browser
                <span class="helptooltip">
    <a href="http://lambda.redpithemes.com/help.php?component=moodle&amp;identifier=cookiesenabled&amp;lang=en" title="Help with Cookies must be enabled in your browser" aria-haspopup="true" target="_blank"><img class="icon iconhelp" alt="Help with Cookies must be enabled in your browser" title="Help with Cookies must be enabled in your browser" src="http://lambda.redpithemes.com/theme/image.php/lambda/core/1613152043/help" /></a>
</span>
            </div>

        </div>

            <div class="subcontent guestsub">
                <div class="desc">Some courses may allow guest access</div>
                <form action="http://lambda.redpithemes.com/login/index.php" method="post" id="guestlogin">
                    <div class="guestform">
                        <input type="hidden" name="logintoken" value="79w2DwsRmfcVMJAbL81GMex6dNxVNQky">
                        <input type="hidden" name="username" value="guest" />
                        <input type="hidden" name="password" value="guest" />
                        <input type="submit" value="Log in as a guest" />
                    </div>
                </form>
            </div>

    </div>

    <div class="signuppanel">
        <h2>Is this your first time here?</h2>
        <div class="subcontent">
            <div style="text-align:center;padding:10px;background:rgb(238,238,238) none repeat scroll 0px 0px;"><span style="font-size:18px;">For full access to courses you'll need to take a minute to create a new account for yourself on this web site. Please make sure that you have a valid email address, as you will be asked for this during registration. </span><br /><img src="http://www.redpithemes.com/images/arrow_login.png" alt="signup" style="margin-left:auto;margin-right:auto;" class="img-responsive" height="160" width="121" /></div><br /><p style="text-align:center;"><a class="btn btn-primary" href="#">Create new account</a></p><div class="alert alert-danger" style="margin-top:15px;"><strong>Note:</strong> Only guest access is available for this demo site.</div>
        </div>

    </div>
</div></div>        </section>
    </div>
    
    <a href="#top" class="back-to-top"><span class="lambda-sr-only">Back</span></a>
    
</div>

	<footer id="page-footer" class="container-fluid" style="display:none;">
			<div class="row-fluid">
		<aside id="block-region-footer-left" class="span4 block-region" data-blockregion="footer-left" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Skip Calendar</a><div id="inst3" class="block_calendar_month block" role="complementary" data-block="calendar_month" data-instanceid="3" aria-labelledby="instance-3-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-3-header">Calendar</h2></div></div><div class="content"><div id="calendar-month-2021-April-607178dd9539d607178dd953a21"  data-template="core_calendar/month_mini"  data-includenavigation="false" data-mini="true">
    <div id="month-mini-2021-April-607178dd9539d607178dd953a21" class="calendarwrapper" data-courseid="1" data-categoryid="0" data-month="4" data-year="2021" data-view="month">
        <span class="overlay-icon-container hidden" data-region="overlay-icon-container">
            <span class="loading-icon icon-no-margin"><img class="icon " alt="Loading" title="Loading" src="http://lambda.redpithemes.com/theme/image.php/lambda/core/1613152043/i/loading" /></span>
        </span>
        <table class="minicalendar calendartable">
            <caption class="calendar-controls">
                    <h3>
                        <a href="http://lambda.redpithemes.com/calendar/view.php?view=month&time=1618049245" title="This month">April 2021</a>
                    </h3>
            </caption>
            <thead>
              <tr>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Sunday">Sun</abbr>
                    </th>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Monday">Mon</abbr>
                    </th>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Tuesday">Tue</abbr>
                    </th>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Wednesday">Wed</abbr>
                    </th>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Thursday">Thu</abbr>
                    </th>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Friday">Fri</abbr>
                    </th>
                    <th class="header text-xs-center" scope="col">
                        <abbr title="Saturday">Sat</abbr>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr data-region="month-view-week">
                        <td class="dayblank">&nbsp;</td>
                        <td class="dayblank">&nbsp;</td>
                        <td class="dayblank">&nbsp;</td>
                        <td class="dayblank">&nbsp;</td>
                        <td class="day text-center" data-day-timestamp="1617228000">
                                1
                            </td>
                        <td class="day text-center" data-day-timestamp="1617314400">
                                2
                            </td>
                        <td class="day text-center weekend" data-day-timestamp="1617400800">
                                3
                            </td>
                </tr>
                <tr data-region="month-view-week">
                        <td class="day text-center weekend" data-day-timestamp="1617487200">
                                4
                            </td>
                        <td class="day text-center" data-day-timestamp="1617573600">
                                5
                            </td>
                        <td class="day text-center" data-day-timestamp="1617660000">
                                6
                            </td>
                        <td class="day text-center" data-day-timestamp="1617746400">
                                7
                            </td>
                        <td class="day text-center" data-day-timestamp="1617832800">
                                8
                            </td>
                        <td class="day text-center" data-day-timestamp="1617919200">
                                9
                            </td>
                        <td class="day text-center today weekend" data-day-timestamp="1618005600">
                                    <a  href="http://lambda.redpithemes.com/calendar/view.php?view=day&amp;time=1618005600" id="calendar-day-popover-link-1-2021-99-607178dd9539d607178dd953a21" data-container="body" data-toggle="popover" data-html="true" data-trigger="hover" data-placement="top" data-title="Today Saturday, 10 April" data-alternate="No events">10</a>
    <div class="hidden">
        
    </div>
                            </td>
                </tr>
                <tr data-region="month-view-week">
                        <td class="day text-center weekend" data-day-timestamp="1618092000">
                                11
                            </td>
                        <td class="day text-center" data-day-timestamp="1618178400">
                                12
                            </td>
                        <td class="day text-center" data-day-timestamp="1618264800">
                                13
                            </td>
                        <td class="day text-center" data-day-timestamp="1618351200">
                                14
                            </td>
                        <td class="day text-center" data-day-timestamp="1618437600">
                                15
                            </td>
                        <td class="day text-center" data-day-timestamp="1618524000">
                                16
                            </td>
                        <td class="day text-center weekend" data-day-timestamp="1618610400">
                                17
                            </td>
                </tr>
                <tr data-region="month-view-week">
                        <td class="day text-center weekend" data-day-timestamp="1618696800">
                                18
                            </td>
                        <td class="day text-center" data-day-timestamp="1618783200">
                                19
                            </td>
                        <td class="day text-center" data-day-timestamp="1618869600">
                                20
                            </td>
                        <td class="day text-center" data-day-timestamp="1618956000">
                                21
                            </td>
                        <td class="day text-center" data-day-timestamp="1619042400">
                                22
                            </td>
                        <td class="day text-center" data-day-timestamp="1619128800">
                                23
                            </td>
                        <td class="day text-center weekend" data-day-timestamp="1619215200">
                                24
                            </td>
                </tr>
                <tr data-region="month-view-week">
                        <td class="day text-center weekend" data-day-timestamp="1619301600">
                                25
                            </td>
                        <td class="day text-center" data-day-timestamp="1619388000">
                                26
                            </td>
                        <td class="day text-center" data-day-timestamp="1619474400">
                                27
                            </td>
                        <td class="day text-center" data-day-timestamp="1619560800">
                                28
                            </td>
                        <td class="day text-center" data-day-timestamp="1619647200">
                                29
                            </td>
                        <td class="day text-center" data-day-timestamp="1619733600">
                                30
                            </td>
                        <td class="dayblank">&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
</div></div></div><span class="skip-block-to" id="sb-1"></span></aside><aside id="block-region-footer-middle" class="span4 block-region" data-blockregion="footer-middle" data-droptarget="1"><a class="skip skip-block" id="fsb-2" href="#sb-2">Skip Useful Links</a><div id="inst66" class="block_html block" role="complementary" data-block="html" data-instanceid="66" aria-labelledby="instance-66-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-66-header">Useful Links</h2></div></div><div class="content"><div class="no-overflow"><ul style="list-style: none; margin-top: 10px; margin-left: 10px;">
    <li style="line-height: 23px;"><span class="maincolor"><i class="fas fa-angle-right" style="width: 15px;"></i></span> <a href="/mod/book/view.php?id=308" style="color: #bdc3c7">Features</a></li>
    <li style="line-height: 23px;"><span class="maincolor"><i class="fas fa-angle-right" style="width: 15px;"></i></span> <a href="/mod/book/view.php?id=310" style="color: #bdc3c7">Components</a></li>
    <li style="line-height: 23px;"><span class="maincolor"><i class="fas fa-angle-right" style="width: 15px;"></i></span> <a href="https://redpithemes.ticksy.com/" style="color: #bdc3c7" target="_blank">Support</a></li>
    <li style="line-height: 23px;"><span class="maincolor"><i class="fas fa-angle-right" style="width: 15px;"></i></span> <a href="http://redpithemes.com/Documentation/assets/index.html" style="color: #bdc3c7" target="_blank">Documentation</a></li>
    <li style="line-height: 23px;"><span class="maincolor"><i class="fas fa-shopping-cart" style="width: 18px; margin-left: -3px;"></i></span> <a href="https://themeforest.net/item/lambda-responsive-moodle-theme/9442816?ref=eva_pi" style="color: #bdc3c7" target="_blank">Buy Theme Lambda now</a></li>
</ul></div></div></div><span class="skip-block-to" id="sb-2"></span></aside><aside id="block-region-footer-right" class="span4 block-region" data-blockregion="footer-right" data-droptarget="1"><a class="skip skip-block" id="fsb-3" href="#sb-3">Skip Lambda School</a><div id="inst67" class="block_html block" role="complementary" data-block="html" data-instanceid="67" aria-labelledby="instance-67-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-67-header">Lambda School</h2></div></div><div class="content"><div class="no-overflow"><address>308 Negra Arroyo Lane, Albuquerque, New Mexico, 87104</address>
<i class="fas fa-phone"></i>&nbsp; Phone: (007) 123-456 <br>
<i class="far fa-envelope"></i>&nbsp; E-mail: <a href="mailto:info@lambda-school.com">info@lambda-school.com</a>
<h6>Connect with us:</h6>
<div class="social_icons pull-right">
<a class="social fab fa-facebook" target="_blank" href="#"> </a>
<a class="social fab fa-pinterest" target="_blank" href="#"> </a>
<a class="social fab fa-twitter" target="_blank" href="#"> </a>
<a class="social fab fa-google-plus" target="_blank" href="#"> </a>
</div></div></div></div><span class="skip-block-to" id="sb-3"></span></aside> 	</div>

	<div class="footerlinks">
    	<div class="row-fluid">
    		<p class="helplink"></p>
    		<div class="footnote"><p>(c) 2021 | Designed with <a href="https://themeforest.net/item/lambda-responsive-moodle-theme/9442816" target="_blank" rel="noreferrer noopener">Lambda  </a>- Premium Moodle Theme<br /></p></div>		</div>
        
            		
    	        
   	</div><div class="logininfo">You are not logged in.</div>	</footer>

    <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'http://lambda.redpithemes.com/lib/requirejs.php/1613152043/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'http://lambda.redpithemes.com/lib/javascript.php/1613152043/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'http://lambda.redpithemes.com/lib/javascript.php/1613152043/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'http://lambda.redpithemes.com/lib/javascript.php/1613152043/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="http://lambda.redpithemes.com/lib/javascript.php/1613152043/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "http://lambda.redpithemes.com/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("en",{
 "Audio Player": "Audio Player",
 "Video Player": "Video Player",
 "Play": "Play",
 "Pause": "Pause",
 "Replay": "Replay",
 "Current Time": "Current Time",
 "Duration Time": "Duration Time",
 "Remaining Time": "Remaining Time",
 "Stream Type": "Stream Type",
 "LIVE": "LIVE",
 "Loaded": "Loaded",
 "Progress": "Progress",
 "Progress Bar": "Progress Bar",
 "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
 "Fullscreen": "Fullscreen",
 "Non-Fullscreen": "Non-Fullscreen",
 "Mute": "Mute",
 "Unmute": "Unmute",
 "Playback Rate": "Playback Rate",
 "Subtitles": "Subtitles",
 "subtitles off": "subtitles off",
 "Captions": "Captions",
 "captions off": "captions off",
 "Chapters": "Chapters",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions off",
 "Audio Track": "Audio Track",
 "Volume Level": "Volume Level",
 "You aborted the media playback": "You aborted the media playback",
 "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
 "No compatible source was found for this media.": "No compatible source was found for this media.",
 "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
 "Play Video": "Play Video",
 "Close": "Close",
 "Close Modal Dialog": "Close Modal Dialog",
 "Modal Window": "Modal Window",
 "This is a modal window": "This is a modal window",
 "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
 ", opens captions settings dialog": ", opens captions settings dialog",
 ", opens subtitles settings dialog": ", opens subtitles settings dialog",
 ", opens descriptions settings dialog": ", opens descriptions settings dialog",
 ", selected": ", selected",
 "captions settings": "captions settings",
 "subtitles settings": "subititles settings",
 "descriptions settings": "descriptions settings",
 "Text": "Text",
 "White": "White",
 "Black": "Black",
 "Red": "Red",
 "Green": "Green",
 "Blue": "Blue",
 "Yellow": "Yellow",
 "Magenta": "Magenta",
 "Cyan": "Cyan",
 "Background": "Background",
 "Window": "Window",
 "Transparent": "Transparent",
 "Semi-Transparent": "Semi-Transparent",
 "Opaque": "Opaque",
 "Font Size": "Font Size",
 "Text Edge Style": "Text Edge Style",
 "None": "None",
 "Raised": "Raised",
 "Depressed": "Depressed",
 "Uniform": "Uniform",
 "Dropshadow": "Dropshadow",
 "Font Family": "Font Family",
 "Proportional Sans-Serif": "Proportional Sans-Serif",
 "Monospace Sans-Serif": "Monospace Sans-Serif",
 "Proportional Serif": "Proportional Serif",
 "Monospace Serif": "Monospace Serif",
 "Casual": "Casual",
 "Script": "Script",
 "Small Caps": "Small Caps",
 "Reset": "Reset",
 "restore all settings to the default values": "restore all settings to the default values",
 "Done": "Done",
 "Caption Settings Dialog": "Caption Settings Dialog",
 "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
 "End of dialog window.": "End of dialog window."
});

    });
});;

require(['jquery', 'theme_bootstrapbase/bootstrap'], function($) {
    require(['theme_bootstrapbase/bootstrap'], function() {
        var target = $("#calendar-day-popover-link-1-2021-99-607178dd9539d607178dd953a21");
        target.popover({
            content: function() {
                var source = target.next().find("> *:not('.hidden')");
                var content = $('<div>');

                if (source.length) {
                    content.html(source.clone(false));
                } else {
                    content.html(target.data('alternate'));
                }

                return content.html();
            }
        });
    });
});
;

require([
    'jquery',
    'core_calendar/selectors',
    'core_calendar/events',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $('body').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-607178dd9539d607178dd953a21-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-2021-April-607178dd9539d607178dd953a21")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass('hidden', !!data.hidden);
        M.util.js_complete("month-mini-607178dd9539d607178dd953a21-filterChanged");
    });
});
;

require(['jquery', 'core_calendar/calendar_mini'], function($, CalendarMini) {
    CalendarMini.init($("#calendar-month-2021-April-607178dd9539d607178dd953a21"), !1);
});
;

require(['core/yui'], function(Y) {
    M.util.init_skiplink(Y);
});
;

;
M.util.js_pending('core/log');
require(['core/log'], function(amd) {
    amd.setConfig({"level":"warn"});
    M.util.js_complete('core/log');
});;
M.util.js_pending('core/page_global');
require(['core/page_global'], function(amd) {
    amd.init();
    M.util.js_complete('core/page_global');
});M.util.js_complete("core/first");
});
//]]>
</script>
<script type="text/javascript" src="http://lambda.redpithemes.com/theme/javascript.php/lambda/1613152043/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","morehelp":"More help","loadinghelp":"Loading...","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} alias\/shortcut files that use this file as their source","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
M.util.init_block_hider(Y, {"id":"inst3","title":"Calendar","preference":"block3hidden","tooltipVisible":"Hide Calendar block","tooltipHidden":"Show Calendar block"});
M.util.init_block_hider(Y, {"id":"inst66","title":"Useful Links","preference":"block66hidden","tooltipVisible":"Hide Useful Links block","tooltipHidden":"Show Useful Links block"});
M.util.init_block_hider(Y, {"id":"inst67","title":"Lambda School","preference":"block67hidden","tooltipVisible":"Hide Lambda School block","tooltipHidden":"Show Lambda School block"});
 M.util.js_pending('random607178dd953a26'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random607178dd953a26'); });
})();
//]]>
</script>

<!--[if lte IE 9]>
<script src="http://lambda.redpithemes.com/theme/lambda/javascript/ie/iefix.js"></script>
<![endif]-->

</body>
</html>