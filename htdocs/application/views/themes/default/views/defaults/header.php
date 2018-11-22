<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$page_title = '';
if(isset($title))
{
    $page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');
$theme = $this->config->item('theme');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page_title; ?></title>
		<link rel="shortcut icon" href="<?php echo base_url() . 'favicon.ico'; ?>" />
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/default/js/',
    'style_dir'  => 'themes/' . $theme . '/css/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => $this->config->item('base_url'),
    'combine'	 => true,
    'dev'		 => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('reset.css');
$this->carabiner->css('jquery-ui.min.css');
$this->carabiner->css('fonts.css');
$this->carabiner->css('main.css');
$this->carabiner->css('print.css', 'print');
$this->carabiner->css('codemirror.css');
$this->carabiner->css('diff.css');

$this->carabiner->display('css'); 

$searchparams = ($this->input->get('search') ? '?search=' . $this->input->get('search') : '');
$searchparams = str_replace('"', '&quot;', $searchparams);

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
<?php

//Javascript
$this->carabiner->js('filereader.js');
$this->carabiner->js('jquery.js');
$this->carabiner->js('jquery.timers.js');
$this->carabiner->js('jquery-ui-selectable-combined.min.js');
$this->carabiner->js('linkify-jquery.min.js');
$this->carabiner->js('linkify.min.js');
$this->carabiner->js('lz-string-1.3.3-min.js');
$this->carabiner->js('stikked.js');
$this->carabiner->js('crypto-js/rollups/aes.js');

if(config_item('js_editor') == 'codemirror') {
    $this->carabiner->js('codemirror/codemirror.js');
}
if(config_item('js_editor') == 'ace') {
    $this->carabiner->js('ace/ace.js');
}

$this->carabiner->display('js');

?>
	</head>
	<body>
		<div id="container">
			<div class="container">			
				<div class="header">
					<h1><a href="<?php echo base_url(); ?>" class="title"><?php echo $this->config->item('site_name'); ?></a></h1>
					<ul class="tabs">
						<?php $l = $this->uri->segment(1)?>
						<li><a <?php if($l == ""){ echo 'class="active"'; }?> href="<?php echo base_url(); ?>" title="<?php echo lang('menu_create_title'); ?>"><?php echo lang('menu_create'); ?></a></li>
<?php if(! $this->config->item('private_only')){ ?>
						<li><a <?php if($l == "lists"){ echo 'class="active"'; }?> href="<?php echo site_url('lists') . $searchparams; ?>" title="<?php echo lang('menu_recent_title'); ?>"><?php echo lang('menu_recent'); ?></a></li>
						<li><a <?php if($l == "trends"){ echo 'class="active"'; }?> href="<?php echo site_url('trends') . $searchparams; ?>" title="<?php echo lang('menu_trending_title'); ?>"><?php echo lang('menu_trending'); ?></a></li>
<?php } ?>
<?php if(! $this->config->item('disable_api')){ ?>
						<li><a  <?php if($l == "api"){ echo 'class="active"'; }?> href="<?php echo site_url('api'); ?>" title="<?php echo lang('menu_api'); ?>"><?php echo lang('menu_api'); ?></a></li>
<?php } ?>
						<li><a  <?php if($l == "about"){ echo 'class="active"'; }?> href="<?php echo site_url('about'); ?>" title="<?php echo lang('menu_about'); ?>"><?php echo lang('menu_about'); ?></a></li>
                        <?php
                            if ($this->config->item('require_auth') ){
                                if ($this->auth_ldap->is_authenticated()){
                                    echo "<li><a href=" . site_url('auth/logout') . ' title="' . lang('menu_logout') . '">' . lang('menu_logout') . '</a></li>';
                                }
                            }
                        ?>
					</ul>
				</div>

				<div class="content">
					<div class="container">
						<?php if(isset($status_message)){?>
						<div class="message success change">
							<div class="container">
								<?php echo $status_message; ?>
							</div>
						</div>
						<?php }?>
