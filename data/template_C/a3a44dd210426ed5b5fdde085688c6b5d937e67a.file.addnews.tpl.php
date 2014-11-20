<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 09:11:22
         compiled from "/Users/tangsi/Documents/mvc1/tpl/admin/addnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260793847546c1eeac70c37-87983361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3a44dd210426ed5b5fdde085688c6b5d937e67a' => 
    array (
      0 => '/Users/tangsi/Documents/mvc1/tpl/admin/addnews.tpl',
      1 => 1416445880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260793847546c1eeac70c37-87983361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c1eeace05d2_84750784',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c1eeace05d2_84750784')) {function content_546c1eeace05d2_84750784($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../assets/css/fullcalendar.css" />
<link rel="stylesheet" href="../../assets/css/matrix-style.css" />
<link rel="stylesheet" href="../../assets/css/matrix-media.css" />
<link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../../assets/css/jquery.gritter.css" />
<link rel="stylesheet" href="../../assets/css/bootstrap-wysihtml5.css" />
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--sidebar-menu-->
<?php echo $_smarty_tpl->getSubTemplate ('admin/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>添加新闻</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>输入界面</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="index.php?controller=admin&method=addnews" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">文章标题 :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="输入文章标题" value ="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"/>
                </div>
              </div>
              
                              
                   <div class="control-group">
                    <label class="control-label">文章内容 :</label>
                     
                       <div class="controls">
                         <textarea class="textarea_editor span11" rows="6" placeholder="请输入内容"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                       </div>
                     
                   </div>
         
              <div class="form-actions">
              <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" />
                <input type="submit" name="submit" class="btn btn-success" value="提交"/>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="../../assets/js/wysihtml5-0.3.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/bootstrap-wysihtml5.js"><?php echo '</script'; ?>
> 


<?php echo '<script'; ?>
>
	$('.textarea_editor').wysihtml5();
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
