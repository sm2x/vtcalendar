<?php
require_once('config.inc.php');
require_once('session_start.inc.php');
	require_once('application.inc.php');

	if (isset($_GET['id'])) { setVar($id,$_GET['id'],'searchkeywordid'); } else { unset($id); }

	if (!authorized()) { exit; }
	if (!$_SESSION['AUTH_ISCALENDARADMIN']) { exit; } // additional security

	$query = "DELETE FROM vtcal_searchkeyword WHERE calendarid='".sqlescape($_SESSION['CALENDAR_ID'])."' AND id='".sqlescape($id)."'";
	$result = DBQuery($query );
	redirect2URL("managesearchkeywords.php");
	exit;
?>