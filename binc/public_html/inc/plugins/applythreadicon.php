<?php
/**
 * Apply Thread Icon
 * Copyright 2015 CrazyCat
 */

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// Tell MyBB when to run the hooks
$plugins->add_hook("moderation_start", "applythreadicon_run");
$plugins->add_hook("showthread_start", "applythreadicon_lang");
$plugins->add_hook("forumdisplay_start", "applythreadicon_lang");

// The information that shows up on the plugin manager
function applythreadicon_info()
{
	global $lang, $mybb;
	$lang->load("applythreadicon", true);

	return array(
		"name"			=> $lang->applythreadicon_info_name,
		"description"	=> $lang->applythreadicon_info_desc,
		"website"		=> "http://www.g33k-zone.org",
		"author"		=> "CrazyCat",
		"authorsite"	=> "http://www.g33k-zone.org",
		"version"		=> "1.1",
		"compatibility"	=> "16*,18*",
		"codename"		=> "applythreadicon"
	);
}

// This function runs when the plugin is activated.
function applythreadicon_activate()
{
	global $db, $mybb;
	$insert_array = array(
		'title'		=> 'moderation_applyicon',
		'template'	=> $db->escape_string('<html>
<head>
<title>{$mybb->settings[\'bbname\']} - {$lang->apply_thread_icon}</title>
{$headerinclude}
</head>
<body>
{$header}
<form action="moderation.php" method="post">
<input type="hidden" name="my_post_key" value="{$mybb->post_code}" />
<table border="0" cellspacing="{$theme[\'borderwidth\']}" cellpadding="{$theme[\'tablespace\']}" class="tborder">
<tr>
<td class="thead" colspan="2"><strong>{$lang->apply_thread_icon}</strong></td>
</tr>
{$loginbox}
{$iconselect}
</table>
<br />
<div align="center"><input type="submit" class="button" name="submit" value="{$lang->apply_thread_icon}" /></div>
<input type="hidden" name="action" value="do_applyicon" />
<input type="hidden" name="tid" value="{$tid}" />
</form>
{$footer}
</body>
</html>'),
		'sid'		=> '-1',
		'version'	=> '',
		'dateline'	=> TIME_NOW
	);
	$db->insert_query("templates", $insert_array);

	$insert_array = array(
		'title'		=> 'moderation_inline_applyicon',
		'template'	=> $db->escape_string('<html>
<head>
<title>{$mybb->settings[\'bbname\']} - {$lang->apply_thread_icon}</title>
{$headerinclude}
</head>
<body>
{$header}
<form action="moderation.php" method="post">
<input type="hidden" name="my_post_key" value="{$mybb->post_code}" />
<table border="0" cellspacing="{$theme[\'borderwidth\']}" cellpadding="{$theme[\'tablespace\']}" class="tborder">
<tr>
<td class="thead" colspan="2"><strong>{$lang->apply_thread_icon}</strong></td>
</tr>
{$loginbox}
{$iconselect}
</table>
<br />
<div align="center"><input type="submit" class="button" name="submit" value="{$lang->apply_thread_icon}" /></div>
<input type="hidden" name="action" value="do_multiapplyicon" />
<input type="hidden" name="fid" value="{$fid}" />
<input type="hidden" name="threads" value="{$inlineids}" />
</form>
{$footer}
</body>
</html>'),
		'sid'		=> '-1',
		'version'	=> '',
		'dateline'	=> TIME_NOW
	);
	$db->insert_query("templates", $insert_array);
	include MYBB_ROOT."/inc/adminfunctions_templates.php";
	if (strpos((string)$mybb->version_code, '16')===0) {
		find_replace_templatesets("showthread_moderationoptions", "#".preg_quote('</optgroup>')."#i", '<option value="applyicon">{$lang->apply_thread_icon}</option></optgroup>');
		find_replace_templatesets("forumdisplay_inlinemoderation", "#".preg_quote('</optgroup>')."#i", '<option value="multiapplyicon">{$lang->apply_thread_icon}</option></optgroup>');
	} else {
		find_replace_templatesets("showthread_moderationoptions_standard", "#".preg_quote('</optgroup>')."#i", '<option value="applyicon">{$lang->apply_thread_icon}</option></optgroup>');
		find_replace_templatesets("forumdisplay_inlinemoderation_standard", "#".preg_quote('</optgroup>')."#i", '<option value="multiapplyicon">{$lang->apply_thread_icon}</option></optgroup>');
	}
}

// This function runs when the plugin is deactivated.
function applythreadicon_deactivate()
{
	global $db, $mybb;
	$db->delete_query("templates", "title IN('moderation_applyicon','moderation_inline_applyicon')");

	include MYBB_ROOT."/inc/adminfunctions_templates.php";
	if (strpos((string)$mybb->version_code, '16')===0) {
		find_replace_templatesets("showthread_moderationoptions", "#".preg_quote('<option value="applyicon">{$lang->apply_thread_icon}</option>')."#i", '', 0);
		find_replace_templatesets("forumdisplay_inlinemoderation", "#".preg_quote('<option value="multiapplyicon">{$lang->apply_thread_icon}</option>')."#i", '', 0);
	} else {
		find_replace_templatesets("showthread_moderationoptions_standard", "#".preg_quote('<option value="applyicon">{$lang->apply_thread_icon}</option>')."#i", '', 0);
		find_replace_templatesets("forumdisplay_inlinemoderation_standard", "#".preg_quote('<option value="multiapplyicon">{$lang->apply_thread_icon}</option>')."#i", '', 0);
	}
}

// Apply Thread Prefix moderation page
function applythreadicon_run()
{
	global $db, $mybb, $lang, $templates, $theme, $headerinclude, $header, $footer, $loginbox, $applyicon, $moderation, $inlineids;
	$lang->load("applythreadicon");

	if($mybb->input['action'] != "applyicon" && $mybb->input['action'] != "do_applyicon" && $mybb->input['action'] != "multiapplyicon" && $mybb->input['action'] != "do_multiapplyicon")
	{
		return;
	}

	if($mybb->user['uid'] != 0)
	{
		eval("\$loginbox = \"".$templates->get("changeuserbox")."\";");
	}
	else
	{
		eval("\$loginbox = \"".$templates->get("loginbox")."\";");
	}

	$tid = intval($mybb->input['tid']);
	$thread = get_thread($tid);
	$post = get_post($thread['firstpost']);

	$fid = intval($mybb->input['fid']);
	$forum = get_forum($fid);

	if($mybb->input['action'] == "applyicon" && $mybb->request_method == "post")
	{
		// Verify incoming POST request
		verify_post_check($mybb->input['my_post_key']);

		if(!is_moderator($thread['fid'], "canmanagethreads"))
		{
			error_no_permission();
		}

		if(!$thread['tid'])
		{
			error($lang->error_invalidthread);
		}

		check_forum_password($thread['fid']);


		build_forum_breadcrumb($thread['fid']);
		add_breadcrumb($thread['subject'], get_thread_link($thread['tid']));
		add_breadcrumb($lang->nav_apply_prefix);

		$iconselect = get_post_icons();

		eval("\$applyicon = \"".$templates->get("moderation_applyicon")."\";");
		output_page($applyicon);
	}

	if($mybb->input['action'] == "do_applyicon" && $mybb->request_method == "post")
	{
		// Verify incoming POST request
		verify_post_check($mybb->input['my_post_key']);

		if(!is_moderator($thread['fid'], "canmanagethreads"))
		{
			error_no_permission();
		}

		if(!intval($mybb->input['icon']))
		{
			error($lang->no_icon_selected);
		}

		apply_thread_icon($thread['tid'], $mybb->input['icon']);

		log_moderator_action(array("tid" => $thread['tid'], "fid" => $thread['fid']), $lang->thread_icon_applied);

		moderation_redirect(get_thread_link($thread['tid']), $lang->redirect_thread_icon_applied);
	}

	if($mybb->input['action'] == "multiapplyicon" && $mybb->request_method == "post")
	{
		// Verify incoming POST request
		verify_post_check($mybb->input['my_post_key']);

		if(!is_moderator($forum['fid'], "canmanagethreads"))
		{
			error_no_permission();
		}

		if(!$forum['fid'])
		{
			error($lang->error_invalidforum);
		}

		$threads = getids($fid, 'forum');

		if(count($threads) < 1)
		{
			error($lang->error_inline_nothreadsselected);
		}

		$inlineids = implode("|", $threads);
		clearinline($fid, 'forum');

		check_forum_password($forum['fid']);

		build_forum_breadcrumb($forum['fid']);
		add_breadcrumb($lang->nav_apply_icon);

		$iconselect = get_post_icons();

		eval("\$multiapplyicon = \"".$templates->get("moderation_inline_applyicon")."\";");
		output_page($multiapplyicon);
	}

	if($mybb->input['action'] == "do_multiapplyicon" && $mybb->request_method == "post")
	{
		// Verify incoming POST request
		verify_post_check($mybb->input['my_post_key']);

		$threadlist = explode("|", $mybb->input['threads']);
		foreach($threadlist as $tid)
		{
			$tid = intval($tid);
			$tlist[] = $tid;
		}

		if(!is_moderator($forum['fid'], "canmanagethreads"))
		{
			error_no_permission();
		}

		if(!intval($mybb->input['icon']))
		{
			error($lang->no_icon_selected);
		}

		apply_thread_icon($tlist, $mybb->input['icon']);

		log_moderator_action(array("fid" => $forum['fid']), $lang->thread_icon_applied);

		moderation_redirect(get_forum_link($forum['fid']), $lang->redirect_inline_thread_icon_applied);
	}
	exit;
}

function apply_thread_icon($tids, $icon=0) {
	global $db;

	if(!is_array($tids)) {
		$tids = array($tids);
	}

	if(empty($tids)) {
		return false;
	}

	$icon = intval($icon);
	$tids = array_map('intval', $tids);
	$tids_csv = implode(',', $tids);
	$query = $db->simple_select("threads", "firstpost", "tid IN (".$tids_csv.")");
	$pids = array();
	while($row = $db->fetch_array($query)) {
		$pids[] = $row['firstpost'];
	}
	$pids_csv = implode(',', $pids);
	$update = $db->update_query("posts", array("icon" => $icon), "pid in (".$pids_csv.")");
	$update = $db->update_query("threads", array("icon" => $icon), "tid IN (".$tids_csv.")");
}

// Shows language on show thread and forum display
function applythreadicon_lang()
{
	global $lang;
	$lang->load("applythreadicon");
}

