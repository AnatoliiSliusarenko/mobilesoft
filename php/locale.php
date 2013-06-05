<?php
$locale = "en_US";
if(isset($_POST["locale"])) $locale = $_POST["locale"];

putenv('LC_ALL='.$locale);
setlocale(LC_ALL , $locale);

//echo setlocale(LC_ALL , 0);
bindtextdomain("dictionary", "../locale");
bind_textdomain_codeset("dictionary", 'UTF-8');
textdomain("dictionary");
header("Content-type: text/javascript");
?>
var localized_menu = {
	portfolio : "<?php echo _('portfolio') ?>",
	about : "<?php echo _('about') ?>",
	projects : "<?php echo _('projects') ?>",
	all : "<?php echo _('all') ?>",
	iphone : "<?php echo _('iphone') ?>",
	android : "<?php echo _('android') ?>",
	agile : "<?php echo _('agile') ?>",
	mobiletrends : "<?php echo _('mobiletrends') ?>",
	contact : "<?php echo _('contact') ?>",
	localAddress : "<?php echo _('localAddress') ?>",
	globalAddress : "<?php echo _('globalAddress') ?>"
}