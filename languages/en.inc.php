<?php
$lang['encoding'] = 'ISO-8859-1';

// ================================== public interface =====================================

$lang['yes'] = 'Yes';
$lang['no'] = 'No';

$lang['upcoming'] = 'Upcoming';
$lang['day'] = 'Day';
$lang['week'] = 'Week';
$lang['month'] = 'Month';
$lang['search'] = 'Search';
$lang['update'] = 'Update';

// Little Calendar
$lang['lit_cal_sun'] = 'S';
$lang['lit_cal_mon'] = 'M';
$lang['lit_cal_tue'] = 'T';
$lang['lit_cal_wed'] = 'W';
$lang['lit_cal_thu'] = 'T';
$lang['lit_cal_fri'] = 'F';
$lang['lit_cal_sat'] = 'S';
$lang['lit_cal_week'] = 'Wk';

// Date Picker
//$lang['jump_to'] = 'Jump to...';
$lang['today_is'] = 'Today is: ';

// Column Links
$lang['subscribe_download'] = 'Subscribe &amp; Download';
$lang['filter_events'] = 'Filter Events';

// Filter
$lang['showing_filtered_events'] = 'Showing only filtered events';

$lang['AM'] = 'AM';
$lang['am'] = 'am';
$lang['PM'] = 'PM';
$lang['pm'] = 'pm';

$lang['monday'] = 'Monday';
$lang['tuesday'] = 'Tuesday';
$lang['wednesday'] = 'Wednesday';
$lang['thursday'] = 'Thursday';
$lang['friday'] = 'Friday';
$lang['saturday'] = 'Saturday';
$lang['sunday'] = 'Sunday';

$lang['mon'] = 'Mon';
$lang['tue'] = 'Tue';
$lang['wed'] = 'Wed';
$lang['thu'] = 'Thu';
$lang['fri'] = 'Fri';
$lang['sat'] = 'Sat';
$lang['sun'] = 'Sun';

$lang['january'] = 'January';
$lang['february'] = 'February';
$lang['march'] = 'March';
$lang['april'] = 'April';
$lang['may'] = 'May';
$lang['june'] = 'June';
$lang['july'] = 'July';
$lang['august'] = 'August';
$lang['september'] = 'September';
$lang['october'] = 'October';
$lang['november'] = 'November';
$lang['december'] = 'December';

$lang['jan'] = 'Jan';
$lang['feb'] = 'Feb';
$lang['mar'] = 'Mar';
$lang['apr'] = 'Apr';
$lang['may_short'] = 'May';
$lang['jun'] = 'Jun';
$lang['jul'] = 'Jul';
$lang['aug'] = 'Aug';
$lang['sep'] = 'Sep';
$lang['oct'] = 'Oct';
$lang['nov'] = 'Nov';
$lang['dec'] = 'Dec';

// Next/Previous Links in All Views
$lang['previous_day'] = 'Previous Day';
$lang['next_day'] = 'Next Day';
$lang['previous_week'] = 'Previous Week';
$lang['next_week'] = 'Next Week';
$lang['previous_month'] = 'Previous Month';
$lang['next_month'] = 'Next Month';

// Day View
$lang['upcoming_page_header'] = 'Upcoming Events';
$lang['day_page_header'] = 'Day';
$lang['no_events'] = 'No events were found for this day.';
$lang['no_upcoming_events'] = 'No upcoming events were found.';
$lang['all_day'] = 'All Day';

//week view
$lang['week_page_header'] = 'Week';

//month view
$lang['month_page_header'] = 'Month';

//event view
$lang['event_page_header'] = 'Event';
$lang['to'] = 'to'; //3:00 pm to 4:00 pm
$lang['location'] = 'Location';
$lang['price'] = 'Price';
$lang['sponsor'] = 'Sponsor';
$lang['contact'] = 'Contact';

//search view
$lang['search_page_header'] = 'Search';
$lang['keyword'] = 'Keyword';
$lang['case_insensit'] = '(case-insensitive; e.g. reading day)';
$lang['starting_from'] = 'Starting from:';

//searchresults view
$lang['searchresults_page_header'] = 'Search Results';
$lang['search_results'] = 'Search Results';
$lang['back_to_prev_page'] = 'Back to previous page';
$lang['no_events_found'] = 'No events found';

//subscribe view
$lang['subscribe_page_header'] = 'Subscribe';

//filter view
$lang['filter_page_header'] = 'Filter';
$lang['select_categories'] = 'Select the event categories you would like events displayed for:';
$lang['select_unselect'] = 'Select/Unselect All';
$lang['apply_filter'] = 'Apply Filter';

//update view
$lang['update_page_header'] = 'Login';
$lang['login'] = 'Login';
$lang['user_id'] = 'User-ID';
$lang['password']='Password:';
$lang['new_user'] = 'Create New User';

$lang['subscribe'] = 'Subscribe';
$lang['download'] = 'Download';
$lang['copy_event_to_pda'] = 'copy this event into your personal desktop calendar';
$lang['subscribe_message'] = 'If you have a desktop calendar or PDA compatible with the iCalendar standard you
can subscribe to a calendar or download events. Currently the iCalendar standard
is fully supported by <a href="http://www.apple.com/ical/">Apple\'s iCal</a>, and the 
<a href="http://www.mozilla.org/projects/calendar/">Mozilla Calendar</a>.<br>
<br>
If your calendar software cannot subscribe to a whole category of events, you should
still be able to download individual events by clicking on the link 
&quot;'.$lang['copy_event_to_pda'].'&quot; which you will find
on each page that lists event details.';
$lang['whole_calendar'] = 'Entire calendar';

// ================================== Login-protected interface =====================================

$lang['dberror_generic'] = 'A database error was encountered';
$lang['dberror_nosponsor'] = 'Error: The calendar does not seem to have any sponsors.';

// Update interface
$lang['choose_template'] = 'Choose template';
$lang['blank'] = 'blank';
$lang['ok_button_text'] = '&nbsp;&nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;&nbsp;&nbsp;';
$lang['cancel_button_text'] = 'Cancel';

$lang['edit_user'] = 'Edit user';
$lang['add_new_user'] = 'Add new user';
$lang['choose_user_id'] = 'Please choose a user-id.';
$lang['already_main_admin'] = 'This user is already a main admin.';
$lang['user_not_exists'] = 'This user does not exist.';
$lang['user_id_example'] = '(e.g. jsmith)';

$lang['add_new_event_category'] = 'Add new event category';
$lang['category_name_cannot_be_empty'] = 'The name cannot be empty.';
$lang['category_name_already_exists'] = 'This name already exist. Please choose a different one.';
$lang['category_name'] = 'Category name';

$lang['add_new_keyword_pair'] = 'Add new keyword pair';
$lang['add_new_keyword_pair_instructions'] = 'Do NOT add multiple words.<br> A keyword (or alternative keyword) cannot contain spaces.';
$lang['keyword_cannot_be_empty'] = 'The keyword cannot be empty.';
$lang['alternative_keyword'] = 'Alternative keyword:';

$lang['add_new_template'] = 'Add new template';

$lang['email_submitted_event_rejected'] = 'submitted event was rejected';
$lang['email_admin_rejected_event'] = 'The calendar administrator rejected the event:';
$lang['email_reason_for_rejection'] = 'Reason for the rejection:';
$lang['email_login_edit_resubmit'] = 'Please login to the calendar, edit and re-submit your event.';
$lang['approve_reject_event_updates'] = 'Approve/reject event updates';
$lang['back_to_menu'] = 'Back to Menu';
$lang['refresh_display'] = 'Refresh display';
$lang['approve_all_events'] = 'Approve ALL events';
$lang['date'] = 'Date';
$lang['time'] = 'Time';
$lang['category'] = 'Category';
$lang['categories'] = 'Categories';
$lang['title'] = 'Title';
$lang['description'] = 'Description';
$lang['approve'] = 'Approve';
$lang['reject'] = 'Reject';
$lang['edit'] = 'Edit';
$lang['user_ids_invalid'] = 'The following user-IDs are invalid:';
$lang['user_id_invalid'] = 'The following user-ID is invalid:';
$lang['change_header_footer_auth'] = 'Change header, footer, authorization settings';
$lang['change_colors'] = 'Change calendar colors';
$lang['calendar_title'] = 'Calendar Title';
$lang['empty_or_any_text'] = '(empty or any text)';
$lang['empty_or_any_html'] = '(empty or any HTML)';
$lang['header_html'] = 'Header HTML';
$lang['footer_html'] = 'Footer HTML';
$lang['separate_user_ids_with_comma'] = '(separate user-id\'s with a comma)';
$lang['no_login_required'] = 'no login required; everyone can view the calendar';
$lang['login_required_user_ids'] = 'login required; only the following user-IDs can view the calendar';
$lang['login_required_for_viewing'] = 'Login required for viewing the calendar?';

$lang['save_changes'] = 'Save changes';
$lang['preview_event'] = 'Preview event';
$lang['go_back_to_make_changes'] = 'Go back to make changes';
$lang['warning_ending_time_before_starting_time'] = 'Warning! Ending time is not greater than starting time.';
$lang['warning_no_ending_time'] = 'Warning! The ending time is not specified.';
$lang['recurring_event'] = 'recurring event';
$lang['no_recurrences_defined'] = 'No recurrences defined.';
$lang['copy_event'] = 'Copy event';
$lang['update_event'] = 'Update event';
$lang['add_new_event'] = 'Add new event';
$lang['input_event_information'] = 'Input event information';

$lang['change_email'] = 'Change email address';
$lang['change_email_label'] = 'The email address you enter below will be used by the calendar administrator to send messages to you:';
$lang['email_invalid'] = 'The email address is invalid.';

$lang['change_homepage'] = 'Change homepage address';
$lang['change_homepage_label'] = 'Please enter the address of your organization\'s homepage:';
$lang['change_homepage_example'] = '(Make sure to enter the full URL including &quot;http://&quot;.)';
$lang['url_invalid'] = '"The URL is invalid. Please make sure that you enter: &quot;http://&quot; in front."';

$lang['email_account_updated_subject'] = 'calendar account information updated';
$lang['email_account_updated_body'] = "The calendar administrator updated the information for your user account.\n\nThe current settings are:\n";
$lang['email'] = 'E-Mail:';

$lang['user_id_already_exists'] = 'A user with this Login ID already exists. Please choose a different one.';
$lang['choose_password'] = 'Please choose a password.';
$lang['email_example'] = '(e.g. jsmith@hotmail.com)';

$lang['change_password'] = 'Change password';
$lang['old_password'] = 'Old password:';
$lang['new_password'] = 'New password:';
$lang['password_repeated'] = '(repeated)';
$lang['old_password_wrong'] = 'The password you entered as the old one is wrong. Please try again.';
$lang['case_sensitive'] = '(case sensitive)';
$lang['two_passwords_dont_match'] = 'The two values you entered for the new password do not agree. Please try again.';
$lang['new_password_invalid'] = 'The new password is invalid.';

$lang['delete_calendar'] = 'Delete calendar';
$lang['warning_calendar_delete'] = 'Warning! The following calendar will be deleted:';

$lang['delete_event_category'] = 'Delete event category';
$lang['warning_event_category_delete'] = 'Warning! The following event category will be deleted:';
$lang['delete_all_events_in_category'] = 'delete all events in this category';
$lang['reassign_all_events_to_category'] = 're-assign all events in this category to:';

$lang['delete_event'] = 'Delete event';
$lang['delete_event_confirm'] = 'Do you really want to delete this event?';
$lang['button_delete_this_event'] = 'Delete this event';
$lang['button_delete_all_recurrences'] = 'Delete ALL recurrences of this event';

$lang['delete_inactive_sponsors'] = 'Delete inactive sponsors';
$lang['delete_inactive_sponsors_message'] = 'Delete all sponsors who do NOT had an event during the last';
$lang['delete_inactive_sponsors_year'] = 'year';
$lang['delete_inactive_sponsors_2years'] = '2 years';
$lang['delete_inactive_sponsors_3years'] = '3 years';

$lang['delete_main_admin'] = 'Delete main admin';
$lang['delete_main_admin_confirm'] = 'The following main admin will be deleted:';

$lang['clear_search_log'] = 'Clear search log';
$lang['clear_search_log_confirm'] = 'Do you want to delete the entire search log?';

$lang['delete_sponsor'] = 'Delete sponsor';
$lang['delete_sponsor_confirm'] = 'Warning! The following sponsor will be deleted:';
$lang['delete_all_events_of_sponsor'] = 'delete all events belonging to this sponsor';
$lang['reassign_all_events_to_sponsor'] = 're-assign all events belonging to this sponsor to:';

$lang['delete_user'] = 'Delete user';
$lang['delete_user_confirm'] = 'The following user will be deleted:';

$lang['calendar'] = 'Calendar';
$lang['administration'] = 'Administration';
$lang['category1'] = 'Category 1';
$lang['category2'] = 'Category 2';
$lang['category3'] = 'Category 3';

$lang['edit_calendar'] = 'Edit calendar';
$lang['add_new_calendar'] = 'Add new calendar';
$lang['calendar_id'] = 'Calendar-ID';
$lang['choose_valid_calendar_id'] = 'Please choose a valid calendar-ID:';
$lang['calendar_already_exists'] = 'A calendar with this ID already exists. Please choose a different one.';
$lang['calendar_id_example'] = '(e.g. mikadoclub)';
$lang['calendar_name'] = 'Calendar name';
$lang['calendar_name_example'] = '(e.g. Mikado Club)';
$lang['choose_valid_calendar_name'] = 'Please choose a valid name:';
$lang['administrators'] = 'Administrators:';
$lang['administrators_example'] = '(separate user-id\'s with a comma)';
$lang['also_display_on_calendar_message'] = 'By default also display events on the';
$lang['also_display_on_calendar_notice'] = '(Sponsors can still disable this on a per-event basis)';

$lang['edit_featured_keyword'] = 'Edit featured keyword';
$lang['add_new_featured_keyword'] = 'Add new featured keyword';
$lang['featured_keyword_message'] = 'Do NOT add multiple words. A keyword must not contain spaces.';
$lang['keyword_already_exists'] = 'This keyword already exists.';
$lang['featured_text'] = 'Featured Text (or HTML):';
$lang['featured_text_cannot_be_empty'] = 'The featured text cannot be empty.';

$lang['homepage'] = 'Homepage:';
$lang['email_add_event_instructions'] = 'Short instructions for adding an event:
- Login using your personal user-ID and password
- Click on "Add new event"
- Fill in the fields
- Press the "Preview event" button
- If the preview looks ok, press the "Save changes" button

Your event is submitted to the calendar administrator
for review and will be publicized shortly.
';

$lang['edit_sponsor'] = 'Edit sponsor';
$lang['add_new_sponsor'] = 'Add new sponsor';
$lang['sponsor_name'] = 'Sponsor name:';
$lang['choose_sponsor_name'] = 'Please choose a name.';
$lang['sponsor_already_exists'] = 'A sponsor with this name already exists. Please choose a different one.';
$lang['sponsor_name_example'] = '(e.g. Mikado Club)';
$lang['choose_email'] = 'Please choose an email address.';
$lang['url_example'] = '(e.g. http://www.vtmc.vt.edu/)';
$lang['sponsor_members'] = 'Sponsor members:';
$lang['administrative_members'] = 'Administrative members:';
$lang['administrative_members_example'] = '(separate user-id\'s with a comma)';

// this is for VoiceXML output in export.php
$lang['vxml_welcome'] = 'Welcome to the VT Calendar!';
$lang['vxml_there_are'] = 'There are';
$lang['vxml_events_for_today'] = 'events for today';
$lang['vxml_no_more_events'] = 'There are no more events today';
$lang['vxml_goodbye'] = 'Have a nice day!';

$lang['export_events'] = 'Export events';
$lang['how_to_export_events'] = 'How do I export events?';
$lang['output_format'] = 'Output format:';
$lang['all'] = 'all';
$lang['specific_sponsor'] = 'specific sponsor';
$lang['specific_sponsor_example'] = '(case-insensitive substring search, e.g. school of the arts)';
$lang['from'] = 'from'; // from Feb 17, 2005...
$lang['export_message'] = 'Depending on your browser you might see an <b>empty screen</b> after pressing &quot;Start Export&quot;.<br> 
Use the &quot;<b>View Source</b>&quot; option of your browser to view the exported data.';

$lang['choose_sponsor_role'] = 'Choose your sponsor role';
$lang['error_not_authorized'] = 'Error! Not authorized.';
$lang['error_not_authorized_message'] = 'You are currently not authorized to update the calendar because you have not been assigned to an event sponsor.';
$lang['error_bad_sponsorid'] = 'You do not belong to the sponsor that you selected. Please select a sponsor from the list below.';
$lang['help_signup_link'] = 'Sign up with the calendar';
$lang['login_failed'] = 'Your login failed. Please try again.';
$lang['help'] = 'Help';
$lang['recurring'] = 'recurring';
$lang['on_the'] = 'on the';
$lang['last'] = 'last';
$lang['first'] = 'first';
$lang['second'] = 'second';
$lang['third'] = 'third';
$lang['fourth'] = 'fourth';
$lang['of_the_month_every'] = 'of the month every';
$lang['other_month'] = 'other month'; // meaning: every second month
$lang['months'] = 'months';
$lang['year'] = 'Year';
$lang['every'] = 'every';
$lang['every_other'] = 'every other';// meaning: every second ...
$lang['every_third'] = 'every third';
$lang['every_fourth'] = 'every fourth';
$lang['no_recurrences_defined'] = 'no recurrences defined.';
$lang['starting'] = 'starting:';
$lang['ending'] = 'ending:';
$lang['recurrence_produces_no_dates'] = '(The recurrence you have defined produces no dates!)';
$lang['resulting_dates_are'] = 'The resulting dates are:';
$lang['calendar_administration'] = 'Calendar administration';

$lang['phone'] = 'Phone';
$lang['for_more_info_visit'] = 'for more info visit the web at';

$lang['import_error_displayedsponsor'] = 'Error!: &lt;displayedsponsor&gt; is too long.';
$lang['import_error_displayedsponsorurl'] = 'Error!: &lt;displayedsponsorurl&gt; is invalid.';
$lang['import_error_timebegin'] = 'Error!: &lt;date&gt; and/or &lt;timebegin&gt; is invalid.';
$lang['import_error_timeend'] = 'Error!: &lt;date&gt; and/or &lt;timeend&gt; is invalid.';
$lang['import_error_categoryid'] = 'Error!: &lt;categoryid&gt; is invalid.';
$lang['import_error_title'] = 'Error!: &lt;title&gt; is invalid.';
$lang['import_error_description'] = 'Error!: &lt;description&gt; is invalid.';
$lang['import_error_location'] = 'Error!: &lt;location&gt; is invalid.';
$lang['import_error_price'] = 'Error!: &lt;price&gt; is invalid.';
$lang['import_error_contact_name'] = 'Error!: &lt;contact_name&gt; is invalid.';
$lang['import_error_contact_phone'] = 'Error!: &lt;contact_phone&gt; is invalid.';
$lang['import_error_contact_email'] = 'Error!: &lt;contact_email&gt; is invalid.';
$lang['import_error_contact_url'] = 'Error!: &lt;url&gt; is invalid.';
$lang['import_error_events'] = 'Error!: &lt;events&gt; must be the first element.';
$lang['import_events'] = 'Import events';
$lang['import_error_open_url'] = 'Error: Cannot open import file. Please check the URL.';
$lang['no_events_imported'] = 'No events were imported.';
$lang['import_file_contains_no_events'] = 'The import file does not contain any events.';
$lang['events_successfully_imported'] = 'events were successfully imported.'; // e.g. "34 events were successfully imported."
$lang['how_to_import'] = 'How do I import events?';
$lang['enter_import_url_message'] = 'Please enter the full URL of the XML file containing the events you want to add.';
$lang['enter_import_url_example'] = '(e.g. &quot;http://www.vtmc.vt.edu/rec/newevents.xml&quot;)';

$lang['repeat'] = 'repeat';
$lang['repeat_on_the'] = 'repeat on the';
$lang['specify_valid_ending_date'] = 'Please specify a valid ending date.';
$lang['specify_valid_dates'] = 'Please specify valid dates.';
$lang['specify_valid_starting_date'] = 'Please specify a valid starting date.';
$lang['ending_date_after_starting_date'] = 'The ending date must be equal or greater than the starting date.';
$lang['date_invalid'] = 'Date is invalid. Please change.';
$lang['one_time_event'] = 'one-time event';
$lang['specify_all_day_or_starting_time'] = 'Please specify &quot;All day event&quot; or a starting time.';
$lang['all_day_event'] = 'All day event';
$lang['timed_event'] = 'Timed event';
$lang['ending_time_not_required'] = '(ending time is NOT required)';
$lang['choose_category'] = 'Please choose a category.';
$lang['choose_title'] = 'Please choose a title.';
$lang['title_example'] = '(Please use a name meaningful to the general audience)';
$lang['description_example'] = '(e.g. Prof. XXX from YYY gives a presentation about ZZZ...)';
$lang['location_example'] = '(e.g. Squires Colonial Hall)';
$lang['price_example'] = '(e.g. students: free, public: $5)';
$lang['contact_name'] = 'Contact name';
$lang['contact_name_example'] = '(e.g. Lisa Roberts)';
$lang['contact_phone'] = 'Contact phone';
$lang['contact_phone_example'] = '(e.g. (540) 992-4892)';
$lang['contact_email'] = 'Contact e-mail';
$lang['contact_email_example'] = '(e.g. icinfo@hotmail.com)';
$lang['event_page_web_address'] = 'Event page<br> web address';
$lang['event_page_url_example'] = '(e.g. http://www.ic.vt.edu/talks/future.html)';
$lang['button_restore_all_sponsor_defaults'] = 'Restore all sponsor defaults';
$lang['displayed_sponsor_name'] = 'Displayed Name';
$lang['sponsor_page_web_address'] = 'Sponsor\'s Website';
$lang['button_restore_default'] = 'Restore default';
$lang['also_display_on'] = 'Also display this event on the'; // ... Calendar ...
$lang['assign_to_category'] = 'and assign it to this category';

$lang['template_name'] = 'Template name';
$lang['choose_template_name'] = 'Please choose a template name.';
$lang['template_name_example'] = '(e.g. Guest speaker)';

$lang['manage_calendars'] = 'Manage calendars';
$lang['or_modify_existing_calendar'] = 'or modify existing calendar:';
$lang['delete'] = 'Delete';
$lang['calendars'] = 'Calendars';

$lang['manage_event_categories'] = 'Manage event categories';
$lang['or_modify_existing_category'] = 'or modify existing category:';
$lang['rename'] = 'Rename';

$lang['manage_events'] = 'My submitted events';
$lang['or_manage_existing_events'] = 'or manage existing events:';
$lang['status'] = 'Status';
$lang['submitted_for_approval'] = 'awaiting approval';
$lang['approved'] = 'approved';
$lang['copy'] = 'Copy';
$lang['status_info_message'] = 'The status information has the following meaning:';
$lang['rejected'] = 'rejected';
$lang['rejected_explanation'] = '...event was not approved for publication';
$lang['submitted_for_approval_explanation'] = '...event has yet to be reviewed and approved';
$lang['approved_explanation'] = '...event is displayed in the calendar';

$lang['manage_featured_search_keywords'] = 'Manage featured search keywords';
$lang['featured_search_keywords_message'] = 'Below you can associate certain search keywords with custom<br>
text messages or HTML. This can be used to answer to keywords<br>
which are frequently used but rarely have a match within the<br>
calendar.';
$lang['or_manage_existing_keywords'] = 'or manage existing keywords:';

$lang['manage_main_admins'] = 'Manage main admins';
$lang['add_new_main_admin'] = 'Add new main admin';
$lang['or_delete_existing'] = 'or delete existing:';
$lang['main_admins_total'] = 'Main admins total';

$lang['manage_search_keywords'] = 'Manage search keywords';
$lang['manage_search_keywords_message'] = 'The following list contains keywords which are tried by the calendar search engine<br>
in addition to the keyword provided by the user. You can improve the search engine\'s<br>
power by building a list of common synonyms (or alternative keywords) for <br>
frequently-used keywords.';
$lang['or_manage_existing_pairs'] = 'or manage existing pairs:';

$lang['manage_sponsors'] = 'Manage sponsors';
$lang['or_modify_existing_sponsor'] = 'or modify existing sponsor:';
$lang['sponsors_total'] = 'Sponsors total';

$lang['manage_templates'] = 'Manage templates';
$lang['or_modify_existing_template'] = 'or modify existing template:';

$lang['manage_users'] = 'Manage users';
$lang['button_edit'] = '&nbsp;&nbsp;Edit&nbsp;&nbsp;';
$lang['button_delete'] = 'Delete';
$lang['or_modify_existing_user'] = 'or modify existing user:';

$lang['reject_event_update'] = 'Reject event update';
$lang['reason_for_rejection'] = 'Reason for rejecting this update (send as a notification to the sponsor):';

$lang['rename_event_category'] = 'Rename event category';

$lang['is_logged_on'] = 'is logged on...';
$lang['logout'] = 'Logout';

$lang['update_calendar'] = 'Update calendar';
$lang['sponsors_options'] = 'Sponsor\'s options';
$lang['administrators_options'] = 'Administrator\'s options';
$lang['main_administrators_options'] = 'Main administrator\'s options';
$lang['new_event_submitted_notice'] = 'The new event has been submitted for approval:';
$lang['updated_event_submitted_notice'] = 'The update for the event has been submitted for approval:';
$lang['hompage_changed_notice'] = 'The address of your homepage was successfully changed to:';
$lang['email_changed_notice'] = 'Your email address was successfully changed to:';

$lang['change_password_of_user'] = 'Change password of user';
$lang['view_search_log'] = 'View search log';
$lang['search_log_is_empty'] = 'Search log is empty.';

$lang['edit_template'] = 'Edit template';

$lang['backgroundcolor'] = 'Background color';
$lang['maincolor'] = 'Main color';
$lang['textcolor'] = 'Text color';
$lang['linkcolor'] = 'Link color';
$lang['gridcolor'] = 'Grid color';
$lang['gridcolor_explanation'] = '(week &amp; month table and background for inactive tabs)';
$lang['pastcolor'] = 'Past color';
$lang['todaycolor'] = 'Today color';
$lang['futurecolor'] = 'Future color';

$lang['colorscheme'] = 'When choosing colors for the calendar try to establish a <strong>matching color scheme</strong>.<br>
Play with the <a target="newWindow" onclick="new_window(this.href); return false" href="http://www.colorschemer.com/online.html">color schemer tool from www.colorschemer.com</a>.
Also, in order to facilitate readability, <br>
make sure you have <strong>sufficient contrast</strong> between text/link color and the other colors.';

$lang['help_addevent'] = 'Add event';
$lang['help_addevent_contents'] = 'You have 4 options:
<ol>
	<li>Create a <a href="helpaddeventnew.php">new event</a>
	by clicking on the &quot;Add new event&quot; link in the update menu</li>
	<li>Use the icon <img src="images/new.gif" width="16" height="16" alt="new event" border="0">
	in the day/week/month view to create a <a href="helpaddeventnew.php">new event</a></li>
	<li><a href="helpupdatecopydelete.php">Copy from an existing event</a> by clicking on the link
	&quot;Update/Copy/Delete event&quot; in the update menu</li>
	<li>Define a <a href="helptemplate.php">template</a> and use it to create a <a href="helpaddeventnew.php">new event</a></li>
</ol>';

$lang['help_addnewevent'] = 'Add new event';
$lang['help_addnewevent_contents'] = 'If you don\'t have any <a href="helptemplate.php">templates</a> predefined,
just go ahead and <a href="helpfillinevent.php">fill in the event information</a>.
<br>
<br>
In case you do have templates they will be shown to you so that you can pick one.<br>
You can also choose &quot;blank&quot;, meaning that you don\'t wish any fields to be preset.';

$lang['help_approval'] = 'Approval of submitted events';
$lang['help_approval_contents'] = 'For security reasons, every update to the event calendar has to be <b>approved
by the calendar administrator.</b><br>
<br>
The administrator reviews submitted events and updates. Event information may be approved or rejected.<br>
<br>
If an update is rejected the information is not publicized; instead, the event is marked with a short comment
stating the reason for the rejection. By editing a rejected event you can re-submit the information which will
then be checked the following weekday.<br>
<br>
Because of the approval mechanism the <b>submitted updates are not immediately publicized</b>.<br>
<br>
If you delete an event from the calendar an approval is not necessary.
The event information will be instantly removed from the calendar.';

$lang['help_copyevent'] = 'Copy event';
$lang['help_copyevent_contents'] = 'When you choose to copy an existing event all the input fields for the new
event you are creating will be copied from the one you have chosen.<br>
If you chose a recurring event the recurrence information will also be copied.<br>
<br>
You can make changes or <a href="helpfillinevent.php">fill in</a> additional information.<br>
<br>
Please keep in mind that the event you create will have to be <a href="helpapproval.php">approved</a>.<br>
Therefore, it will <b>not be immediately visible</b> in the calendar.';

$lang['help_deletevent'] = 'Delete event';
$lang['help_deletevent_contents'] = 'Before the event is deleted from the calendar you will have to confirm your
deletion.<br>
If your event is a recurring event you will be presented with the option to
either delete the event on just that specific date (button &quot;Delete this event&quot;)
or delete all recurrences (button &quot;Delete ALL recurrences of this event&quot;).<br>
<br>
The event will be immediately removed from the calendar.';

$lang['help_export'] = 'Exporting Events';
$lang['help_export_intro'] = 'You can export all or a subset of the data of the event calendar in two different ways:
<ul>
	<li>by choosing the link 
	&quot;export events&quot; in the sponsor\'s options menu</li>
	<li>or by directly accessing the export URL<br>e.g. ';
$lang['help_export_formats'] = '<p>Currently the calendar supports the following export formats:</p>
<ul>
		<li>XML (custom XML; for format see below) (type=xml) </li>
		<li>iCalendar/vCalendar (type=ical)</li>
		<li>RSS 0.91 (type=rss)</li>
		<li>RSS 1.0 (type=rss1_0)</li>
		<li>VoiceXML 2.0 (type=vxml)    
</ul>';
$lang['help_export_xmlformat_example'] = 'This is an example of the custom XML format:';
$lang['help_export_data_format'] = '<strong>The following table describes the data format:</strong><br>
<br>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>field name</th>
		<th>usage</th>
	</tr>
	<tr>
		<td>eventid</td>
		<td>the index number of this event</td>
	</tr>
	<tr>
		<td>sponsorid</td>
		<td>the short identifier of the organization that inputed the event into the calendar</td>
	</tr>
	<tr>
		<td>inputsponsor</td>
		<td>the name of the organization that inputed the event into the calendar</td>
	</tr>
	<tr>
		<td>displayedsponsor</td>
		<td>the name of the sponsor that is displayed in the calendar\'s detailed view</td>
	</tr>
	<tr>
		<td>displayedsponsorurl</td>
		<td>the URL of the homepage of the sponsor that is displayed in the calendar\'s detailed view</td>
	</tr>
	<tr>
		<td>date</td>
		<td>the date the event takes place, written in the ISO-8601 format</td>
	</tr>
	<tr>
		<td>timebegin</td>
		<td>
			<ul>
				<li>the time the event begins, written in the ISO-8601 format (military/24 hour time)</li>
				<li>if the value is &quot;00:00&quot; and timeend is &quot;23:59&quot; the event is considered to be an 
						&quot;all day event&quot;</li>
			</ul>  
		</td>
	</tr>
	<tr>
		<td>timeend</td>
		<td>
			<ul>
				<li>the time the event ends, written in the ISO-8601 format (military/24 hour time)</li>
				<li>if the value is completely ommitted the event is considered to not have a specified
				ending time</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>repeat_vcaldef</td>
		<td>
			<ul>
				<li>if the event is a recurring event it contains the recurrence definition in 
				<a href="http://www.imc.org/pdi/vcal-10.txt">vCalendar format</a></li>
				<li>e.g. &quot;W1 MO WE FR 20000502T235900&quot; means that an event repeats every week<br>
						Monday, Wednesday &amp; Friday until May 2, 2000</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>repeat_startdate</td>
		<td>
			if the event is a recurring event it contains the date where the recurrence starts
		</td>
	</tr>
	<tr>
		<td>repeat_enddate</td>
		<td>
			if the event is a recurring event it contains the date where the recurrence ends
		</td>
	</tr>
	<tr>
		<td>categoryid</td>
		<td>
			an index number indicating the category of the event (see table below)
		</td>
	</tr>
	<tr>
		<td>category</td>
		<td>
			the name of the category associated with the event
		</td>
	</tr>
	<tr>
		<td>title</td>
		<td>the event title (displayed in weekly, monthly and detailed view)</td>
	</tr>
	<tr>
		<td>description</td>
		<td>a long text describing the specifics of an event<br>
		the description is only displayed in the detailed view</td>
	</tr>
	<tr>
		<td>location</td>
		<td>the location where the event takes place (building, room etc.)</td>
	</tr>
	<tr>
		<td>price</td>
		<td>
			the price of the event
		</td>
	</tr>
	<tr>
		<td>contact_name</td>
		<td>the name of a person that can be contacted if further info is required</td>
	</tr>
	<tr>
		<td>contact_phone</td>
		<td>
			contact phone number(s)
		</td>
	</tr>
	<tr>
		<td>contact_email</td>
		<td>contact email address</td>
	</tr>
	<tr>
		<td>url</td>
		<td>URL of a web page specifically describing the event</td>
	</tr>
	<tr>
		<td>recordchanged</td>
		<td>a timestamp indicating when this event was changed the last time</td>
	</tr>
</table>';
$lang['help_export_categoryid_intro'] = 'The value for &quot;categoryid&quot; is one of the following index numbers:';

$lang['help_categoryid_index'] = 'Index';
$lang['help_categoryid_name'] = 'Name';

$lang['help_fillinevent'] = 'Fill in event information';
$lang['help_fillinevent_contents'] = 'Every event is described by a number of parameters.
Only the fields <b>Date, Time, Category and Title are required</b>.<br>
None of the other <a href="helpinputfields.php">input fields</a> is mandatory.<br>
<br>
After you have entered all your information press the &quot;Preview event&quot; button
at the bottom of the page. This will take you to a new page showing how your event
will look in the different views.<br>
<br>
Then you have the options to either save or go back to make changes. If you press
the &quot;Cancel&quot; button all your input will be discarded.<br>
If you press <b>&quot;Save changes&quot;</b> your <b>event will be submitted
for <a href="helpapproval.php">approval</a></b> by the calendar administrator.<br>
It might take <b>up to 24 hours until the changes are
reflected in the calendar</b>.';

$lang['help_import'] = 'Importing events';
$lang['help_import_intro'] = '<p>In order to be able to add event data into the VT calendar without using 
its web interface for manual input, the calendar enables you to import events from other sources.
This feature allows you to prepare a file containing all new events which then will be 
uploaded to the calendar. Nevertheless, <b>changes to existing events have to be made using the 
calendar web interface</b>.
</p>
<p>The process of adding a batch of events is the following:
<ol>
<li>prepare a file containing the event information (the structure is described further below)
and place it in a directory of a web server
<li>login to the VT calendar
<li>choose the "import events from remote location" option, specify the 
	URL of the file and press the button "Start Import"</li>              
</ol>
<p>
The data, that is going to be added to the calendar, is contained in an XML file 
with the following structure (this example contains 2 events): 
</p>';
$lang['help_import_data_format_intro'] = 'Please note the following facts:
<ul>
<li>The order of the events in the XML file does not matter
<li>If <code>&lt;timebegin&gt;</code> is set to &quot;00:00&quot; and <code>&lt;timeend&gt;</code> to &quot;23:59&quot;,
the event is an &quot;all day event&quot;
<li>If <code>&lt;timeend&gt;</code> does not enclose
any value at all, the event does not have a specified ending time
<li>The value for <code>&lt;categoryid&gt;</code> is one of the following index numbers:';
$lang['help_import_data_format'] = 'The following table contains all the fields that 
describe an event, their intended usage, the allowed field length, the syntax and an indicator whether an element
can be empty or not (like <code>&lt;timeend&gt;&lt;/timeend&gt;</code>).
<br>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>field name</th>
		<th>usage</th>
		<th>field length [character]</th>
		<th>syntax</th>
		<th>empty element allowed</th>
	</tr>
	<tr>
		<td>displayedsponsor</td>
		<td>the name of the sponsor that is displayed in the calendar\'s detailed view</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>displayedsponsorurl</td>
		<td>the URL of the homepage of the sponsor that is displayed in the calendar\'s detailed view</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>date</td>
		<td>the date the event takes place, written in the ISO-8601 format</td>
		<td>exactly 10</td>
		<td>YYYY-MM-DD</td>
		<td>no</td>
	</tr>
	<tr>
		<td>timebegin</td>
		<td>
			<ul>
				<li>the time the event begins, written in the ISO-8601 format (military/24 hour time)</li>
				<li>e.g. for 9am use &quot;09:00&quot;, for 8pm use &quot;20:00&quot;</li>
				<li>if the value is &quot;00:00&quot; and timeend is &quot;23:59&quot; the event is considered to be an 
						&quot;all day event&quot;</li>
				<li>the time is only displayed in the weekly and detailed view (not in the monthly view)</li>
			</ul>  
		</td>
		<td>exactly 5</td>
		<td>HH:MM</td>
		<td>no</td>
	</tr>
	<tr>
		<td>timeend</td>
		<td>
			<ul>
				<li>the time the event ends, written in the ISO-8601 format (military/24 hour time)</li>
				<li>e.g. for 9am use &quot;09:00&quot;, for 8pm use &quot;20:00&quot;</li>
				<li>if the value is completely ommitted the event is considered to not have a specified
				ending time (no ending time is displayed in the calendar)</li>
				<li>the time is only displayed in the detailed view (not in the weekly or monthly view)</li>
			</ul>
		</td>
		<td>exactly 5</td>
		<td>HH:MM</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>categoryid</td>
		<td>
			<ul>
				<li>an index number indicating the category of the event (see table above)</li>
				<li>the associated category is only displayed in the weekly and detailed view (not in the monthly view)</li>
			</ul
		></td>
		<td>number from table above</td>
		<td>number</td>
		<td>no</td>
	</tr>
	<tr>
		<td>title</td>
		<td>the event title (displayed in weekly, monthly and detailed view)</td>
		<td>max. 40</td>
		<td>free text</td>
		<td>no</td>
	</tr>
	<tr>
		<td>description</td>
		<td>a long text describing the specifics of an event<br>
		the description is only displayed in the detailed view</td>
		<td>max. 5000</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>location</td>
		<td>the location where the event takes place</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>price</td>
		<td>
			<ul>
				<li>the price of the event</li>
				<li>use &quot;free&quot; if there is no charge</li>
				<li>e.g. you could use something like &quot;$5 for VT students, $10 for general public&quot;</li>
			</ul>
		</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>contact_name</td>
		<td>the name of a person that can be contacted if further info is required</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>contact_phone</td>
		<td>
			<ul>
				<li>contact phone number(s)</li>
				<li>e.g. use &quot;231-2343 for general info, 231-5600 for tickets&quot;</li>
			</ul>
		</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>contact_email</td>
		<td>contact email address</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
	<tr>
		<td>url</td>
		<td>URL of a web page specifically describing the event</td>
		<td>max. 100</td>
		<td>free text</td>
		<td>yes</td>
	</tr>
</table>';

$lang['help_inputfields'] = 'Input fields';
$lang['help_inputfields_contents'] = 'The following table shows the meaning of the input fields:<br>
<br>
<table width="100%" border="1" cellspacing="1" cellpadding="3">
	<tr align="left">
		<th class="helpbox">Field name</th>
		<th class="helpbox">Meaning</th>
	</tr>
		<tr>
			<td class="helpbox">Date</td>
			<td class="helpbox">Choose between one of the radio buttons to determine whether your
			event is a one-time or a recurring event. Then you will be given the opportunity to specify the
			date of the one-time event or define the recurrence for a repeating event.<br>
			The validity of the date you picked is checked after pressing the &quot;Preview Event&quot; button.<br>
			</td>
		<tr>
		<tr>
			<td class="helpbox">Time</td>
			<td class="helpbox">Declare the event as being an
			&quot;all day event&quot; (for example "Thanksgiving Day") or specify start and ending time for the event. Pick &quot;???&quot; for the hour of the
			ending time if the event does not have a specified ending time.</td>
		<tr>
		<tr>
			<td class="helpbox">Category</td>
			<td class="helpbox">Classify your event into one of the given categories to facilitate searching.</td>
		<tr>
		<tr>
			<td class="helpbox">Title</td>
			<td class="helpbox">Give your event a descriptive title. When choosing one, remember that
			the category is always displayed along with the title.<br>
			<br>
			Neither the weekly nor the monthly view shows your sponsor name. That\'s why you have to
			make sure that the user will have a rough idea about the event just by reading the title.<br>
			<br>
			The input space for the title is limited to 40 characters to avoid cluttering the
			screen with too long titles.
			</td>
		<tr>
		<tr>
			<td class="helpbox">Description</td>
			<td class="helpbox">Give a detailed description of the event here. Remember that you can save people
			a lot of hassle if you give all the information available to you, so that
			they are not required to call you or send out an email.<br>
			<br>
			You are not limited in space.</td>
		<tr>
		<tr>
			<td class="helpbox">Location</td>
			<td class="helpbox">Describe the location of the event (building, room number etc.)</td>
		<tr>
		<tr>
			<td class="helpbox">Price</td>
			<td class="helpbox">Specify, if there is a charge for taking part in the event. If it\'s free just
			use the word &quot;free&quot;.</td>
		<tr>
		<tr>
			<td class="helpbox">Contact name</td>
			<td class="helpbox">Specify the name of a person that can be contacted by people interested to learn
			more about the event.</td>
		<tr>
		<tr>
			<td class="helpbox">Contact phone</td>
			<td class="helpbox">Specify a phone number that everybody who needs further information can call.
			If you have a fax machine you can also provide its number.</td>
		<tr>
		<tr>
			<td class="helpbox">Contact email</td>
			<td class="helpbox">Specify an email address that can be used to request further information.</td>
		<tr>
		<tr>
			<td class="helpbox">Event page web address</td>
			<td class="helpbox">If you have a specific web page that gives more information about that particular event
			write down its address here. Do not use this field to publicize your homepage\'s address. For this purpose
			you can use the field &quot;Sponsor page web address&quot; below.</td>
		<tr>
		<tr>
			<td class="helpbox">Displayed sponsor name</td>
			<td class="helpbox">By default this field will contain the name of your organisation agreed upon when
			signing up with the event calendar. You are free to change it. You might have to use it if
			you want to submit events on behalf of an organisation who did not sign up itself.</td>
		<tr>
		<tr>
			<td class="helpbox">Sponsor page web address</td>
			<td class="helpbox">Specify the address for the homepage of your organization here.</td>
		<tr>
</table>';

$lang['help_signup'] = 'How to post events';
$lang['help_signup_authorization'] = 'Authorization can be obtained by contacting the calendar coordinator
 at ';
$lang['help_signup_contents'] = 'Please send an email containing:<br>
1) The name of your organization/club<br>
2) The user-ID (the ID used to check e-mail) of the person(s) who will be entering information<br>
<br>
All event submissions will be reviewed by the calendar coordinator before
they are posted. Consequently, it is important to submit items at
least two days in advance of the event.
During the review process, submissions will be checked to see if they are
appropriate for posting and edited for clarity and conciseness.';

$lang['help_template'] = 'Templates';
$lang['help_template_contents'] = 'Are you entering <b>events with similar information</b> over and over?
Than <b>templates</b> are what you need to <b>save time</b>.<br>
With templates you can <b>predefine input fields</b>
of the <a href="helpfillinevent.php">form you have to fill in when entering a new event</a>.
As an <b>example</b> suppose, that it is common for your organization
to host guest speakers.<br>
<br>
Here is what you can do:
<ol>
	<li>
		<b>add a new template</b> with the name &quot;Guest speaker&quot;,
		<b>set the fields which usually do not change </b>like category, location,
		price and contact information
	</li>
	<li>
		<b>add new event</b> and <b>choose the template</b> you have just
		created from the list that will appear
	</li>
	<li>
		<b>fill out the remaining fields</b> of the form like data, title,
		description etc. and save the event.
	</li>
</ol>';

$lang['help_updatecopydelete'] = 'Update/Copy/Delete event';
$lang['help_updatecopydelete_contents'] = 'You have 2 options:
<ol>
	<li>Click on the &quot;' . $lang['manage_events'] . '&quot; link in the update menu</li> or
	<li>In the weekly/monthly view use the icon <img src="images/edit.gif" width="16" height="16" alt="update event" border="0">
	 to <a href="helpupdateevent.php">update</a>, <img src="images/copy.gif" width="16" height="16" alt="copy event" border="0"> to
	 <a href="helpcopyevent.php">copy</a> or <img src="images/delete.gif" width="16" height="16" alt="delete event" border="0"> to <a href="helpdeleteevent.php">delete</a> an event</li>
</ol>';
$lang['help_updateevent'] = 'Update event';
$lang['help_updateevent_contents'] = 'When you choose to update an existing event you can make changes or
<a href="helpfillinevent.php">fill in</a> additional information.<br>
<br>
Please keep in mind that the changes you make will have to be <a href="helpapproval.php">approved</a> again.<br>
Therefore, they will <b>not be immediately visible</b> in the calendar.<br>
<br>
If your event is a recurring event you will be presented with the option to
either save the changes just for that one date (button &quot;Save changes&quot;)
or for all recurrences (button &quot;Save changes for ALL recurrences&quot;).';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';
$lang['help_'] = '';

?>