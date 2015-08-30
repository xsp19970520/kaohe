<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8"/>
      <title>校职工权限管理系统</title>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>


<script type="text/javascript">


	function funcAdd(){
	if(confirm("你确定提升他的权限么？"))
		{
			var name=document.getElementById("name").value;
			var role=document.getElementById("role").value;
			window.location.href = "/kaohe/index.php/Home/Webpage/roleAdd?action=add&name=" + name"&role=" + role;
		}
	}
	function funcSubtract(){
		if(confirm("你确定降低他的权限么？"))
			{
				var name=document.getElementById("name").value;
				var role=document.getElementById("role").value;
				window.location.href = "/kaohe/index.php/Home/Webpage/roleSubtract?action=add&name=" + name"&role=" + role;
			}
		}

	function funcout(){
		this.location = "/kaohe/index.php/Index/index";
	}
	
</script>

</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span11">
			<h3>
				权限管理系统
			</h3>

			<div class="row-fluid">
				<div class="span3">
					<ul class="nav nav-list well">
						<li class="nav-header">
							职务列表
						</li>
						<li >
							<a href="/kaohe/index.php/Home/Webpage/webpage?level=9999&page=9999">首页</a>
						</li>
						<li >
							<a href="/kaohe/index.php/Home/Webpage/webpage?level=1&page=1">校长</a>
						</li>
						<li >
							<a href="/kaohe/index.php/Home/Webpage/webpage?level=2&page=1">科研人员</a>
						</li>
						<li>
							<a href="/kaohe/index.php/Home/Webpage/webpage?level=3&page=1">教师</a>
						</li>
						<li>
							<a href="/kaohe/index.php/Home/Webpage/webpage?level=4&page=1">校工</a>
						</li>
						
					</ul>
				</div>
				<?php if($page == 9999): ?><div class="span9">
					<table class="table table-hover">
						<tr>
								<th>
									欢迎使用权限管理系统
								</th>
							</tr>
						</table>
					</div>
					<?php else: ?>
					<div class="span9">
					<table class="table table-hover">
						<thead>
							<tr>

								<th>
									姓名
								</th>
								<th>
									权限等级
								</th>
							</tr>
						</thead>
						
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
							<tr class="success">
								
									<td>
										<?php echo ($vo["username"]); ?>
										
									</td>
									<td>
										<?php echo ($vo["role"]); ?>
									</td> 
									<td>
											
											<button  onClick="javascript:funcAdd();" class="btn btn-success" type="button">提高权限</button>
											<input id="name"  type="text"  value="<?php echo ($vo["username"]); ?>"style="display:none;"/>
											<input id="role"  type="text"  value="<?php echo ($vo["role"]); ?>"style="display:none;"/>
											<button  onClick="javascript:funcSubtract();" class="btn btn-warning" type="button">降低权限</button>
										
								</td>
							</tr>

						</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
						
					</table>

					<div class="pagination pagination-centered">
						<ul>
							<li>
									<a href="/kaohe/index.php/Home/Webpage/webpage?level=<?php echo ($level); ?>&page=1">第一页</a>
								</li>
							<?php if($page > 1): ?><li>
									<a href="/kaohe/index.php/Home/Webpage/webpage?level=<?php echo ($level); ?>&page=<?php echo ($page-1); ?>">上一页</a>
								</li><?php endif; ?>
							<?php $__FOR_START_25303__=$page;$__FOR_END_25303__=$page+1;for($i=$__FOR_START_25303__;$i < $__FOR_END_25303__;$i+=1){ ?><li>
								<a href="/kaohe/index.php/Home/Webpage/webpage?level=<?php echo ($level); ?>&page=<?php echo ($i); ?>"><?php echo ($i); ?></a>
							</li><?php } ?>
							<?php if($page < $pageNumber): ?><li>
									<a href="/kaohe/index.php/Home/Webpage/webpage?level=<?php echo ($level); ?>&page=<?php echo ($page+1); ?>">下一页</a>
								</li><?php endif; ?>
							<li>
									<a href="/kaohe/index.php/Home/Webpage/webpage?level=<?php echo ($level); ?>&page=<?php echo ($pageNumber); ?>">最后一页</a>
								</li>
						</ul>
					</div> <a href="/kaohe/index.php/Home/Register/register?level=<?php echo ($level); ?>"class="btn btn-small btn-block btn-info" type="button">增加<?php echo ($vo["role"]); ?></a>
				</div><?php endif; ?>
			</div>
		</div>
		<div class="span1">
			 <a href="/kaohe/index.php/Home/Index/index" onClick="javascript:funcout();"class="btn">退出</a>
		</div>
	</div>
</div>



</body>
</html>