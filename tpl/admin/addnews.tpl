<!DOCTYPE html>
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

{include file='admin/header.tpl'}

<!--sidebar-menu-->
{include file='admin/left.tpl'}
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
                  <input type="text" class="span11" placeholder="输入文章标题" value ="{$data.title|default:''}"/>
                </div>
              </div>
              
                              
                   <div class="control-group">
                    <label class="control-label">文章内容 :</label>
                     
                       <div class="controls">
                         <textarea class="textarea_editor span11" rows="6" placeholder="请输入内容">{$data.content|default:''}</textarea>
                       </div>
                     
                   </div>
         
              <div class="form-actions">
              <input type="hidden" name="id" value="{$data.id|default:''}" />
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
{include file='admin/footer.tpl'}
<script src="../../assets/js/wysihtml5-0.3.0.js"></script>
<script src="../../assets/js/bootstrap-wysihtml5.js"></script> 


<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
