<?php
require_once('application.inc.php');

if (!authorized()) { exit; }

pageheader(lang('update_calendar'), "Update");

?>

<!-- Start Link Table -->
<div id="UpdateBlock"><div style="border: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;">

<?php
if (isset($_GET['fbid'])) { $fbid = $_GET['fbid']; } else { unset($fbid); }
if (isset($_GET['fbparam'])) { $fbparam = $_GET['fbparam']; } else { unset($fbparam); }
if ( isset($fbid) ) {
	$startHTML = '<div class="NotificationBG" style="padding: 8px; border-bottom: 1px solid '.$_SESSION['COLOR_BORDER'].';">';
	$endHTML = '</div>';
	if ($fbid=="eaddsuccess" && !$_SESSION['AUTH_ISCALENDARADMIN']) {
		echo $startHTML;
		feedback(lang('new_event_submitted_notice')." ".stripslashes(urldecode("\"$fbparam\"")),FEEDBACKPOS);
		echo $endHTML;
	}
	elseif ($fbid=="eupdatesuccess" && !$_SESSION['AUTH_ISCALENDARADMIN'] ) {
		echo $startHTML;
		feedback(lang('updated_event_submitted_notice')." ".stripslashes(urldecode("\"$fbparam\"")),FEEDBACKPOS);
		echo $endHTML;
	}
	elseif ($fbid=="urlchangesuccess") {
		echo $startHTML;
		feedback(lang('hompage_changed_notice')." ".stripslashes(urldecode("\"$fbparam\"")),FEEDBACKPOS);
		echo $endHTML;
	}
	elseif ($fbid=="emailchangesuccess") {
		echo $startHTML;
		feedback(lang('email_changed_notice')." ".stripslashes(urldecode("\"$fbparam\"")),FEEDBACKPOS);
		echo $endHTML;
	}
}

$lang['event_options_header'] = 'Event Options';
$lang['add_event_description'] = 'Add a new event to the calendar.';
$lang['manage_event_description'] = 'View events that have been submitted, and see if they have been approved.';
$lang['manage_template_description'] = 'Create templates to easily add new events with similar information.';

$lang['backup_header'] = 'Backup &amp; Restore';
$lang['export_events_description'] = 'Export events to a file you can save on your computer as a backup, or to transfer to another calendar.';
$lang['import_events_description'] = 'Import an XML file that contains events as a batch.';
$lang['change_homepage_description'] = 'Change the default homepage address that appears when adding new events.';
$lang['change_email_description'] = 'Change the default e-mail that appears when adding new events.';
$lang['options_for'] = 'Options for';
$lang['change_password_of_user_description'] = 'Change the password you use when logging in to the calendar.';

$lang['calendar_options'] = 'Calendar Options';
$lang['approve_reject_event_updates_description'] = 'Approve, edit or deny events that have been submitted by sponsors for this calendar.';
$lang['manage_sponsors_description'] = 'Sponsors are groups of users who submit under a common name, such as &quot;Chess Club&quot;.';
$lang['delete_inactive_sponsors_description'] = 'Automatically remove sponsors who have not submitted events in a specific amount of time.';
$lang['change_header_footer_auth_description'] = 'Change the header and footer HTML, as well as basic colors in the calendar. You can also change whether or not the calendar requires authentication for viewing the events.';
$lang['change_colors_description'] = 'Change the calendar colors to match your web site\'s design.';
$lang['manage_event_categories_description'] = 'Categories are used when a person wants to filter events on the calendar. All events must be assigned to one category.';
$lang['manage_search_keywords_description'] = 'Add, edit and remove keyword synonyms.';
$lang['manage_featured_search_keywords_description'] = 'When a &quot;Featured keyword&quot; is used in a search, a message automatically appears at the top of the search results.';
$lang['view_search_log_description'] = 'You can view a log of all the keywords searched here, which can be useful when you want to create keyword synonyms or featured keywords.';
$lang['manage_users_description'] = 'Add, edit and remove user accounts from the database.';
$lang['manage_calendars_description'] = 'Add, edit and remove calendars as well as set who has \'administrative\' access to the calendar.';
$lang['manage_main_admins_description'] = 'Add, edit and remove users who have full access to the entire calendar system.';
$lang['external_resources'] = 'The following are external links to various VTCalendar resources';
$lang['external_resources_docs'] = 'Documentation';
$lang['external_resources_announce'] = 'New Release Mailing List';
$lang['external_resources_forums'] = 'Forums';
$lang['external_resources_bugs'] = 'Report Bugs';
$lang['community'] = 'VTCalendar Community';
$lang['version_check'] = 'Version Check';
?>

<table id="UpdateMainMenu" width="100%" cellspacing="0" cellpadding="10" border="0">
<tr>
	
	<!-- Start Sponsor Level Column -->
	<td valign="top">
			<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;"><?php echo lang('event_options_header'); ?>:</h2>
			<dl style="margin-top: 0; padding-top: 2px;">
				<dt><a href="addevent.php"><?php echo lang('add_new_event'); ?></a></dt>
				<dd><?php echo lang('add_event_description'); ?></dd>
				<dt><a href="manageevents.php"><?php echo lang('manage_events'); ?></a></dt>
				<dd style="padding-bottom: 4px;"><?php echo lang('manage_event_description'); ?></dd>
				<dt><a href="managetemplates.php"><?php echo lang('manage_templates'); ?></a></dt>
				<dd style="padding-bottom: 4px;"><?php echo lang('manage_template_description'); ?></dd>
			</dl>
			<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;"><?php echo lang('backup_header'); ?>:</h2>
			<dl style="margin-top: 0; padding-top: 2px;">
				<dt><a href="main.php?calendarid=<?php echo urlencode($_SESSION['CALENDAR_ID']); ?>&amp;view=export"><?php echo lang('export_events'); ?></a></dt>
				<dd><?php echo lang('export_events_description'); ?></dd>
				<dt><a href="import.php"><?php echo lang('import_events'); ?></a></dt>
				<dd><?php echo lang('import_events_description'); ?></dd>
			</dl>
		
			<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>; padding-top: 8px;"><?php echo lang('options_for'); ?>: <?php echo htmlentities($_SESSION["AUTH_SPONSORNAME"]); ?>:&nbsp;</h2>
			<dl style="margin-top: 0; padding-top: 2px;">
				<dt><a href="changehomepage.php"><?php echo lang('change_homepage'); ?></a></dt>
				<dd><?php echo lang('change_homepage_description'); ?></dd>
				<dt><a href="changeemail.php"><?php echo lang('change_email'); ?></a></dt>
				<dd><?php echo lang('change_email_description'); ?></dd>
			</dl>
		
		<?php
		if ( $_SESSION['AUTH_LOGINSOURCE'] == "DB" && strlen($_SESSION["AUTH_USERID"]) > strlen(AUTH_DB_USER_PREFIX) && substr($_SESSION["AUTH_USERID"],0,strlen(AUTH_DB_USER_PREFIX)) == AUTH_DB_USER_PREFIX ) {
			?>
			<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>; padding-top: 8px;"><?php echo lang('options_for'); ?>: <?php echo $_SESSION["AUTH_USERID"]; ?>:&nbsp;</h2>
			<dl style="margin-top: 0; padding-top: 2px;">
				<dt><a href="changeuserpassword.php"><?php echo lang('change_password_of_user'); ?></a></dt>
				<dd><?php echo lang('change_password_of_user_description'); ?></dd>
			</dl>
			<?php
		} // end: if ( AUTH_DB ... )
		?>
	</td>
	<!-- End Sponsor Level Column -->
<?php

if ($_SESSION['AUTH_ISCALENDARADMIN']) {
	?>
	<td valign="top" style="border-left: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>; background-color: <?php echo $_SESSION['COLOR_LIGHT_CELL_BG']; ?>;">
		<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;"><?php echo lang('calendar_options'); ?>:&nbsp;</h2>
		<dl style="margin-top: 0; padding-top: 2px;">
			<dt><a href="approval.php"><?php echo lang('approve_reject_event_updates'); ?></a></dt>
			<dd style="padding-bottom: 8px;"><?php echo lang('approve_reject_event_updates_description'); ?></dd>

			<dt style="border-top: 1px dotted <?php echo $_SESSION['COLOR_BORDER']; ?>; padding-top: 6px;"><a href="managesponsors.php"><?php echo lang('manage_sponsors'); ?></a></dt>
			<dd style="padding-bottom: 2px;"><?php echo lang('manage_sponsors_description'); ?></dd>

			<dt><a href="deleteinactivesponsors.php"><?php echo lang('delete_inactive_sponsors'); ?></a></dt>
			<dd style="padding-bottom: 8px;"><?php echo lang('delete_inactive_sponsors_description'); ?></dd>

			<dt style="border-top: 1px dotted <?php echo $_SESSION['COLOR_BORDER']; ?>; padding-top: 6px;"><a href="changecalendarsettings.php"><?php echo lang('change_header_footer_auth'); ?></a></dt>
			<dd style="padding-bottom: 2px;"><?php echo lang('change_header_footer_auth_description'); ?></dd>

			<dt><a href="changecolors.php"><?php echo lang('change_colors'); ?></a></dt>
			<dd style="padding-bottom: 8px;"><?php echo lang('change_colors_description'); ?></dd>

			<dt style="border-top: 1px dotted <?php echo $_SESSION['COLOR_BORDER']; ?>; padding-top: 6px;"><a href="manageeventcategories.php"><?php echo lang('manage_event_categories'); ?></a></dt>
			<dd style="padding-bottom: 8px;"><?php echo lang('manage_event_categories_description'); ?></dd>

			<dt style="border-top: 1px dotted <?php echo $_SESSION['COLOR_BORDER']; ?>; padding-top: 6px;"><a href="managesearchkeywords.php"><?php echo lang('manage_search_keywords'); ?></a></dt>
			<dd><?php echo lang('manage_search_keywords_description'); ?></dd>

			<dt><a href="managefeaturedsearchkeywords.php"><?php echo lang('manage_featured_search_keywords'); ?></a></dt>
			<dd><?php echo lang('manage_featured_search_keywords_description'); ?></dd>

			<dt><a href="viewsearchlog.php"><?php echo lang('view_search_log'); ?></a></dt>
			<dd><?php echo lang('view_search_log_description'); ?></dd>
		</dl>
	</td>
	<?php
}

if ( $_SESSION['AUTH_ISMAINADMIN'] ) {
	?>
	<td valign="top" style="border-left: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>; <?php if (!$_SESSION['AUTH_ISCALENDARADMIN']) echo "background-color: " . $_SESSION['COLOR_LIGHT_CELL_BG']; ?>">
		<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;"><?php echo lang('main_administrators_options'); ?>:&nbsp;</h2>
		<dl style="margin-top: 0; padding-top: 2px;">
			<dt><?php	if ( AUTH_DB ) { ?><a href="manageusers.php"><?php echo lang('manage_users'); ?></a> <?php echo AUTH_DB_NOTICE; ?><?php } ?></dt>
			<dd><?php echo lang('manage_users_description'); ?></dd>
		</dl>
		<dl>
			<dt><a href="managecalendars.php"><?php echo lang('manage_calendars'); ?></a></dt>
			<dd><?php echo lang('manage_calendars_description'); ?></dd>
		</dl>
		<dl>
			<dt><a href="managemainadmins.php"><?php echo lang('manage_main_admins'); ?></a></dt>
			<dd><?php echo lang('manage_main_admins_description'); ?></dd>
		</dl>
		<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;"><?php echo lang('community'); ?>:&nbsp;</h2>
		<p><?php echo lang('external_resources'); ?>:</p>
		<ul>
			<li><a href="http://vtcalendar.sourceforge.net/jump.php?name=docs"><?php echo lang('external_resources_docs'); ?></a></li>
			<li><a href="http://vtcalendar.sourceforge.net/jump.php?name=vtcalendar-announce"><?php echo lang('external_resources_announce'); ?></a></li>
			<li><a href="http://vtcalendar.sourceforge.net/jump.php?name=forums"><?php echo lang('external_resources_forums'); ?></a></li>
			<li><a href="http://vtcalendar.sourceforge.net/jump.php?name=bugs"><?php echo lang('external_resources_bugs'); ?></a></li>
		</ul>
		
		<style type="text/css">
		#ReleaseNote {
			padding-top: 4px;
		}
		#ReleaseMessage {
			padding-bottom: 16px;
		}
		#PreReleaseNote {
			padding-top: 8px;
		}
		</style>
		<h2 style="margin:0; padding: 0; padding-bottom: 4px; border-bottom: 1px solid <?php echo $_SESSION['COLOR_BORDER']; ?>;"><?php echo lang('version_check'); ?>:&nbsp;</h2>
		<div style="margin-top: 0; padding-top: 10px;" id="VersionResult"></div>
		<script type="text/javascript"><!-- //<![CDATA[
		function CheckVersionHandler(image, messageHTML, tableHTML) {
			document.getElementById("VersionResult").innerHTML = tableHTML;
		}
		// ]]> --></script>
		<iframe src="checkversion.php" width="1" height="1" frameborder="0" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>
	</td>
	<?php
}

?>
</tr>
</table>
</div></div>
<?php
	pagefooter();
DBclose();
?>