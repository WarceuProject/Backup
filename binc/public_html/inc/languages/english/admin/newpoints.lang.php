<?php
/***************************************************************************
 *
 *   NewPoints plugin (/inc/languages/admin/newpoints.lang.php)
 *	 Author: Pirata Nervo
 *   Copyright: � 2014 Pirata Nervo
 *   
 *   Website: http://www.mybb-plugins.com
 *
 *   NewPoints plugin for MyBB - A complex but efficient points system for MyBB.
 *
 ***************************************************************************/
 
/****************************************************************************
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
****************************************************************************/

$l['newpoints'] = "NewPoints";
$l['newpoints_submit_button'] = 'Submit';
$l['newpoints_reset_button'] = 'Reset';
$l['newpoints_error'] = 'An unknown error has occurred.';
$l['newpoints_continue_button'] = 'Continue';
$l['newpoints_click_continue'] = 'Click Continue to proceed.';
$l['newpoints_delete'] = 'Delete';
$l['newpoints_missing_fields'] = 'There is one or more missing fields.';
$l['newpoints_edit'] = 'Edit';
$l['newpoints_task_ran'] = 'Backup NewPoints task ran';

///////////////// Plugins
$l['newpoints_plugins'] = 'Plugins';
$l['newpoints_plugins_description'] = 'Here you can manage NewPoints plugins.';
$l['newpoints_plugin_incompatible'] = "This plugin is incompatible with NewPoints {1}";

///////////////// Settings
$l['newpoints_settings'] = 'Settings';
$l['newpoints_settings_description'] = 'Here you can manage NewPoints settings.';
$l['newpoints_settings_change'] = 'Change';
$l['newpoints_settings_change_description'] = 'Change settings.';
$l['newpoints_settings_main'] = 'Main Settings';
$l['newpoints_settings_main_description'] = 'These settings come with NewPoints by default.';
$l['newpoints_settings_income'] = 'Income Settings';
$l['newpoints_settings_income_description'] = 'These settings come with NewPoints by default and are related to income generated by posting, voting in polls, etc...';
$l['newpoints_select_plugin'] = 'You must select a group.';

///////////////// Log
$l['newpoints_log'] = 'Log';
$l['newpoints_log_description'] = 'Manage log entries.';
$l['newpoints_log_action'] = 'Action';
$l['newpoints_log_data'] = 'Data';
$l['newpoints_log_user'] = 'User';
$l['newpoints_log_date'] = 'Date';
$l['newpoints_log_options'] = 'Options';
$l['newpoints_no_log_entries'] = 'Could not find any log entries.';
$l['newpoints_log_entries'] = 'Log entries';
$l['newpoints_log_notice'] = 'Note: some statistics are based off log entries.';
$l['newpoints_log_deleteconfirm'] = 'Are you sure you want to delete the selected log entry?';
$l['newpoints_log_invalid'] = 'Invalid log entry.';
$l['newpoints_log_deleted'] = 'Log entry successfully deleted.';
$l['newpoints_log_prune'] = 'Prune log entries';
$l['newpoints_older_than'] = 'Older than';
$l['newpoints_older_than_desc'] = 'Prune log entries older than the number of days you enter.';
$l['newpoints_log_pruned'] = 'Log entries successfully pruned.';
$l['newpoints_log_pruneconfirm'] =' Are you sure you want to prune log entries?';
$l['newpoints_invalid_username'] = 'Invalid username selected.';
$l['newpoints_log_filter'] = 'Filters';
$l['newpoints_filter_username'] = 'Username';
$l['newpoints_filter_username_desc'] = 'Enter a username to filter by. This can be empty.';
$l['newpoints_filter_actions'] = 'Actions';
$l['newpoints_filter_actions_desc'] = 'Select the actions you want to filter.';
$l['newpoints_select_actions'] = 'Select Actions';
$l['newpoints_filter'] = 'Filters enabled:<br />{1}';
$l['newpoints_username'] = 'Username';

///////////////// Maintenance
$l['newpoints_maintenance'] = 'Maintenance';
$l['newpoints_maintenance_description'] = 'Here you can find various maintenance tools.';
$l['newpoints_recount'] = 'Recount Points';
$l['newpoints_recount_per_page'] = 'Per page';
$l['newpoints_recount_per_page_desc'] = 'Enter the number of users you want to recount per page.<br />Recount is based on the income settings.';
$l['newpoints_reset'] = 'Reset Points';
$l['newpoints_reset_per_page'] = 'Per page';
$l['newpoints_reset_per_page_desc'] = 'Enter the number of users you want to reset per page.';
$l['newpoints_recounted'] = 'You have successfully recounted users\'s money.';
$l['newpoints_reset_action'] = 'You have successfully reset users\'s money.';
$l['newpoints_reset_done'] = 'You have successfully reset users\'s money.';
$l['newpoints_recount_done'] = 'Points recounted';
$l['newpoints_recountconfirm'] = 'Are you sure you want to recount everyone\'s points?';
$l['newpoints_reset_points'] = 'Points';
$l['newpoints_reset_points_desc'] = 'Number of points everyone will be reset to.';
$l['newpoints_edituser'] = 'Edit User';
$l['newpoints_edituser_uid'] = 'User ID';
$l['newpoints_edituser_uid_desc'] = 'Enter the user id of the user you want to edit.';
$l['newpoints_reconstruct'] = 'Reconstruct Templates';
$l['newpoints_reconstruct_title'] = 'Reconstruct templates';
$l['newpoints_reconstruct_desc'] = 'The templates: postbit, postbit_classic and member_profile will be edited in order to fix variable duplicates.';
$l['newpoints_maintenance_edituser'] = 'Edit User';
$l['newpoints_maintenance_edituser_desc'] = 'Edit the points of a user.';
$l['newpoints_invalid_user'] = 'Invalid user.';
$l['newpoints_edituser_points'] = 'Edit points';
$l['newpoints_edituser_points_desc'] = 'Enter the number of points you want the selected user to have.';
$l['newpoints_user_edited'] = 'The selected user has been edited successfully.';
$l['newpoints_reconstruct_done'] = 'Templates reconstructed';
$l['newpoints_reconstructed'] = 'You have successfully reconstructed the templates successfully.';
$l['newpoints_reconstructconfirm'] = 'Are you sure you want to reconstruct the templates?';
$l['newpoints_resetconfirm'] = 'Are you sure you want to reset everyone\'s money?';

///////////////// Stats
$l['newpoints_stats'] = 'Statistics';
$l['newpoints_stats_description'] = 'View your forum statistics.';
$l['newpoints_stats_lastdonations'] = 'Last Donations';
$l['newpoints_error_gathering'] = 'Could not gather any data.';
$l['newpoints_stats_richest_users'] = 'Richest Users';
$l['newpoints_stats_from'] = 'From';
$l['newpoints_stats_to'] = 'To';
$l['newpoints_stats_date'] = 'Date';
$l['newpoints_stats_user'] = 'User';
$l['newpoints_stats_points'] = 'Points';
$l['newpoints_stats_amount'] = 'Amount';

///////////////// Forum Rules
$l['newpoints_forumrules'] = 'Forum Rules';
$l['newpoints_forumrules_description'] = 'Manage forum rules and options.';
$l['newpoints_forumrules_add'] = 'Add';
$l['newpoints_forumrules_add_description'] = 'Add a new rule.';
$l['newpoints_forumrules_edit'] = 'Edit';
$l['newpoints_forumrules_edit_description'] = 'Edit an existing rules.';
$l['newpoints_forumrules_delete'] = 'Delete';
$l['newpoints_forumrules_title'] = 'Forum Title';
$l['newpoints_forumrules_name'] = 'Rule Name';
$l['newpoints_forumrules_options'] = 'Options';
$l['newpoints_forumrules_none'] = 'Could not find any rules.';
$l['newpoints_forumrules_rules'] = 'Forum Rules';
$l['newpoints_forumrules_addrule'] = 'Add Forum Rule';
$l['newpoints_forumrules_editrule'] = 'Edit Forum Rule';
$l['newpoints_forumrules_forum'] = 'Forum';
$l['newpoints_forumrules_forum_desc'] = 'Select the forum affected by this rule.';
$l['newpoints_forumrules_name_desc'] = 'Enter the name of the rule.';
$l['newpoints_forumrules_desc'] = 'Description';
$l['newpoints_forumrules_desc_desc'] = 'Enter a description of the rule.';
$l['newpoints_forumrules_minview'] = 'Minimum points to view';
$l['newpoints_forumrules_minview_desc'] = 'Enter the minimum points required to view the selected forum.';
$l['newpoints_forumrules_minpost'] = 'Minimum points to post';
$l['newpoints_forumrules_minpost_desc'] = 'Enter the minimum points required to create a new post or thread in the selected forum.';
$l['newpoints_forumrules_rate'] = 'Income Rate';
$l['newpoints_forumrules_rate_desc'] = 'Enter the income rate for the selected forum. Default is 1';
$l['newpoints_forumrules_added'] = 'A new forum rule has been successfully added.';
$l['newpoints_select_forum'] = 'Select a forum';
$l['newpoints_forumrules_notice'] = 'Note: forums without rules have an income rate of 1 and have no minimum points to view or post.';
$l['newpoints_forumrules_invalid'] = 'Invalid rule.';
$l['newpoints_forumrules_edited'] = 'The selected rule has been edited successfully';
$l['newpoints_forumrules_deleted'] = 'The selected rule has been deleted successfully';
$l['newpoints_forumrules_deleteconfirm'] = 'Are you sure you want to delete the selected rule?';

///////////////// Group Rules
$l['newpoints_grouprules'] = 'User Group Rules';
$l['newpoints_grouprules_description'] = 'Manage usergroup rules and options.';
$l['newpoints_grouprules_add'] = 'Add';
$l['newpoints_grouprules_add_description'] = 'Add a new rule.';
$l['newpoints_grouprules_edit'] = 'Edit';
$l['newpoints_grouprules_edit_description'] = 'Edit an existing rules.';
$l['newpoints_grouprules_delete'] = 'Delete';
$l['newpoints_grouprules_title'] = 'Group Title';
$l['newpoints_grouprules_name'] = 'Rule Name';
$l['newpoints_grouprules_options'] = 'Options';
$l['newpoints_grouprules_none'] = 'Could not find any rules.';
$l['newpoints_grouprules_rules'] = 'Group Rules';
$l['newpoints_grouprules_addrule'] = 'Add Group Rule';
$l['newpoints_grouprules_editrule'] = 'Edit Group Rule';
$l['newpoints_grouprules_group'] = 'User Group';
$l['newpoints_grouprules_group_desc'] = 'Select the group affected by this rule.';
$l['newpoints_grouprules_name_desc'] = 'Enter the name of the rule.';
$l['newpoints_grouprules_desc'] = 'Description';
$l['newpoints_grouprules_desc_desc'] = 'Enter a description of the rule.';
$l['newpoints_grouprules_rate'] = 'Income Rate';
$l['newpoints_grouprules_rate_desc'] = 'Enter the income rate for the selected group. Default is 1';
$l['newpoints_grouprules_added'] = 'A new user group rule has been successfully added.';
$l['newpoints_select_group'] = 'Select a group';
$l['newpoints_grouprules_notice'] = 'Note: groups without rules have an income rate of 1 and have do not have auto payments set.';
$l['newpoints_grouprules_invalid'] = 'Invalid rule.';
$l['newpoints_grouprules_edited'] = 'The selected rule has been edited successfully';
$l['newpoints_grouprules_deleted'] = 'The selected rule has been deleted successfully';
$l['newpoints_grouprules_deleteconfirm'] = 'Are you sure you want to delete the selected rule?';
$l['newpoints_grouprules_pointsearn'] = 'Points to pay';
$l['newpoints_grouprules_pointsearn_desc'] = 'Points paid to this group each X seconds (number seconds are set in the option below).';
$l['newpoints_grouprules_period'] = 'How often this group is paid';
$l['newpoints_grouprules_period_desc'] = 'Number of seconds between each payment to all users whose <strong>primary</strong> group is this one.';

///////////////// Upgrades
$l['newpoints_upgrades'] = 'Upgrades';
$l['newpoints_upgrades_description'] = 'Upgrade NewPoints from here.';
$l['newpoints_upgrades_name'] = 'Name';
$l['newpoints_upgrades_run'] = 'Run';
$l['newpoints_upgrades_confirm_run'] = 'Are you sure you want to run the selected upgrade file?';
$l['newpoints_run'] = 'Run';
$l['newpoints_no_upgrades'] = 'No upgrades found.';
$l['newpoints_upgrades_notice'] = 'You should backup your database before running an upgrade script.<br /><small>Only run upgrade files if you\'re sure about what you\'re doing</small>';
$l['newpoints_upgrades_ran'] = 'Upgrade script ran successfully.';
$l['newpoints_upgrades_newversion'] = 'New version';

?>