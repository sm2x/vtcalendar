<?php
require_once('config.inc.php');
require_once('session_start.inc.php');
require_once('application.inc.php');

	helpwindow_header();
?>
<h3><IMG src="images/help.gif" width="16" height="16" alt="" border="0">
<?php echo lang('help_addevent'); ?>
</h3>
<?php echo lang('help_addevent_contents'); ?>
<?php
	helpwindow_footer();
?>