<nav role="navigation" class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#moodle-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $CFG->wwwroot;?>"><i class="fa fa-home">&nbsp;</i><?php echo $SITE->shortname; ?></a>
    </div>

    <div id="moodle-navbar" class="navbar-collapse collapse">
        <?php echo $OUTPUT->custom_menu(); ?>
        <?php echo $OUTPUT->user_menu(); ?>
        <ul class="nav pull-right">
            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
        </ul>
    </div>
    </div>
</nav>
<header class="moodleheader">
    <div class="container-fluid">
    <a href="<?php echo $CFG->wwwroot ?>" class="logo"></a>
    <?php echo $OUTPUT->page_heading(); ?>
    </div>
</header>
