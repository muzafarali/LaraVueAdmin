<?php

use Illuminate\Database\Seeder;

class CrudSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crud_settings')->delete();
        
        \DB::table('crud_settings')->insert(array (
            0 => 
            array (
                'setting_key' => 'dfe2db74975e0aa9f6fdd4d61dedcb7328502456',
                'setting_value' => 'a:17:{s:11:"setting_key";s:40:"dfe2db74975e0aa9f6fdd4d61dedcb7328502456";s:13:"email_address";s:14:"admin@demo.com";s:13:"default_group";s:1:"3";s:20:"disable_registration";s:1:"0";s:22:"disable_reset_password";s:1:"0";s:24:"require_email_activation";s:1:"1";s:16:"default_language";s:5:"en_US";s:16:"enable_recaptcha";s:1:"1";s:20:"recaptcha_public_key";s:40:"6Le4CtUSAAAAAC-Cnbu_d6eshhyDyY_H1OB2cI11";s:21:"recaptcha_private_key";s:40:"6Le4CtUSAAAAAJOySWsjT1NAKtfdqJyCKomyzoKx";s:11:"enable_smtp";s:1:"0";s:9:"smtp_host";s:0:"";s:9:"smtp_port";s:0:"";s:9:"smtp_auth";s:0:"";s:16:"enable_smtp_auth";s:1:"0";s:12:"smtp_account";s:0:"";s:13:"smtp_password";s:0:"";}',
            ),
            1 => 
            array (
                'setting_key' => 'f0347ce3a03a3ba71f596438a2b80dd21c9af71b',
                'setting_value' => 'a:5:{s:11:"setting_key";s:40:"f0347ce3a03a3ba71f596438a2b80dd21c9af71b";s:17:"send_link_subject";s:31:"[MyCelebWatch] Activate Account";s:14:"send_link_body";s:157:"Welcome {user_name},

You must activate your account via this message to log in.

Click the following link to do so: {activation_link}

Thanks.								";s:17:"activated_subject";s:47:"[MyCelebWatch] You have activated your account!";s:14:"activated_body";s:187:"Hi there {user_name} !

Your account at {site_address} has been successfully activated :).

For your reference, your user email is  {user_email}.

See you soon!																					";}',
        ),
        2 => 
        array (
            'setting_key' => '868a882a74b3f7f4cc49d8914e144ef07b3ea9d5',
            'setting_value' => 'a:5:{s:11:"setting_key";s:40:"868a882a74b3f7f4cc49d8914e144ef07b3ea9d5";s:15:"request_subject";s:34:"[MyCelebWatch] Lost your password?";s:12:"request_body";s:167:"Hi {user_name},

Your user email is {user_email}.

To reset your password at AuthAcl, please click the following password reset link: {reset_link}

See you soon!";s:15:"success_subject";s:44:"[MyCelebWatch] Your password has been reset.";s:12:"success_body";s:194:"Welcome back {user_name},

I\'m just letting you know your password at {site_address} has been successfully changed.

Hopefully you were the one that requested this password reset !

Cheers";}',
        ),
    ));
        
        
    }
}