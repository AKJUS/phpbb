<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Here you can determine the basic operation of your board, give it a fitting name and description, and among other settings adjust the default values for timezone and language.',
	'BOARD_INDEX_TEXT'				=> 'Board index text',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'This text is displayed as the board index in the board’s breadcrumbs. If not specified, it will default to “Board index”.',
	'BOARD_STYLE'					=> 'Board style',
	'CUSTOM_DATEFORMAT'				=> 'Custom…',
	'DEFAULT_DATE_FORMAT'			=> 'Date format',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'The syntax uses the same format as the PHP <a href="https://www.php.net/manual/datetime.format.php">date functions</a>.',
	'DEFAULT_LANGUAGE'				=> 'Default language',
	'DEFAULT_STYLE'					=> 'Default style',
	'DEFAULT_STYLE_EXPLAIN'			=> 'The default style for new users.',
	'DISABLE_BOARD'					=> 'Disable board',
	'DISABLE_BOARD_EXPLAIN'			=> 'This will make the board unavailable to users who are neither administrators nor moderators. You can also enter a short (255 character) message to display if you wish.',
	'DISABLE_BOARD_ACCESS'			=> 'Limit access to disabled board',
	'DISABLE_BOARD_ACCESS_EXPLAIN'	=> 'This setting limits who can access a disabled board.',
	'DISABLE_BOARD_ACCESS_ADMIN'			=> 'Only administrators',
	'DISABLE_BOARD_ACCESS_ADMIN_GLOB_MODS'	=> 'Only administrators and global moderators',
	'DISABLE_BOARD_ACCESS_ADMIN_ALL_MODS'	=> 'Only administrators and all moderators',
	'DISPLAY_LAST_SUBJECT'			=> 'Display subject of last added post on forum list',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'The subject of the last added post will be displayed in the forum list with a hyperlink to the post. Subjects from password protected forums and forums in which user doesn’t have read access are not shown.',
	'DISPLAY_UNAPPROVED_POSTS'		=> 'Display unapproved posts to the author',
	'DISPLAY_UNAPPROVED_POSTS_EXPLAIN'	=> 'Unapproved posts can be viewed by the author. Does not apply to Guest posts.',
	'GUEST_STYLE'					=> 'Guest style',
	'GUEST_STYLE_EXPLAIN'			=> 'The board style for guests.',
	'OVERRIDE_STYLE'				=> 'Override user style',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Replaces user’s (and guest’s) style with the style as defined under "Default style".',
	'SITE_DESC'						=> 'Site description',
	'SITE_HOME_TEXT'				=> 'Main website text',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'This text will be displayed as a link to your website homepage in the board’s breadcrumbs. If not specified, it will default to “Home”.',
	'SITE_HOME_URL'					=> 'Main website URL',
	'SITE_HOME_URL_EXPLAIN'			=> 'If specified, a link to this URL will be prepended to your board’s breadcrumbs and the board logo will link to this URL instead of the forum index. An absolute URL is required, e.g. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Site name',
	'SITE_NAME_SHORT'				=> 'Short site name',
	'SITE_NAME_SHORT_EXPLAIN'		=> 'Short name will be used if your site is added to a mobile device’s home screen. It can not exceed 12 characters (Emoji is supported).',
	'SYSTEM_TIMEZONE'				=> 'Guest timezone',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Timezone to use for displaying times to users who are not logged in (guests, bots). Logged in users set their timezone during registration and can change it in their user control panel.',
	'WARNINGS_EXPIRE'				=> 'Warning duration',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Number of days that will elapse before a warning will automatically expire from a user’s record. Set this value to 0 to make warnings permanent.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Here you can enable/disable several board features.',

	'ALLOW_ATTACHMENTS'			=> 'Allow attachments',
	'ALLOW_BIRTHDAYS'			=> 'Allow birthdays',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Allow birthdays to be entered and age being displayed in profiles. Please note the birthday list within the board index is controlled by a separate load setting.',
	'ALLOW_BOOKMARKS'			=> 'Allow bookmarking topics',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'User is able to store personal bookmarks.',
	'ALLOW_BBCODE'				=> 'Allow BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Allow subscribing to forums',
	'ALLOW_NAME_CHANGE'			=> 'Allow username changes',
	'ALLOW_NO_CENSORS'			=> 'Allow disabling of word censoring',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Users can choose to disable the automatic word censoring of posts and private messages.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Allow attachments in private messages',
	'ALLOW_PM_REPORT'			=> 'Allow users to report private messages',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'If this setting is enabled, users have the option of reporting a private message they have received or sent to the board’s moderators. These private messages will then be visible in the Moderator Control Panel.',
	'ALLOW_QUICK_REPLY'			=> 'Allow quick reply',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'This switch allows for the quick reply to be disabled board-wide. When enabled, forum specific settings will be used to determine whether the quick reply is displayed in individual forums.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Submit and enable quick reply in all forums',
	'ALLOW_SIG'					=> 'Allow signatures',
	'ALLOW_SIG_BBCODE'			=> 'Allow BBCode in user signatures',
	'ALLOW_SIG_IMG'				=> 'Allow use of <code>[IMG]</code> BBCode tag in user signatures',
	'ALLOW_SIG_LINKS'			=> 'Allow use of links in user signatures',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'If disallowed the <code>[URL]</code> BBCode tag and automatic/magic URLs are disabled.',
	'ALLOW_SIG_SMILIES'			=> 'Allow use of smilies in user signatures',
	'ALLOW_SMILIES'				=> 'Allow smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'Allow subscribing to topics',
	'BOARD_PM'					=> 'Private messaging',
	'BOARD_PM_EXPLAIN'			=> 'Enable private messaging for all users.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Allow board notifications',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars are generally small, unique images a user can associate with themselves. Depending on the style they are usually displayed below the username when viewing topics. Here you can determine how users can define their avatars. Please note that in order to upload avatars you need to have created the directory you name below and ensure it can be written to by the web server.',

	'ALLOW_AVATARS'					=> 'Enable avatars',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Allow general usage of avatars;<br>If you disable avatars in general or avatars of a certain mode, the disabled avatars will no longer be shown on the board, but users will still be able to download their own avatars in the User Control Panel.',
	'ALLOW_GRAVATAR'				=> 'Enable gravatar avatars',
	'ALLOW_LOCAL'					=> 'Enable gallery avatars',
	'ALLOW_UPLOAD'					=> 'Enable avatar uploading',
	'AVATAR_GALLERY_PATH'			=> 'Avatar gallery path',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Path under your phpBB root directory for pre-loaded images, e.g. <samp>images/avatars/gallery</samp>.<br>Double dots like <samp>../</samp> will be stripped from the path for security reasons.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar storage path',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Path under your phpBB root directory, e.g. <samp>images/avatars/upload</samp>.<br>Avatar uploading <strong>will not be available</strong> if this path is not writable.<br>Double dots like <samp>../</samp> will be stripped from the path for security reasons.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatar dimensions',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Width x Height in pixels.',
	'MAX_FILESIZE'					=> 'Maximum avatar file size',
	'MAX_FILESIZE_EXPLAIN'			=> 'For uploaded avatar files. If this value is 0, the uploaded filesize is only limited by your PHP configuration.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatar dimensions',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Width x Height in pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Here you can set all default settings for private messaging.',

	'ALLOW_BBCODE_PM'			=> 'Allow BBCode in private messages',
	'ALLOW_FORWARD_PM'			=> 'Allow forwarding of private messages',
	'ALLOW_IMG_PM'				=> 'Allow use of <code>[IMG]</code> BBCode tag',
	'ALLOW_MASS_PM'				=> 'Allow sending of private messages to multiple users and groups',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Sending to groups can be adjusted per group within the group settings page.',
	'ALLOW_PRINT_PM'			=> 'Allow print view in private messaging',
	'ALLOW_QUOTE_PM'			=> 'Allow quotes in private messages',
	'ALLOW_SIG_PM'				=> 'Allow signature in private messages',
	'ALLOW_SMILIES_PM'			=> 'Allow smilies in private messages',
	'BOXES_LIMIT'				=> 'Maximum private messages per box',
	'BOXES_LIMIT_EXPLAIN'		=> 'Users may receive no more than this many messages in each of their private message boxes. Set this value to 0 to allow unlimited messages.',
	'BOXES_MAX'					=> 'Maximum private message folders',
	'BOXES_MAX_EXPLAIN'			=> 'By default users may create this many personal folders for private messages.',
	'ENABLE_PM_ICONS'			=> 'Enable use of topic icons in private messages',
	'FULL_FOLDER_ACTION'		=> 'Full folder default action',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Default action to take if a user’s folder is full assuming the user’s folder action, if set at all, is not applicable. The only exception is for the “Sent messages” folder where the default action is always to delete old messages.',
	'HOLD_NEW_MESSAGES'			=> 'Hold new messages',
	'PM_EDIT_TIME'				=> 'Limit editing time',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limits the time available to edit a private message not already delivered. Setting the value to 0 disables this behaviour.',
	'PM_MAX_RECIPIENTS'			=> 'Maximum number of allowed recipients',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'The maximum number of allowed recipients in a private message. If 0 is entered, an unlimited number is allowed. This setting can be adjusted for every group within the group settings page.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Here you can set all default settings for posting.',
	'ALLOW_MENTIONS'					=> 'Allow mentions of users and groups boardwide',
	'ALLOW_POST_LINKS'					=> 'Allow links in posts/private messages',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'If disallowed the <code>[URL]</code> BBCode tag and automatic/magic URLs are disabled.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Allowed schemes in links',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Users can only post schemeless URLs or one of the comma-separated list of allowed schemes.',

	'BUMP_INTERVAL'					=> 'Bump interval',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Number of minutes, hours or days between the last post to a topic and the ability to bump that topic. Setting the value to 0 disables bumping entirely.',
	'CHAR_LIMIT'					=> 'Maximum characters per post/message',
	'CHAR_LIMIT_EXPLAIN'			=> 'The number of characters allowed within a post/private message. Set to 0 for unlimited characters.',
	'DELETE_TIME'					=> 'Limit deleting time',
	'DELETE_TIME_EXPLAIN'			=> 'Limits the time available to delete a new post. Setting the value to 0 disables this behaviour.',
	'DISPLAY_LAST_EDITED'			=> 'Display last edited time information',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Choose if the last edited by information to be displayed on posts.',
	'EDIT_TIME'						=> 'Limit editing time',
	'EDIT_TIME_EXPLAIN'				=> 'Limits the time available to edit a new post. Setting the value to 0 disables this behaviour.',
	'FLOOD_INTERVAL'				=> 'Flood interval',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Number of seconds a user must wait between posting new messages. To enable users to ignore this alter their permissions.',
	'HOT_THRESHOLD'					=> 'Popular topic threshold',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Posts per topic threshold required for the popular topic annotation. Set to 0 to disable popular topics.',
	'MAX_POLL_OPTIONS'				=> 'Maximum number of poll options',
	'MAX_POST_FONT_SIZE'			=> 'Maximum font size per post',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximum font size allowed in a post. Set to 0 for unlimited font size.',
	'MAX_POST_URLS'					=> 'Maximum links per post',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximum number of URLs in a post. Set to 0 for unlimited links.',
	'MENTIONS'						=> 'Mentions',
	'MENTION_BATCH_SIZE'			=> 'Maximum number of names fetched from each source of names for a single request',
	'MENTION_BATCH_SIZE_EXPLAIN'	=> 'Examples of sources: friends, topic repliers, group members etc.',
	'MENTION_NAMES_LIMIT'			=> 'Maximum number of names in dropdown list',
	'MIN_CHAR_LIMIT'				=> 'Minimum characters per post/message',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'The minimum number of characters the user need to enter within a post/private message. The minimum for this setting is 1.',
	'POSTING'						=> 'Posting',
	'POSTS_PER_PAGE'				=> 'Posts per page',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum nesting depth for quotes',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximum quote nesting depth in a post. Set to 0 for unlimited depth.',
	'SMILIES_LIMIT'					=> 'Maximum smilies per post',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximum number of smilies in a post. Set to 0 for unlimited smilies.',
	'SMILIES_PER_PAGE'				=> 'Smilies per page',
	'TOPICS_PER_PAGE'				=> 'Topics per page',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Here you can set all default settings for signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximum signature font size',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximum font size allowed in user signatures. Set to 0 for unlimited size.',
	'MAX_SIG_LENGTH'				=> 'Maximum signature length',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximum number of characters in user signatures.',
	'MAX_SIG_SMILIES'				=> 'Maximum smilies per signature',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximum smilies allowed in user signatures. Set to 0 for unlimited smilies.',
	'MAX_SIG_URLS'					=> 'Maximum signature links',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximum number of links in user signatures. Set to 0 for unlimited links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Here you are able to define registration and profile related settings.',

	'ACC_ACTIVATION'				=> 'Account activation',
	'ACC_ACTIVATION_EXPLAIN'		=> 'This determines whether users have immediate access to the board or if confirmation is required. You can also completely disable new registrations. <em>“Board-wide email” must be enabled in order to use user or admin activation.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Please note that the currently selected activation method requires emails to be enabled, otherwise registration will be disabled. We recommend to either select a different activation method or reenable emails.',
	'NEW_MEMBER_POST_LIMIT'			=> 'New member post limit',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'New members are within the <em>Newly Registered Users</em> group until they reach this number of posts. You can use this group to keep them from using the PM system or to review their posts. <strong>A value of 0 disables this feature.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Set Newly Registered Users group to default',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'If set to yes, and a new member post limit is specified, newly registered users will not only be put into the <em>Newly Registered Users</em> group, but this group will also be their default one. This may come in handy if you want to assign a group default rank and/or avatar the user then inherits.',

	'ACC_ADMIN'					=> 'By admin',
	'ACC_DISABLE'				=> 'Disable registration',
	'ACC_NONE'					=> 'No activation (immediate access)',
	'ACC_USER'					=> 'By user (email verification)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Allow email address re-use',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Different users can register with the same email address.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax number',
	'COPPA_MAIL'				=> 'COPPA mailing address',
	'COPPA_MAIL_EXPLAIN'		=> 'This is the mailing address where parents will send COPPA registration forms.',
	'ENABLE_COPPA'				=> 'Enable COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'This requires users to declare whether they are 13 or over for compliance with the U.S. COPPA. If this is disabled the COPPA specific groups will no longer be displayed.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'No suitable auth plugin found.',
	'PASSWORD_LENGTH'			=> 'Password length',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimum number of characters in passwords. Note that the maximum number is not limited.',
	'REG_LIMIT'					=> 'Registration attempts',
	'REG_LIMIT_EXPLAIN'			=> 'Number of attempts users can make at solving the anti-spambot task before being locked out of that session.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumeric only',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumeric and spacers',
	'USERNAME_ASCII'			=> 'ASCII (no international unicode)',
	'USERNAME_LETTER_NUM'		=> 'Any letter and number',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Any letter, number, and spacer',
	'USERNAME_CHARS'			=> 'Limit username chars',
	'USERNAME_CHARS_ANY'		=> 'Any character',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restrict type of characters that may be used in usernames, spacers are: space, -, +, _, [ and ].',
	'USERNAME_LENGTH'			=> 'Username length',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimum and maximum number of characters in usernames.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'General syndication feeds settings',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'This module makes available various ATOM feeds, parsing any BBCode in posts to make them readable in external feeds.',

	'ACP_FEED_GENERAL'					=> 'General feed settings',
	'ACP_FEED_POST_BASED'				=> 'Post-based feed settings',
	'ACP_FEED_TOPIC_BASED'				=> 'Topic-based feed settings',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Other feeds and settings',

	'ACP_FEED_ENABLE'					=> 'Enable feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Turns on or off ATOM feeds for the entire board.<br>Disabling this switches off all feeds, no matter how the options below are set.',
	'ACP_FEED_LIMIT'					=> 'Number of items',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'The maximum number of feed items to display.',

	'ACP_FEED_OVERALL'					=> 'Enable board-wide feed',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Board-wide new posts.',
	'ACP_FEED_FORUM'					=> 'Enable per-forum feeds',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Single forum and subforums new posts.',
	'ACP_FEED_TOPIC'					=> 'Enable per-topic feeds',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Single topics new posts.',

	'ACP_FEED_TOPICS_NEW'				=> 'Enable new topics feed',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Enables the “New Topics” feed, which displays the last created topics including the first post.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Enable active topics feed',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Enables the “Active Topics” feed, which displays the last active topics including the last post.',
	'ACP_FEED_NEWS'						=> 'News feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Pull the first post from these forums. Select no forums to disable news feed.<br>Select multiple forums by holding <samp>CTRL</samp> and clicking.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Enable forums feed',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Enables the “All forums” feed, which displays a list of forums.',

	'ACP_FEED_HTTP_AUTH'				=> 'Allow HTTP Authentication',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Enables HTTP authentication, which allows users to receive content that is hidden to guest users by adding the <samp>auth=http</samp> parameter to the feed URL. Please note that some PHP setups require additional changes to the .htaccess file. Instructions can be found in that file.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Item statistics',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Display individual statistics underneath feed items<br>(e.g. posted by, date and time, replies, views)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Exclude these forums',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Content from these will be <strong>not included in feeds</strong>. Select no forum to pull data from all forums.<br>Select/Deselect multiple forums by holding <samp>CTRL</samp> and clicking.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Here you can select and configure plugins, which are designed to block automated form submissions by spambots. These plugins typically work by challenging the user with a <em>CAPTCHA</em>, a test which is designed to be difficult for computers to solve. phpBB defaults to "Incomplete Captcha," disabling verification and preventing functionality like registration that require CAPTCHA verification.',
	'ACP_VC_EXT_GET_MORE'					=> 'For additional (and possibly better) anti-spam plugins, visit the <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>. For more information on preventing spam on your board, visit the <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Available plugins',
	'CAPTCHA_UNAVAILABLE'					=> 'The plugin cannot be selected as its requirements are not met.',
	'CAPTCHA_INCOMPLETE'					=> 'Incomplete Captcha (Not configured)',
	'CAPTCHA_PREVIEW_MSG'					=> 'Your changes have not been saved, this is just a preview.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'The plugin as it would look like using the current selection.',

	'CAPTCHA_SELECT'						=> 'Installed plugins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'The dropdown holds the plugins recognised by the board. Grey entries are not available right now and might need configuration prior to use.',
	'CAPTCHA_CONFIGURE'						=> 'Configure plugins',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Change the settings for the selected plugin.',
	'CONFIGURE'								=> 'Configure',
	'CAPTCHA_NO_OPTIONS'					=> 'This plugin has no configuration options.',

	'VISUAL_CONFIRM_POST'					=> 'Enable spambot countermeasures for guest postings',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requires guest users to pass the anti-spambot task to help prevent automated postings.',
	'VISUAL_CONFIRM_REG'					=> 'Enable spambot countermeasures for registrations',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requires new users to pass the anti-spambot task to help prevent automated registrations.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Allow users to refresh the anti-spambot task',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Allows users to request a new anti-spambot task if they are unable to solve the current task during registration. Some plugins might not support this option.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'These details define the data used to send cookies to your users browsers. In most cases the default values for the cookie settings should be sufficient. If you do need to change any do so with care, incorrect settings can prevent users logging in. If you have problems with users staying logging in to your board, visit the <strong><a href="https://www.phpbb.com/support/go/cookie-settings">phpBB.com Knowledge Base - Fixing incorrect cookie settings</a></strong>.',

	'COOKIE_DOMAIN'				=> 'Cookie domain',
	'COOKIE_DOMAIN_EXPLAIN'		=> 'In most cases the cookie domain is optional. Leave it blank if you are unsure.<br><br> In the case where you have a board integrated with other software or have multiple domains, then to determine the cookie domain you need to do the following. If you have something like <i>example.com</i> and <i>forums.example.com</i>, or perhaps <i>forums.example.com</i> and <i>blog.example.com</i>. Remove the subdomains until you find the common domain, <i>example.com</i>. Now add a dot in front of the common domain and you would enter .example.com (note the dot at the beginning).',
	'COOKIE_NAME'				=> 'Cookie name',
	'COOKIE_NAME_EXPLAIN'		=> 'This can be anything what you want, make it original. Whenever the cookie settings are changed the name of the cookie should be changed.',
	'COOKIE_NOTICE'				=> 'Cookie notice',
	'COOKIE_NOTICE_EXPLAIN'		=> 'If enabled a cookie notice will be displayed to users when visiting your board. This might be required by law depending on the content of your board and enabled extensions.',
	'COOKIE_PATH'				=> 'Cookie path',
	'COOKIE_PATH_EXPLAIN'		=> 'This will usually be the same as your script path or simply a slash to make the cookie accessible across the site domain.',
	'COOKIE_SECURE'				=> 'Cookie secure',
	'COOKIE_SECURE_EXPLAIN'		=> 'If your server is running via SSL set this to enabled else leave as disabled. Having this enabled and not running via SSL will result in server errors during redirects.',
	'ONLINE_LENGTH'				=> 'View online time span',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Number of minutes after which inactive users will not appear in “Who is online” listings. The higher this value the greater is the processing required to generate the listing.',
	'SESSION_LENGTH'			=> 'Session length',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessions will expire after this time, in seconds.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Here you can enable and disable the contact page and also add a text that is displayed on the page.',

	'CONTACT_US_ENABLE'				=> 'Enable contact page',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'This page allows users to send emails to board administrators. Please note that board-wide emails option must be enabled as well. You can find this option in General &gt; Client Communication &gt; Email settings.',

	'CONTACT_US_INFO'				=> 'Contact information',
	'CONTACT_US_INFO_EXPLAIN'		=> 'The message is displayed on the contact page',
	'CONTACT_US_INFO_PREVIEW'		=> 'Contact page information - Preview',
	'CONTACT_US_INFO_UPDATED'		=> 'Contact page information has been updated.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Here you can enable and disable certain board functions to reduce the amount of processing required. On most servers there is no need to disable any functions. However on certain systems or in shared hosting environments it may be beneficial to disable capabilities you do not really need. You can also specify limits for system load and active sessions beyond which the board will go offline.',

	'ALLOW_CDN'						=> 'Allow usage of third party content delivery networks',
	'ALLOW_CDN_EXPLAIN'				=> 'If this setting is enabled, some files will be served from external third party servers instead of your server. This reduces the network bandwidth used by your server, but may present a privacy issue in some countries. In a default phpBB installation, this includes loading “jQuery” and the font “Open Sans” from Google’s content delivery network. This also applies to the “Font Awesome” font, which phpBB and some extensions use to render icons.',
	'ALLOW_LIVE_SEARCHES'			=> 'Allow live searches',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'If this setting is enabled, users are provided with keyword suggestions as they type in certain fields throughout the board.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Custom profile fields',
	'LIMIT_LOAD'					=> 'Limit system load',
	'LIMIT_LOAD_EXPLAIN'			=> 'If the system’s 1-minute load average exceeds this value the board will automatically go offline. A value of 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers and where this information is accessible. The value here resets itself to 0 if phpBB was unable to get the load limit.',
	'LIMIT_SESSIONS'				=> 'Limit sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'If the number of sessions exceeds this value within a one minute period the board will go offline. Set to 0 for unlimited sessions.',
	'LOAD_CPF_MEMBERLIST'			=> 'Allow styles to display custom profile fields in memberlist',
	'LOAD_CPF_PM'					=> 'Display custom profile fields in private messages',
	'LOAD_CPF_VIEWPROFILE'			=> 'Display custom profile fields in user profiles',
	'LOAD_CPF_VIEWTOPIC'			=> 'Display custom profile fields on topic pages',
	'LOAD_USER_ACTIVITY'			=> 'Show user’s activity',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Displays active topic/forum in user profiles and user control panel. It is recommended to disable this on boards with more than one million posts.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'User’s activity post limit',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'The active topic/forum won’t be shown for users having more than this number of posts. Set to 0 to disable the limit.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Read Notification Expiration',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Number of days that will elapse before a read notification will automatically be deleted. Set this value to 0 to make notifications permanent.',
	'RECOMPILE_STYLES'				=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Check for updated style components on filesystem and recompile.',
	'YES_ACCURATE_PM_BUTTON'			=> 'Enable permission specific PM button in topic pages',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> 'If this setting is enabled, only post profiles of users who are permitted to read private messages will have a private message button.',
	'YES_ANON_READ_MARKING'			=> 'Enable topic marking for guests',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stores read/unread status information for guests. If disabled, posts are always marked read for guests.',
	'YES_BIRTHDAYS'					=> 'Enable birthday listing',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'If disabled the birthday listing is no longer displayed. To let this setting take effect the birthday feature needs to be enabled too.',
	'YES_JUMPBOX'					=> 'Enable display of jumpbox',
	'YES_MODERATORS'				=> 'Enable display of moderators',
	'YES_ONLINE'					=> 'Enable online user listings',
	'YES_ONLINE_EXPLAIN'			=> 'Display online user information on index, forum and topic pages.',
	'YES_ONLINE_GUESTS'				=> 'Enable online guest listings in viewonline',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Allow display of guest user information in viewonline.',
	'YES_ONLINE_TRACK'				=> 'Enable display of user online/offline information',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Display online information for user in profiles and topic pages.',
	'YES_POST_MARKING'				=> 'Enable dotted topics',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indicates whether user has posted to a topic.',
	'YES_READ_MARKING'				=> 'Enable server-side topic marking',
	'YES_READ_MARKING_EXPLAIN'		=> 'Stores read/unread status information in the database rather than a cookie.',
	'YES_UNREAD_SEARCH'				=> 'Enable search for unread posts',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB supports authentication plug-ins, or modules. These allow you determine how users are authenticated when they log into the board. By default four plug-ins are provided: DB, LDAP, Apache, and OAuth. Not all methods require additional information so only fill out fields if they are relevant to the selected method.',

	'AUTH_METHOD'				=> 'Select an authentication method',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Both the key and secret of each enabled OAuth service provider must be provided. Only one was provided for an OAuth service provider.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Each OAuth provider requires a unique secret and key in order to authenticate with the external server. These should be supplied by the OAuth service when you register your website with them and should be entered exactly as provided to you.<br>Any service that does not have both a key and a secret entered here will not be available for use by the forum users. Also note, that user can still register and login using the DB authentication plug-in.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'You have to setup apache authentication before you switch phpBB to this authentication method. Keep in mind that the username you use for apache authentication has to be the same as your phpBB username. Apache authentication can only be used with mod_php (not with a CGI version).',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP email attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'Set this to the name of your user entry email attribute (if one exists) in order to automatically set the email address for new users. Leaving this empty results in empty email address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'					=> 'The specified email attribute does not exist.',
	'LDAP_NO_IDENTITY'				=> 'Could not find a login identity for %s.',
	'LDAP_PASSWORD'					=> 'LDAP password',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Leave blank to use anonymous binding, otherwise fill in the password for the above user. Required for Active Directory Servers.<br><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'LDAP_PORT'						=> 'LDAP server port',
	'LDAP_PORT_EXPLAIN'				=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'					=> 'LDAP server name',
	'LDAP_SERVER_EXPLAIN'			=> 'If using LDAP this is the hostname or IP address of the LDAP server. Alternatively you can specify an URL like ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP user <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Here you define server and domain dependent settings. Please ensure the data you enter is accurate, errors will result in emails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.',

	'ENABLE_GZIP'				=> 'Enable GZip compression',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generated content will be compressed prior to sending it to the user. This can reduce network traffic but will also increase CPU usage on both server and client side. Requires zlib PHP extension to be loaded.',
	'FORCE_SERVER_VARS'			=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'				=> 'Post icons storage path',
	'ICONS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Enable URL Rewriting',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'When enabled, URLs containing ’app.php’ will be rewritten to remove the filename (i.e. app.php/foo will become /foo). <strong>Apache server’s mod_rewrite module is required for this functionality to work; if this option is enabled without mod_rewrite support, URLs on your board may be broken.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'The <strong>mod_rewrite</strong> module on your Apache web server is disabled. Enable the module or contact your web hosting provider if you wish to enable this feature.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'We are unable to determine whether or not this server supports URL rewriting. This setting may be enabled but if URL rewriting is not available, paths generated by this board (such as for use in links) may be broken. Contact your web hosting provider if you are unsure whether or not you can safely enable this feature.',
	'PATH_SETTINGS'				=> 'Path settings',
	'RANKS_PATH'				=> 'Rank image storage path',
	'RANKS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB</samp>.',
	'SERVER_NAME'				=> 'Domain name',
	'SERVER_NAME_EXPLAIN'		=> 'The domain name this board runs from (for example: <samp>example.com</samp>).',
	'SERVER_PORT'				=> 'Server port',
	'SERVER_PORT_EXPLAIN'		=> 'The port your server is running on, usually 80, only change if different.',
	'SERVER_PROTOCOL'			=> 'Server protocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'This is used as the server protocol if these settings are forced. If empty or not forced the protocol is determined by the cookie secure settings (<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL settings',
	'SMILIES_PATH'				=> 'Smilies storage path',
	'SMILIES_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extension group icons storage path',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Path under your phpBB root directory, e.g. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'			=> 'Run periodic tasks from operating system cron',
	'USE_SYSTEM_CRON_EXPLAIN'	=> 'When disabled, phpBB will arrange for periodic tasks to be run automatically. When enabled, phpBB will not schedule any periodic tasks by itself; a system administrator must arrange for <code>bin/phpbbcli.php cron:run</code> to be run by the operating system cron facility at regular intervals (e.g. every 5 minutes).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Here you are able to define session and login related settings.',

	'ALL'							=> 'All',
	'ALLOW_AUTOLOGIN'				=> 'Allow "Remember Me" logins',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determines whether users are given "Remember Me" option when they visit the board.',
	'ALLOW_PASSWORD_RESET'			=> 'Allow password reset ("Forgot Password")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Determines whether or not users are able to use the "I forgot my password" link on the login page to recover their account. If you use an external authentication mechanism you may wish to disable this feature.',
	'AUTOLOGIN_LENGTH'				=> '"Remember Me" login key expiration length (in days)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Number of days after which "Remember Me" login keys are removed or zero to disable.',
	'BROWSER_VALID'					=> 'Validate browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Enables browser validation for each session improving security.',
	'CHECK_DNSBL'					=> 'Check IP against DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'If enabled the user’s IP address is checked against the following DNSBL services on registration and posting: <a href="http://spamcop.net">spamcop.net</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. This lookup may take a while, depending on the server’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Check email domain for valid MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'If enabled, the email domain provided on registration and profile changes is checked for a valid MX record.',
	'FORCE_PASS_CHANGE'				=> 'Force password change',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Require user to change their password after a set number of days. Setting this value to 0 disables this behaviour.',
	'FORM_TIME_MAX'					=> 'Maximum time to submit forms',
	'FORM_TIME_MAX_EXPLAIN'			=> 'The time a user has to submit a form. Use -1 to disable. Note that a form might become invalid if the session expires, regardless of this setting.',
	'FORM_SID_GUESTS'				=> 'Tie forms to guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'If enabled, the form token issued to guests will be session-exclusive. This can cause problems with some ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Validate <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessions will only be continued if the sent <var>X_FORWARDED_FOR</var> header equals the one sent with the previous request. Bans will be checked against IPs in <var>X_FORWARDED_FOR</var> too.',
	'IP_VALID'						=> 'Session IP validation',
	'IP_VALID_EXPLAIN'				=> 'Determines how much of the users IP is used to validate a session; <samp>All</samp> compares the complete address, <samp>A.B.C</samp> the first x.x.x, <samp>A.B</samp> the first x.x, <samp>None</samp> disables checking. On IPv6 addresses <samp>A.B.C</samp> compares the first 4 blocks and <samp>A.B</samp> the first 3 blocks.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maximum number of login attempts per IP address',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'The threshold of login attempts allowed from a single IP address before an anti-spambot task is triggered. Enter 0 to prevent the anti-spambot task from being triggered by IP addresses.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP address login attempt expiration time',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Login attempts expire after this period.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Limit login attempts by <var>X_FORWARDED_FOR</var> header',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Instead of limiting login attempts by IP address they are limited by <var>X_FORWARDED_FOR</var> values. <br><em><strong>Warning:</strong> Only enable this if you are operating a proxy server that sets <var>X_FORWARDED_FOR</var> to trustworthy values.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximum number of login attempts per username',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'The number of login attempts allowed for a single account before the anti-spambot task is triggered. Enter 0 to prevent the anti-spambot task from being triggered for distinct user accounts.',
	'NO_IP_VALIDATION'				=> 'None',
	'NO_REF_VALIDATION'				=> 'None',
	'PASSWORD_TYPE'					=> 'Password complexity',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determines how complex a password needs to be when set or altered, subsequent options include the previous ones.',
	'PASS_TYPE_ALPHA'				=> 'Must contain letters and numbers',
	'PASS_TYPE_ANY'					=> 'No requirements',
	'PASS_TYPE_CASE'				=> 'Must be mixed case',
	'PASS_TYPE_SYMBOL'				=> 'Must contain symbols',
	'REF_HOST'						=> 'Only validate host',
	'REF_PATH'						=> 'Also validate path',
	'REFERRER_VALID'				=> 'Validate Referrer',
	'REFERRER_VALID_EXPLAIN'		=> 'If enabled, the referrer of POST requests will be checked against the host/script path settings. This may cause issues with boards using several domains and or external logins.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'This information is used when the board sends emails to your users. Please ensure the email address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) email service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.',

	'ADMIN_EMAIL'					=> 'From email address',
	'ADMIN_EMAIL_EXPLAIN'			=> 'This will be used as the from address on all emails, the technical contact email address. It will always be used as the <samp>Sender</samp> address in emails.',
	'BOARD_EMAIL_FORM'				=> 'Users send email via board',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Instead of showing the users email address users are able to send emails via the board.',
	'BOARD_HIDE_EMAILS'				=> 'Hide email addresses',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'This function keeps email addresses completely private.',
	'CONTACT_EMAIL'					=> 'Contact email address',
	'CONTACT_EMAIL_EXPLAIN'			=> 'This address will be used whenever a specific contact point is needed, e.g. spam, error output, etc. It will always be used as the <samp>From</samp> and <samp>Reply-To</samp> address in emails.',
	'CONTACT_EMAIL_NAME'			=> 'Contact name',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'This is the contact name that e-mail recipients will see. If you don’t want to have a contact name, leave this field empty.',
	'EMAIL_FORCE_SENDER'			=> 'Force from email address',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'This will set the <samp>Return-Path</samp> to the from email address instead of using the local user and hostname of the server. This setting does not apply when using SMTP.<br><em><strong>Warning:</strong> Requires the user that the webserver runs as to be added as trusted user to the sendmail configuration.</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'Email package size',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of maximum emails sent out in one package. This setting is applied to the internal message queue; set this value to 0 if you have problems with non-delivered notification emails.',
	'EMAIL_MAX_CHUNK_SIZE'			=> 'Maximum allowed email recipients',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> 'If necessary, set this to not exceed the maximum number of recipients that your email server will allow in one email message.',
	'EMAIL_SIG'						=> 'Email signature',
	'EMAIL_SIG_EXPLAIN'				=> 'This text will be attached to all emails the board sends.',
	'ENABLE_EMAIL'					=> 'Enable board-wide emails',
	'ENABLE_EMAIL_EXPLAIN'			=> 'If this is set to disabled no emails will be sent by the board at all. <em>Note the user and admin account activation settings require this setting to be enabled. If currently using “user” or “admin” activation in the activation settings, disabling this setting will disable registration.</em>',
	'SEND_TEST_EMAIL'				=> 'Send a test email',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'This will send a test email to the address defined in your account.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Allow self-signed SSL certificates',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Allow connections to SMTP server with self-signed SSL certificate. <br><em><strong>Warning:</strong> Allowing self-signed SSL certificates may cause security implications.</em>',
	'SMTP_PASSWORD'					=> 'SMTP password',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Only enter a password if your SMTP server requires it.<br><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'SMTP_PORT'						=> 'SMTP server port',
	'SMTP_PORT_EXPLAIN'				=> 'Only change this if you know your SMTP server is on a different port.',
	'SMTP_SERVER'					=> 'SMTP server address',
	'SMTP_SERVER_EXPLAIN'			=> 'Do not provide a protocol (<samp>ssl://</samp> or <samp>tls://</samp>) unless your mail host tells you to do so.',
	'SMTP_SETTINGS'					=> 'SMTP settings',
	'SMTP_USERNAME'					=> 'SMTP username',
	'SMTP_USERNAME_EXPLAIN'			=> 'Only enter a username if your SMTP server requires it.',
	'SMTP_VERIFY_PEER'				=> 'Verify SSL certificate',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Require verification of SSL certificate used by SMTP server. <br><em><strong>Warning:</strong> Connecting peers with unverified SSL certificates may cause security implications.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Verify SMTP peer name',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Require verification of peer name for SMTP servers using SSL / TLS connections. <br><em><strong>Warning:</strong> Connecting to unverified peers may cause security implications.</em>',
	'TEST_EMAIL_SENT'				=> 'The test email has been sent.<br>If you don’t receive it, please check your emails configuration.<br><br>If you require assistance, please visit the <a href="https://www.phpbb.com/community/">phpBB support forums</a>.',

	'USE_SMTP'						=> 'Use SMTP server for email',
	'USE_SMTP_EXPLAIN'				=> 'Select “Yes” if you want or have to send email via a named server instead of the local mail function.',
));

$lang = array_merge($lang, [
	'ACP_WEBPUSH_SETTINGS_EXPLAIN'	=> 'Here you can enable Web Push for board notifications. Web Push is a protocol for the real-time delivery of events to user agents, commonly referred to as push messages. It is compatible with the majority of modern browsers on both desktop and mobile devices. Users can opt to receive Web Push alerts in their browser by subscribing and enabling their preferred notifications in the UCP.',
	'WEBPUSH_ENABLE'				=> 'Enable Web Push',
	'WEBPUSH_ENABLE_EXPLAIN'		=> 'Allow users to receive notifications in their browser or device via Web Push. To utilize Web Push, you must input or generate valid VAPID identification keys.',
	'WEBPUSH_GENERATE_VAPID_KEYS'	=> 'Generate Identification keys',
	'WEBPUSH_VAPID_PUBLIC'			=> 'Server identification public key',
	'WEBPUSH_VAPID_PUBLIC_EXPLAIN'	=> 'The Voluntary Application Server Identification (VAPID) public key is shared to authenticate push messages from your site.<br><em><strong>Caution:</strong> Modifying the VAPID public key will automatically render all Web Push subscriptions invalid.</em>',
	'WEBPUSH_VAPID_PRIVATE'			=> 'Server identification private key',
	'WEBPUSH_VAPID_PRIVATE_EXPLAIN'	=> 'The Voluntary Application Server Identification (VAPID) private key is used to generate authenticated push messages dispatched from your site. The VAPID private key <strong>must</strong> form a valid public-private key pair alongside the VAPID public key.<br><em><strong>Caution:</strong> Modifying the VAPID private key will automatically render all Web Push subscriptions invalid.</em>',
	'WEBPUSH_METHOD_DEFAULT_ENABLE'	=> 'Enable all user-based web push notification options by default',
	'WEBPUSH_METHOD_DEFAULT_ENABLE_EXPLAIN'	=> 'When this setting is enabled, users who subscribe and allow browser notifications will start receiving them automatically. Users only need to visit the UCP Notification settings to disable any unwanted notifications.<br><br>If this setting is disabled, users will not receive any notifications, even if they have subscribed, until they visit the UCP Notification settings to enable the specific notification options they wish to receive.',
	'WEBPUSH_DROPDOWN_SUBSCRIBE'	=> 'Show “Subscribe” button in notification dropdown',
	'WEBPUSH_DROPDOWN_SUBSCRIBE_EXPLAIN'	=> 'Display a “Subscribe” button in the Notification dropdown, allowing users to easily subscribe to push notifications from anywhere in the forum.',
]);
