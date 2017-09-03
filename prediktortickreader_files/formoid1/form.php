<?php

/*define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://tickreader.com');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';
*/
?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-light-green" style="background-color:#c3eaba;font-size:14px;font-family:'Palatino Linotype','Book Antiqua',Palatino,serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Prediktor Tick Reader</h2></div>
	<div class="element-password<?php frmd_add_class("password"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="password" value="" placeholder="Masukan Token"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Masukan Stake"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">Pilih Trading</label>		<div class="column column2"><label><input type="radio" name="radio" value="Digit Matches" /><span>Digit Matches</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="radio" value="Rise & Fall" /><span>Rise & Fall</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio<?php frmd_add_class("radio1"); ?>"><label class="title">Pilih Mode</label>		<div class="column column3"><label><input type="radio" name="radio1" value="Fast" /><span>Fast</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="radio1" value="Medium" /><span>Medium</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="radio1" value="Safe" /><span>Safe</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Hasil Trading"></textarea><span class="icon-place"></span></div></div>
	<div class="element-file<?php frmd_add_class("file"); ?>"><label class="title"></label><div class="item-cont"><label class="large" ><div class="button">Start Trading</div><input type="file" class="file_input" name="file" /><div class="file_text">Connect Websocket</div><span class="icon-place"></span></label></div></div>
<div class="submit"><input type="submit" value="Stop & Reset"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
