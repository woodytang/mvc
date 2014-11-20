<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 22:31:44
         compiled from "/Users/tangsi/Documents/mvc1/tpl/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321390266546883626af761-44187995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef34317a8a0e4699bb0edbd2de66927ffb668dfb' => 
    array (
      0 => '/Users/tangsi/Documents/mvc1/tpl/admin/login.tpl',
      1 => 1416234702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321390266546883626af761-44187995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54688362716564_05338258',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54688362716564_05338258')) {function content_54688362716564_05338258($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../../assets/css/matrix-login.css" />
        <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post" action="index.php?controller=admin&method=login">
				 <div class="control-group normal_text"> <h3><img src="../../assets/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" placeholder="Username" name="username"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" value="提交" name="submit"/>
                    </span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <?php echo '<script'; ?>
 src="../../assets/js/jquery.min.js"><?php echo '</script'; ?>
>  
        <?php echo '<script'; ?>
 src="../../assets/js/matrix.login.js"><?php echo '</script'; ?>
> 
    </body>

</html>
<?php }} ?>
