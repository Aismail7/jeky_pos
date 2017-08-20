<?php /* Smarty version Smarty-3.1.11, created on 2017-07-31 00:05:22
         compiled from ".\templates\edit_prdid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22625597e013c00d317-08589562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb157d2494635538f46d124d0f1455b63d9a8f26' => 
    array (
      0 => '.\\templates\\edit_prdid.tpl',
      1 => 1501434316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22625597e013c00d317-08589562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597e013c0d9583_82092323',
  'variables' => 
  array (
    'module' => 0,
    'act' => 0,
    'idprd' => 0,
    'namaid' => 0,
    'namasub' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597e013c0d9583_82092323')) {function content_597e013c0d9583_82092323($_smarty_tpl) {?><link rel="shortcut icon" href="images/favicon.jpg">
<link rel="stylesheet" type="text/css" href="design/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="design/css/demo.css" />
<link rel="stylesheet" type="text/css" href="design/css/icons.css" />
<link rel="stylesheet" type="text/css" href="design/css/component.css" />
<script src="design/js/jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="design/js/modernizr.custom.js"></script>
<link rel="stylesheet" href="design/js/development-bundle/themes/base/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="design/js/development-bundle/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="design/js/development-bundle/ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="design/js/development-bundle/ui/jquery.ui.widget.js"></script>
<script type="text/javascript" src="design/js/ckeditor/ckeditor.js"></script>
<script src="design/js/jquery.plugin.js"></script>
<script src="design/js/jquery.timeentry.js"></script>
	
<script src="design/js/jquery-1.8.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" media="all" href="design/js/fancybox/jquery.fancybox.css">
<script type="text/javascript" src="design/js/fancybox/jquery.fancybox.js?v=2.0.6"></script>

<style>
li{
	list-style: none;
}
</style>

<body style='background-color: #FFF; color: #000;'>

	<script>
		$(document).ready(function() {
			
			$("#prdid").submit(function() { return false; });
	
			$("#send").on("click", function(){
				var idprd = $("#idprd").val();
				var namaid = $("#namaid").val();
				var namasub = $("#namasub").val();
				var status = $("#status").val();
				
				if (idprd != '' && namaid != '' && namasub != '' && status != ''){
				
					$.ajax({
						type: 'POST',
						url: 'save_edit_prdid.php',
						dataType: 'JSON',
						data:{
							idprd: idprd,
							namaid: namaid,
							namasub: namasub,
							status: status
						},
						beforeSend: function (data) {
							$('#send').hide();
						},
						success: function(data) {
							parent.jQuery.fancybox.close();
						}
					});
				}
			});
		});
	</script>	

				

<?php if ($_smarty_tpl->tpl_vars['module']->value=='prdid'&&$_smarty_tpl->tpl_vars['act']->value=='edit'){?>
	
						
	<table width="95%"  align="center">
		<tr>
			<td colspan="3"><h3>Ubah Produk ID</h3></td>
		</tr>
		<tr>
			<td>
				<form id="prdid" name="prdid" method="POST" action="#">
				<input type="hidden" id="idprd" name="idprd" value="<?php echo $_smarty_tpl->tpl_vars['idprd']->value;?>
">
				<table cellpadding="7" cellspacing="7">
					<tr>
						<td width="100">Produk ID</td>
						<td width="5">:</td>
						<td><input type="text" id="namaid" name="namaid" value="<?php echo $_smarty_tpl->tpl_vars['namaid']->value;?>
" style="display: block; width: 350px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
					</tr>
					</tr>
						<td width="130">Sub Produk ID</td>
						<td width="5">:</td>
						<td><input type="text" id="namasub" name="namasub" value="<?php echo $_smarty_tpl->tpl_vars['namasub']->value;?>
" style="display: block; width: 350px; height: 34px; padding: 6px 20px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
				
				</tr>
			
				<tr>
						<td>Status</td>
						<td>:</td>
						<td><select name="status" id="status" style="display: block; width: 350px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required>
							<option value="">- Pilih Status -</option>
							<option value="Y" <?php if ($_smarty_tpl->tpl_vars['status']->value=='Y'){?> SELECTED <?php }?>>Y (Aktif)</option>
							<option value="N" <?php if ($_smarty_tpl->tpl_vars['status']->value=='N'){?> SELECTED <?php }?>>N (Tidak Aktif)</option>
						</select></td>
					</tr>
				</table>
				<button id="send" class="btn btn-primary">Simpan</button>
				</form>
			</td>
		</tr>
	</table>


<?php }?>
</body><?php }} ?>