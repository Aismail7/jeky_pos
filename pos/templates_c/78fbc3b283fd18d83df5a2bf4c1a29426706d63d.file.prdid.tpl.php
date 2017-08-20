<?php /* Smarty version Smarty-3.1.11, created on 2017-07-31 22:29:09
         compiled from ".\templates\prdid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23739597b6f6e814ee1-33225208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78fbc3b283fd18d83df5a2bf4c1a29426706d63d' => 
    array (
      0 => '.\\templates\\prdid.tpl',
      1 => 1501514912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23739597b6f6e814ee1-33225208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597b6f6e8d99d0_73554064',
  'variables' => 
  array (
    'dataprdid' => 0,
    'pageLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b6f6e8d99d0_73554064')) {function content_597b6f6e8d99d0_73554064($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<!-- Push Wrapper -->
	<div class="mp-pusher" id="mp-pusher">

		<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="scroller"><!-- this is for emulating position fixed of the nav -->
			<div class="scroller-inner">
				<!-- Top Navigation -->
				<div style="padding-left: 18px; padding-top: 10px;">
					
					<?php echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
				</div>
				
				<!-- Top Navigation -->
				<div class="codrops-top clearfix">
					<!--<a href="#" id="trigger" class="menu-trigger">Open Menu</a>-->
					<a class="codrops-icon codrops-icon-prev" href="#" id="trigger"><span>Open Menu</span></a> |
					<a href="backup.php"><span>Backup</span></a> |
					<a href="home.php"><span>Home</span></a>
					<span class="right"><a class="codrops-icon codrops-icon-drop" href="logout.php"><span>Logout</span></a></span>
				</div>
				
				<link rel="stylesheet" type="text/css" media="all" href="design/js/fancybox/jquery.fancybox.css">
  				<script type="text/javascript" src="design/js/fancybox/jquery.fancybox.js?v=2.0.6"></script>
  				
  				
					<script>
						$(document).ready(function() {
							
							$(".various2").fancybox({
								fitToView: false,
								scrolling: 'no',
								afterLoad: function(){
									this.width = $(this.element).data("width");
									this.height = $(this.element).data("height");
								},
								'afterClose':function () {
									window.location.reload();
								}
							});
							
							$(".modalbox").fancybox();
							$(".modalbox2").fancybox();
							
							$("#prdid").submit(function() { return false; });
							$("#prdid2").submit(function() { return false; });
					
							
							$("#send").on("click", function(){
								var namaid = $("#namaid").val();
								var namasub = $("#namasub").val();
								var status = $("#status").val();
								
								if (namaid != '' && status != ''){
								
									$.ajax({
										type: 'POST',
										url: 'save_prdid.php',
										dataType: 'JSON',
										data:{
											namaid: namaid,
											namasub: namasub,
											status: status
										},
										beforeSend: function (data) {
											$('#send').hide();
										},
										success: function(data) {
											setTimeout("$.fancybox.close()", 1000);
											window.location.href = "prdid.php?code=1";
										}
									});
								}
							});
						});
					</script>
				
				
				<div style="width: 98%; margin: 0px auto;">
					<br>
					<a href="#inline" class="modalbox"><button class="btn btn-primary" type="button">Tambah Produk ID</button></a>
					<a href="print_prdid.php" target="_blank"><button class="btn btn-warning" type="button">Print</button></a>
					<h3>Master Produk ID</h3>
					<div class="table-responsive">
						<table cellpadding="5" cellspacing="5" class="table table-bordered table-hover tablesorter" style="background-color: #FFFFFF; color: #000000;" width="100%">
							<thead>
								<tr>
									<th width="20" style='border-left: 1px solid #CCCCCC;'>No. <i class="fa fa-sort"></i></th>
									<th width="150" style='border-left: 1px solid #CCCCCC;'>Produk ID <i class="fa fa-sort"></i></th>
									<th width="350" style='border-left: 1px solid #CCCCCC;'>Sub Produk ID <i class="fa fa-sort"></i></th>
									<th width="50" style='border-left: 1px solid #CCCCCC;'>Status <i class="fa fa-sort"></i></th>
									<th width="100" style='border-left: 1px solid #CCCCCC;'>Aksi <i class="fa fa-sort"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['name'] = 'dataprdid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataprdid']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataprdid']['total']);
?>
								<tr>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['no'];?>
</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['namaid'];?>
</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['namasub'];?>
</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC; text-align: center;'><?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['status'];?>
</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>
									<a title="Edit" href="edit_prdid.php?module=prdid&act=edit&idprd=<?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['idprd'];?>
" data-width="650" data-height="250" class="various2 fancybox.iframe"><img src="images/icons/edit.png" width="18"></a>
									<a title="Delete" href="prdid.php?module=prdid&act=delete&idprd=<?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['idprd'];?>
" onclick="return confirm('Anda Yakin, ingin Data <?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['namaid'];?>
 <?php echo $_smarty_tpl->tpl_vars['dataprdid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataprdid']['index']]['namasub'];?>
 akan di Nonaktifkan? ');"><img src="images/icons/delete.png" width="18"></a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<br>
					<div id="paging"><?php echo $_smarty_tpl->tpl_vars['pageLink']->value;?>
</div>
					<p>&nbsp;</p>
					<div id="inline">	
						<table width="98%" align="center">
							<tr>
								<td colspan="3"><h3>Tambah Produk ID</h3></td>
							</tr>
							<tr>
								<td>
									<form id="prdid" name="prdid" method="POST" action="#">
									<table cellpadding="7" cellspacing="7">
										<tr>
											<td width="140">Produk ID</td>
											<td width="5">:</td>
											<td><input type="text" onkeyup="this.value=this.value.toUpperCase()" id="namaid" name="namaid" 
											style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; 
											line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; 
											border-radius: 4px;" required></td>
										</tr>
										<tr>
											<td width="140">Sub Produk ID</td>
											<td width="5">:</td>
											<td><input type="text"  onkeyup="this.value=this.value.toUpperCase()"  id="namasub" name="namasub" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
										</tr>
										<tr>
											<td>Status</td>
											<td>:</td>
											<td><select name="status" id="status" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required>
												<option value="">- Pilih Status -</option>
												<option value="Y">Y (Aktif)</option>
												<option value="N">N (Tidak Aktif)</option>
											</select></td>
										</tr>
									  </table>
									<button id="send" class="btn btn-primary">Simpan</button>
									</form>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div><!-- /scroller-inner -->
		</div><!-- /scroller -->

	</div><!-- /pusher -->
</div><!-- /container -->
		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>