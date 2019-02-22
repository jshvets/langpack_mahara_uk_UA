<?php
/**
 *
 * @package    mahara
 * @subpackage core
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['changepassworddesc'] = 'Новий пароль';
$string['changepasswordotherinterface'] = 'Ви можете <a href="%s">змінити свій пароль</a> через інший інтерфейс.';
$string['oldpasswordincorrect'] = 'Це не ваш поточний пароль.';

$string['changeusernameheading'] = 'Зміна ім\'я входу';
$string['changeusername'] = 'Нове ім\'я входу';
$string['changeusernamedesc'] = 'Ім\'я входу Ви  використовуєте для входу до «%s». Воно повинно мати довжину від 3 до 30 символів і може містити латинські літери, цифри та інші символи, за винятком пропусків.';

$string['usernameexists1'] = 'Ви не можете використовувати це ім\'я входу. Виберіть, будь-ласка інше.';

$string['accountoptionsdesc'] = 'Загальні налаштування облікового запису';

$string['changeprofileurl'] = 'Зміна URL-адреси профайлу';
$string['profileurl'] = 'URL-адреса профайлу';
$string['profileurldescription'] = 'Персоналізована URL-адреса для сторінки вашого профайлу. Це поле має бути довжиною 3-30 символів.';
$string['urlalreadytaken'] = 'Ця URL-адреса профайлу вже зайнята. Виберіть, будь-ласка, іншу.';

$string['friendsnobody'] = 'Ніхто не може додавати мене у якості друга';
$string['friendsauth'] = 'Нові друзі потребують моєї авторизації';
$string['friendsauto'] = 'Нові друзі автоматично авторизовані';
$string['friendsdescr'] = 'Контроль друзів';
$string['updatedfriendcontrolsetting'] = 'Оновлено контроль друзів';

$string['wysiwygdescr'] = 'Редактор HTML';

$string['licensedefault'] = 'Стандартна ліцензія';
$string['licensedefaultdescription'] = 'Стандартна ліцензія для вашого контенту.';
$string['licensedefaultinherit'] = 'Use the institution default';

$string['messagesdescr'] = 'Повідомлення інших користувачів';
$string['messagesnobody'] = 'Не дозволяти нікому надсилати мені повідомлення';
$string['messagesfriends'] = 'Дозволити користувачам зі списку друзів надсилати мені повідомлення';
$string['messagesallow'] = 'Дозволити будь-кому надсилати мені повідомлення';

$string['language'] = 'Мова';

$string['showviewcolumns'] = 'Показувати елементи керування для додавання та видалення стовпців під час редагування сторінки';

$string['tagssideblockmaxtags'] = 'Максимальна кількість тегів у хмарі';
$string['tagssideblockmaxtagsdescription'] = 'Максимальна кількість тегів для показу у хмарі тегів';

$string['enablemultipleblogs1'] = 'Декілька журналів';
$string['enablemultipleblogsdescription1']  = 'За замовчуванням у вас є один журнал. Якщо ви бажаєте мати більше одного журналу, увімкніть цю опцію.';

$string['hiderealname'] = 'Приховати справжнє ім\'я';
$string['hiderealnamedescription'] = 'Check this box if you have set a display name and do not want other users to be able to find you by your real name in user searches.';

$string['showhomeinfo2'] = 'Dashboard information';
$string['showhomeinfodescription1'] = 'Display information about how to use %s on the dashboard.';

$string['showprogressbar'] = 'Profile completion progress bar';
$string['showprogressbardescription'] = 'Display progress bar and tips on how to complete your %s profile.';

$string['prefssaved']  = 'Preferences saved';
$string['prefsnotsaved'] = 'Failed to save your preferences.';

$string['maildisabled'] = 'Електронну пошту вимкнено';
$string['disableemail'] = 'Вимкнути електронну пошту';
$string['maildisabledbounce'] =<<< EOF
Sending of email to your email address has been disabled as too many messages have been returned to the server.
Please check that your email account is working as expected before you re-enable email in you account preferences at %s.
EOF;
$string['maildisableddescription'] = 'Sending of email to your account has been disabled. You may <a href="%s">re-enable your email</a> from the account preferences page.';

$string['deleteaccountuser']  = 'Delete account of %s';
$string['deleteaccountdescription']  = 'If you delete your account, all your content will be deleted permanently. You cannot get it back. Your profile information and your pages will no longer be visible to other users. The content of any forum posts you have written will still be visible, but your name will no longer be displayed.';
$string['sendnotificationdescription']  = 'A notification will be sent to an administrator, who needs to approve the deletion of your account. If you request to delete your account, all your personal content will be deleted permanently. That means any files you uploaded, journal entries you wrote, and pages and collections you created will be deleted. You cannot get any of that back. If you uploaded files to groups, created journal entries and portfolios, and contributed to forums there, they will stay on the site, but your name will no longer be displayed.';
$string['pendingdeletionsince'] = 'Account pending deletion since %s';
$string['pendingdeletionadminemailsubject'] = "Account deletion request on %s";
$string['resenddeletionadminemailsubject'] = "Reminder of account deletion request on %s";
$string['canceldeletionadminemailsubject'] = "Cancellation of account deletion request on %s";
$string['pendingdeletionadminemailtext'] = "Hello Administrator,

User %s has requested the deletion of their account from the site.

You are listed as an administrator in an institution to which the user belongs. You can decide whether to approve or deny the deletion request. To do this, select the following link: %s

Details of the account deletion request follow:

Name: %s
Email: %s
Reason: %s

--
Regards,
The %s Team";
$string['pendingdeletionadminemailhtml'] = "<p>Hello Administrator,</p>
<p>User %s has requested the deletion of their account from the site.</p>
<p>You are listed as an administrator in an institution to which the user belongs. You can decide whether to approve or deny the deletion request. To do this, select the following link: <a href='%s'>%s</a></p>
<p>Details of the account deletion request follow:</p>
<p>Name: %s</p>
<p>Email: %s</p>
<p>Reason: %s</p>
<pre>--
Regards,
The %s Team</pre>";

$string['accountdeleted']  = 'Your account has been deleted.';
$string['resenddeletionnotification'] = 'Resend deletion notification';
$string['resenddeletionadminemailtext'] = "Hello Administrator,

This is a reminder that user %s has requested the deletion of their account from the site.

You are listed as an administrator in an institution to which the user belongs. You can decide whether to approve or deny the deletion request. To do this, select the following link: %s

Details of the account deletion request follow:

Name: %s
Email: %s
Message: %s

--
Regards,
The %s Team";
$string['resenddeletionadminemailhtml'] = "<p>Hello Administrator,</p>
<p>This is a reminder that user % has requested the deletion of their account from the site.</p>
<p>You are listed as an administrator in an institution to which the user belongs. You can decide whether to approve or deny the deletion request. To do this, select the following link: <a href='%s'>%s</a></p>
<p>Details of the account deletion request follow:</p>
<p>Name: %s</p>
<p>Email: %s</p>
<p>Message: %s</p>
<pre>--
Regards,
The %s Team</pre>";

$string['pendingdeletionemailsent'] = 'Sent notification to institution administrators';
$string['cancelrequest'] = 'Cancel request';
$string['deleterequestcanceled'] = 'The request to delete your user account has been cancelled.';
$string['canceldeletionrequest'] = 'Cancel deletion request';
$string['canceldeletionrequestconfirmation'] = 'This will cancel the request to the institution administrators for deleting the account of %s. Are you sure you want to continue?';
$string['canceldeletionadminemailtext'] = "Hello Administrator,

User %s has cancelled the request to delete their account from the site.

You are listed as an administrator in an institution to which the user belongs.

Details of the cancelled request follow:

Name: %s
Email: %s

--
Regards,
The %s Team";
$string['canceldeletionadminemailhtml'] = "<p>Hello Administrator,</p>
<p>User %s has cancelled the request to delete their account from the site.</p>
<p>You are listed as an administrator in an institution to which the user belongs.</p>
<p>Details of the cancelled request follow:</p>
<p>Name: %s</p>
<p>Email: %s</p>
<pre>--
Regards,
The %s Team</pre>";

$string['resizeonuploaduserdefault1'] = 'Resize large images on upload';
$string['resizeonuploaduserdefaultdescription2'] = '"Automatic resizing of images" is enabled by default. Images larger than the maximum dimensions will be resized when they are uploaded. You can disable this default setting for each image upload individually.';

$string['devicedetection'] = 'Device detection';
$string['devicedetectiondescription'] = 'Enable mobile device detection when browsing this site.';
$string['noprivacystatementsaccepted'] = 'This account has not accepted any current privacy statements.';
