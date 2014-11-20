<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-19 11:52:49
         compiled from "/Users/tangsi/Documents/mvc1/tpl/admin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787007245546c1411e07103-89644811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e485630fe80fe58f6e0c5117f0587c151910155' => 
    array (
      0 => '/Users/tangsi/Documents/mvc1/tpl/admin/footer.tpl',
      1 => 1416369090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787007245546c1411e07103-89644811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c1411e11597_41827498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c1411e11597_41827498')) {function content_546c1411e11597_41827498($_smarty_tpl) {?><!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<?php echo '<script'; ?>
 src="../../assets/js/excanvas.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.ui.custom.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.flot.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.flot.resize.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.peity.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/fullcalendar.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.dashboard.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.gritter.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.interface.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.chat.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.validate.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.form_validation.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.wizard.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.uniform.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/select2.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.popover.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="../../assets/js/matrix.tables.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}


<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $("#sidebar ul li").click(function(){
  $(this).addClass("active");
  $(this).siblings().removeClass("active");
  });
});
<?php echo '</script'; ?>
>
<?php }} ?>
