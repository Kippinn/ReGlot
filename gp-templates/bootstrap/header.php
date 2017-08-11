<?php
// wp_enqueue_style('base');
wp_enqueue_script('common');
?>
<!doctype html>
<html dir="ltr" ><!-- lang="de-DE" -->
    <head>
        <meta charset="utf-8">
        <title><?php echo gp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php gp_head(); ?>
        <!-- favicon.ico and touch icons -->
        <link rel="shortcut icon" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/ico/apple-touch-icon-57-precomposed.png">

        <!-- <link rel="stylesheet" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/bootstrap3/css/bootstrap.min.css" type="text/css" media="all" /> -->
        <link rel="stylesheet" href="<?php echo gp_url('/'); ?>gp-templates/bootstrap/bootstrap3/css/font-awesome.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.css" type="text/css" media="all" />
         <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo gp_url('/'); ?>gp-templates/bootstrap/bootstrap3/js/bootstrap.js"></script>

        <style type="text/css">

            /* Sticky footer styles
            -------------------------------------------------- */

            html,
            body {
                padding-top: 40px;
            }

            /* Wrapper for page content to push down footer */
            #wrap {
                min-height: 100%;
                height: auto !important;
                height: 100%;
                /* Negative indent footer by it's height */
                margin: 0px auto -60px;
            }

            /* Set the fixed height of the footer here */
            #push {
                height: 80px;
            }
            #footer {
                height: 60px;
            }
            #footer {
                background-color: #f5f5f5;
            }
            #footer p {
                margin: 20px;
            }

            /* Lastly, apply responsive CSS fixes as necessary */
            @media (max-width: 767px) {
                #footer {
                    margin-left: -20px;
                    margin-right: -20px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
            }

            table.translations, table.translation-sets {
                border-spacing: 0.1em;
                font-size: 90%;
                width: 100%;
            }
            table.translations thead th, table.translations tfoot th, table.translation-sets thead th, table.translations tfoot th {
                background-color: #555555;
                color: #EEEEEE;
                font-weight: bold;
                padding: 0.5em;
            }
            table.translations tr, table.translation-sets tr {
                border: 0 none;
            }
            table.translations td.translation ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
            table.translations td.translation li {
                border-bottom: 1px dotted #CCCCCC;
                padding-bottom: 0.25em;
            }
            table.translations td.translation li:last-child {
                border-bottom: medium none;
                padding-bottom: 0;
            }
            table.translations td.translation span.missing {
                color: #DDDDDD;
                font-style: italic;
            }
            table.translations td.translation span.missing a {
                color: #CCCCCC;
                font-style: italic;
            }
            table.translations td, table.translations th, table.translation-sets td, table.translation-sets th {
                border: 1px solid #EEEEEE;
                border-spacing: 0;
                margin: 0;
                padding: 0.5em;
            }
            table.translations td.checkbox {
                text-align: center;
                vertical-align: middle;
            }
            th.checkbox input[type="checkbox"] {
                margin: 0;
            }
            table.translations td.priority {
                font-size: 1.3em;
                text-align: center;
            }
            table.translations td.actions {
                text-align: center;
            }
            table.translations td.original, table.translations td.translation {
                width: 40%;
            }
            table.translations th.original, table.translations th.translation {
                width: 45%;
            }
            table.translations.originals th.original, table.translations.originals td.original {
                width: 20%;
            }
            table.translations.originals th.translation, table.translations.originals td.translation {
                width: 40%;
            }
            table.translations.originals th.comment, table.translations.originals td.comment {
                width: 40%;
            }
            table.translations tr.even {
                background-color: #FCFCFC;
            }
            table.translations tr.editor {
                background-color: #F8FFEC;
                display: none;
            }
            table.translations tr.preview.status-fuzzy, #legend .status-fuzzy {
                background-color: #FFCC66;
            }
            table.translations tr.preview.status-current, #legend .status-current {
                background-color: #E9FFD8;
            }
            table.translations tr.preview.status-old, #legend .status-old {
                background-color: #FEE4F8;
            }
            table.translations tr.preview.status-waiting, #legend .status-waiting {
                background-color: #FFFFC2;
            }
            table.translations tr.preview.status-rejected, #legend .status-rejected {
                background-color: #FF8E8E;
            }
            table.translations tr.preview.has-warnings td.original, div#legend div.has-warnings {
                border-left: 2px solid red;
            }
            table.translations a.action {
                font-size: 100%;
                font-style: normal;
            }
            .editor .original {
                font-weight: bold;
                white-space: pre-wrap;
                width: 50em;
            }
            .editor .strings {
                float: left;
                width: 60%;
            }
            .editor .strings p.plural-numbers {
                color: #555555;
                font-size: 0.75em;
                margin-bottom: 0;
            }
            .editor .strings p.plural-numbers span.numbers {
                font-weight: bold;
            }
            .editor .textareas, .editor .actions {
                clear: both;
            }
            .editor .textareas textarea {
                min-height: 13em;
                width: 50em;
            }
            .editor .meta {
                float: left;
                margin-left: 2em;
            }
            .editor .meta dl {
                margin: 0.1em 1em;
            }
            .editor .meta dt, .editor .meta dd {
                display: inline;
                margin: 0;
            }
            .editor .meta dt {
                margin-right: 0.5em;
            }
            .editor .meta dt {
                margin-right: 0.5em;
            }
            .editor .meta dd {
                color: #444444;
                font-weight: bold;
            }
            .project-list li {
                border: 1px solid #CCCCCC;
                margin-bottom: 2px;
            }
            .project-list li.new-project {
                border: 0;
            }
            .project-list li.new-project a {
                float: left;
            }
            .project-list > li.new-project:hover {
                background: none;
            }
            .project-list > li:hover {
                background-color: #EEEEEE;
            }
            .project-list a.project-title {
                float: left;
            } 
            .project-list .action {
                float: right;
                margin-right: 5px;
            }
            .pagination>li:first-child>a, .pagination>li:first-child>span {
                margin-left: 0;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }
            #legend{margin-top:1em;}#legend div{float:left;line-height:1.5em;margin-right:0.5em;}
            #legend .box{border:1px solid #CCCCCC;height:1.5em;padding:0;width:1.5em;}
            #legend .status-fuzzy{background-color:#FFCC66;}
            #legend .status-current{background-color:#E9FFD8;}
            #legend .status-old{background-color:#FEE4F8;}
            #legend .status-waiting{background-color:#FFFFC2;}
            #legend .status-rejected{background-color:#FF8E8E;}
            #legend div.has-warnings{border-left:2px solid red;}
            .pagination-right {
                float: right;
                margin: 0;
            }
        </style>    
    </head>
    <body class="no-js">
        <div id="wrap">
            <script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo gp_url('/'); ?>"><i class="fa fa-globe" aria-hidden="true"></i> Re-Glot</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <?php
                                if (gp_get_option('public_home') == 'on') {
                                    ?>
                                    <li><a href="<?php echo gp_url_project() ?>"><i class="fa fa-folder-open" aria-hidden="true"></i> <?php _e('Projects'); ?></a></li>
                                    <li><a href="<?php echo gp_url_by_translation() ?>"><i class="fa fa-comment" aria-hidden="true"></i> <?php _e('Translations'); ?></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-wrench" aria-hidden="true"></i> <?php _e('Tools'); ?>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
<?php $tools_config = apply_filters('gp_tools', array()); ?>
                                            <?php if (empty($tools_config)) { ?>
                                            <li class="nav-header"><i class="icon-warning-sign"></i> <?php echo _e('No Tools'); ?></li>
                                            <?php } else { ?>
                                            <?php foreach ($tools_config as $section => $tools) { ?>
                                                <li class="nav-header"><?php echo $section; ?></li>
                                                <?php foreach ($tools as $tool) { ?>
                                                    <?php if (!$tool['admin_only'] || GP::$user->current()->admin()) { ?>
                                                        <li><a href="<?php echo gp_url_join(gp_url(), 'tool', $tool['link']); ?>" class="nav-link" title="<?php echo $tool['description'] ?>"><?php echo $tool['title'] ?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <?php
                                if (GP::$user && GP::$user->logged_in()) {
                                    ?>
                                    <?php if (GP::$user && GP::$user->logged_in() && GP::$user->admin()) { ?>
                                    <li><a href="<?php echo gp_url_settings() ?>" class="navbar-link"><i class="fa fa-cog" aria-hidden="true"></i> <?php _e('Settings'); ?></a></li>
                                    <?php } ?>
                                    <li><a href="<?php echo gp_url_user_profile() ?>" class="navbar-link"><i class="fa fa-edit" aria-hidden="true"></i> <?php _e('Profile'); ?></a></li>
                                    <li><a href="<?php echo gp_url_users() ?>" class="navbar-link"><i class="fa fa-users" aria-hidden="true"></i> <?php _e('Users'); ?></a></li>
                                    <li><a href="<?php echo gp_url_logout() ?>" class="navbar-link"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php _e('Log out'); ?></a></li>
                                        <?php
                                    } else if (GP::$user) {
                                        ?>
                                        <?php if (gp_get_option('user_registration') == 'on') { ?>
                                            <li><a href="<?php echo gp_url_register(); ?>" class="navbar-link"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php _e('Register'); ?></a></li>
                                        <?php } ?>
                                        <li><a href="<?php echo gp_url_login(); ?>" class="navbar-link"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php _e('Log in'); ?></a></li>
                                    <?php } ?>
                            </ul>
                        </div><!--/.nav-collapse -->

                </div>
            </div>
            <div class="container content">
                <?php echo gp_breadcrumb(); ?>
                <div id="gp-js-message"></div>
                <?php if (gp_notice('error')): ?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo gp_notice('error'); //TODO: run kses on notices  ?>
                    </div>
                <?php endif; ?>
                <?php if (gp_notice()): ?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo gp_notice(); ?>
                    </div>
                <?php endif; ?>
                <?php do_action('after_notices'); ?>
