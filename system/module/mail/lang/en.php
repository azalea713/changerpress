<?php
$lang->mail->common = 'Email Settings';
$lang->mail->index  = 'Home';
$lang->mail->detect = 'Testing';
$lang->mail->edit   = 'Configure';
$lang->mail->save   = 'Save';
$lang->mail->test   = 'Test';
$lang->mail->reset  = 'Reset';

$lang->mail->turnon       = 'On/Off';
$lang->mail->fromAddress  = 'Email Address';
$lang->mail->fromName     = 'Sender';
$lang->mail->mta          = 'MTA';
$lang->mail->host         = 'SMTP Host';
$lang->mail->port         = 'SMTP Port';
$lang->mail->auth         = 'Verification';
$lang->mail->username     = 'SMTP Account';
$lang->mail->password     = 'SMTP Password';
$lang->mail->secure       = 'Encryption';
$lang->mail->debug        = 'Debugging';
$lang->mail->getEmailCode = 'Email Verification Code';

$lang->mail->turnonList[1] = 'On';
$lang->mail->turnonList[0] = 'Off';

$lang->mail->debugList[0] = 'Off';
$lang->mail->debugList[1] = 'Normal';
$lang->mail->debugList[2] = 'High';

$lang->mail->authList[1] = 'Required';
$lang->mail->authList[0] = 'Not Required';

$lang->mail->secureList['']    = 'No';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = 'Enter Sender Email';
$lang->mail->nextStep       = 'Next';
$lang->mail->successSaved   = 'Configuration saved.';
$lang->mail->subject        = 'Testing Email';
$lang->mail->content        = 'Email configured';
$lang->mail->sending        = "Sending an Email to %s. Please wait...";
$lang->mail->successSended  = 'Email has been sent to %s.';
$lang->mail->needConfigure  = 'Eamil configuration is not found. Please configure first.';
$lang->mail->error          = 'Email address error. Please enter your Email address correcrly.'; 
$lang->mail->trySendlater   = 'Try to send it again 3 mins later.'; 

$lang->mail->captcha     = 'Verification Code';
$lang->mail->sendContent = <<<EOT
Hello, %s 
<br />Your <strong>%s</strong>(%s)verification code is %s
<br />Please ignore if you did not request it.
<br />
<br /><strong>%s</strong> is powered by <a href='http://www.chanzhi.org' target='_blank'>Changer CMS</a>.
<br /><a href='http://www.cnezsoft.com' target='_blank'>Nature Easy Soft</a> provide professional management software for you!
EOT;
