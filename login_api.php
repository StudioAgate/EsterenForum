<?php
/**
*
* @package ucp
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require $phpbb_root_path . 'common.' . $phpEx;
require $phpbb_root_path . 'includes/functions_user.' . $phpEx;
require $phpbb_root_path . 'includes/functions_module.' . $phpEx;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('ucp');

if ($user->data['is_registered']) {
    header('Content-Type: application/json');
    $info = [
        'is_registered' => true,
    ];
    // TODO: send JSON response
    echo 'logged  in';
    exit;
} else {
    // TODO: Show small login form

    $err = '';

    if (isset($_POST['login']))
    {
        $password	= request_var('password', '', true);
        $username	= request_var('username', '', true);
        $autologin	= (!empty($_POST['autologin'])) ? true : false;
        $viewonline = (!empty($_POST['viewonline'])) ? 0 : 1;
        $admin 		= 0;

        // If authentication is successful we redirect user to previous page
        $result = $auth->login($username, $password, $autologin, $viewonline, $admin);

        // The result parameter is always an array, holding the relevant information...
        if ($result['status'] === LOGIN_SUCCESS) {
            $redirect = request_var('redirect', "{$phpbb_root_path}index.$phpEx");
            $message = $user->lang['LOGIN_REDIRECT'];

            // append/replace SID (may change during the session for AOL users)
            $redirect = reapply_sid($redirect);

            // Special case... the user is effectively banned, but we allow founders to login
            if (defined('IN_CHECK_BAN') && $result['user_row']['user_type'] != USER_FOUNDER)
            {
                return;
            }

            echo 'ok';
            exit;
        }

        // Something failed, determine what...
        if ($result['status'] === LOGIN_BREAK) {
            trigger_error($result['error_msg']);
        } else {
            $err = $user->lang[$result['error_msg']];

            // Assign admin contact to some error messages
            if ($result['error_msg'] === 'LOGIN_ERROR_USERNAME' || $result['error_msg'] === 'LOGIN_ERROR_PASSWORD')
            {
                $err = (!$config['board_contact']) ? sprintf($user->lang[$result['error_msg']], '', '') : sprintf($user->lang[$result['error_msg']], '<a href="mailto:' . htmlspecialchars($config['board_contact']) . '">', '</a>');
            }
        }
    }


    $template->assign_vars(array(
        'LOGIN_ERROR'		=> $err,
        'S_LOGIN_ACTION'    => 'login_api.php',

        'U_SEND_PASSWORD' 		=> ($config['email_enable']) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=sendpassword') : '',
        'U_RESEND_ACTIVATION'	=> ($config['require_activation'] == USER_ACTIVATION_SELF && $config['email_enable']) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=resend_act') : '',
        'U_TERMS_USE'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=terms'),
        'U_PRIVACY'				=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=privacy'),

        'S_DISPLAY_FULL_LOGIN'	=> false,
        'S_HIDDEN_FIELDS' 		=> build_hidden_fields(['sid' => $user->session_id]),

        'S_ADMIN_AUTH'			=> false,
        'USERNAME'				=> '',

        'USERNAME_CREDENTIAL'	=> 'username',
        'PASSWORD_CREDENTIAL'	=> 'password',
    ));

    page_header($user->lang['LOGIN'], false);

    $template->set_filenames(array(
        'body' => 'login_api.html'
    ));

    page_footer();
}
