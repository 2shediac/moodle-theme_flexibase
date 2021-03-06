<?php
// This file is part of The Bootstrap 3 Moodle theme
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Flexibase layout file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */

global $PAGE, $USER;
$pageid = $PAGE->bodyid;
$showlogo = (empty($PAGE->theme->settings->showlogo)) ? 'everywhere' : $PAGE->theme->settings->showlogo;
?>

<nav role="navigation" class='navbar navbar-<?php echo $topbarcolour; ?> navbarbranding'>
    <div class="container-fluid">
        <div class="navbar-header">

            <?php
            if ($hasnavbarlogo) {
            ?>
                <div class="navbar-image">&nbsp;</div>
                <span class="navbar-brand"><?php echo $SITE->shortname; ?></span>
            <?php
            } else {
            ?>
                <span class="navbar-brand">
                    <i class="fa fa-lg fa-<?php echo theme_flexibase_get_setting('falogo'); ?>">&nbsp;</i>
                    <?php echo $SITE->shortname?>
                </span>
            <?php
            }
            ?>
        </div>
    </div>
</nav>
<?php
if (isloggedin() ) {
?>
    <div class="navbaruserpicture">
        <?php echo $OUTPUT->user_picture($USER, array('link' => false, 'size' => 75)); ?>
    </div>
<?php
}
?>

<header class="moodleheader">
    <div class="headerimage <?php echo $moodleheaderclass;?>"  style="background-image: url('<?php echo $headerimage;?>')">
        <div class="container-fluid">
            <div class="headerlogo col-md-8 pull-left">
                <?php
                if ($pageid !== 'page-site-index' && $showlogo == 'frontpage') {
                ?>
                    <a href="#" class="nologo"></a>
                <?php
                } else {
                ?>
                    <a href="#" class="logo"></a>
                <?php
                }
                ?>
                <?php echo $OUTPUT->page_heading(); ?>
            </div>
        </div>
    </div>
</header>
