<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('templates')->delete();
        
        \DB::table('templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'types' => 'registration',
                'subject' => 'Registration successful',
                'body' => '<div style="height: 2px; background-color: #535353;"></div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">Thanks for joining {SITE_NAME}. The following details below is your login information. Please keep in mind this information is sensitive.<br>To open your {SITE_NAME} homepage, please follow this link:<br><big><b><a href="{SITE_URL}">{SITE_NAME} Account!</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href="{SITE_URL}">{SITE_URL}</a><br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your password: {PASSWORD}<p>Enjoy!<br>{SITE_NAME}</p></div><div style="height: 2px; background-color: #535353;"></div>',
                'pubdate' => '2015-10-22 23:04:58',
            ),
            1 => 
            array (
                'id' => 2,
                'types' => 'notify_message',
                'subject' => 'Notification Message',
                'body' => '<div style="height: 2px; background-color: #535353;"></div> <div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Hi {RECIPIENT},</p><p>You have received a notification: </p><blockquote>{MESSAGE}</blockquote><br><big><b><a href="{SITE_URL}">Go to Account</a></b></big><br><br>Regards<br>{SITE_NAME}</div><div style="height: 2px; background-color: #535353;"></div>',
                'pubdate' => '2015-10-23 00:18:19',
            ),
            2 => 
            array (
                'id' => 3,
                'types' => 'change_email',
                'subject' => 'Change Email',
                'body' => '<div style="height: 2px; background-color: #535353;"></div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href="{KEY_URL}">Confirm your new email</a></b></big><br>Copy the following link to your browser address bar if the link above did not work:<br><a href="{KEY_URL}">{KEY_URL}</a><br><br>Your new email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href="{SITE_URL}">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>{SITE_NAME}</div><div style="height: 2px; background-color: #535353;"></div>',
                'pubdate' => '2015-10-23 00:10:42',
            ),
            3 => 
            array (
                'id' => 4,
                'types' => 'reset_email',
                'subject' => 'New Email',
                'body' => '<div style="height: 2px; background-color: #535353;"></div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href="{KEY_URL}">Confirm your new email</a></b></big><br>Copy the following link to your browser address bar if the link above did not work:<br><a href="{KEY_URL}">{KEY_URL}</a><br><br>Your new email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href="{SITE_URL}">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>{SITE_NAME}</div><div style="height: 2px; background-color: #535353;"></div>',
                'pubdate' => '2015-10-23 00:19:11',
            ),
            4 => 
            array (
                'id' => 5,
                'types' => 'forgot_password',
                'subject' => 'Forgot Password',
                'body' => '<div style="height: 2px; background-color: #535353;"></div>
<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You received this email because it was requested by a member of <a href="{SITE_URL}">{SITE_NAME}</a>.<p>To create a new password, click the follow link below:<br><big><b><a href="{KEY_URL}">Change password</a></b></big><br> If the link doesn\'t work simply copy the following link to your browser address bar:<br><a href="{KEY_URL}">{KEY_URL}</a></p>
<p></p>
<p>If you DID NOT request a new password. Please ignore this email or contact your administrator.</p>
<br>Thank you,<br>{SITE_NAME}</div>
</div>
<div style="height: 2px; background-color: #535353;"></div>',
                'pubdate' => '2015-10-23 00:18:08',
            ),
            5 => 
            array (
                'id' => 6,
                'types' => 'reset_password',
                'subject' => 'New Password',
                'body' => '<div style="height: 2px; background-color: #535353;"></div>
<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You received this email because it was requested by a member of <a href="{SITE_URL}">{SITE_NAME}</a>.<p>To create a new password, click the follow link below:<br><big><b><a href="{KEY_URL}">Change password</a></b></big><br> If the link doesn\'t work simply copy the following link to your browser address bar:<br><a href="{KEY_URL}">{KEY_URL}</a></p>
<p></p>
<p>If you DID NOT request a new password. Please ignore this email or contact your administrator.</p>
<br>Thank you,<br>{SITE_NAME}</div>
</div>
<div style="height: 2px; background-color: #535353;"></div>',
                'pubdate' => '2015-10-23 00:20:31',
            ),
        ));
        
        
    }
}