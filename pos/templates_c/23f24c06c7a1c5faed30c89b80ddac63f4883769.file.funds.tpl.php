<?php /* Smarty version Smarty-3.1.11, created on 2017-07-27 21:46:38
         compiled from ".\templates\funds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222715979fcceda4695-71314540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23f24c06c7a1c5faed30c89b80ddac63f4883769' => 
    array (
      0 => '.\\templates\\funds.tpl',
      1 => 1501089652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222715979fcceda4695-71314540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'act' => 0,
    'startDate' => 0,
    'endDate' => 0,
    'dataFund' => 0,
    'start' => 0,
    'end' => 0,
    'periodMonth' => 0,
    'periodYear' => 0,
    'fundDate' => 0,
    'dataAccount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5979fccf022600_16739961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5979fccf022600_16739961')) {function content_5979fccf022600_16739961($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
							
							$( "#fundDate" ).datepicker({
								changeMonth: true,
								changeYear: true,
								dateFormat: "yy-mm-dd",
								yearRange: 'c-0:c-0'
							});
							
							$( "#startDate" ).datepicker({
								changeMonth: true,
								changeYear: true,
								dateFormat: "yy-mm-dd",
								yearRange: '2014:c-0'
							});
							
							$( "#endDate" ).datepicker({
								changeMonth: true,
								changeYear: true,
								dateFormat: "yy-mm-dd",
								yearRange: '2014:c-0'
							});
							
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
							
							$("#fund").submit(function() { return false; });
							
							$("#fund2").submit(function() { return false; });
					
							
							$("#send").on("click", function(){
								var accountID = $("#accountID").val();
								var fundDate = $("#fundDate").val();
								var fundAmount = $("#fundAmount").val();
								var fundNote = $("#fundNote").val();
								
								if (accountID != '' && fundDate != '' && fundAmount != ''){
								
									$.ajax({
										type: 'POST',
										url: 'save_fund.php',
										dataType: 'JSON',
										data:{
											accountID: accountID,
											fundDate: fundDate,
											fundAmount: fundAmount,
											fundNote: fundNote
										},
										success: function(data) {
											setTimeout("$.fancybox.close()", 1000);
											window.location.href = "funds.php?code=1";
										}
									});
								}
							});
							
							$("#send2").on("click", function(){
								var startDate = $("#startDate").val();
								var endDate = $("#endDate").val();
								
								if (startDate.length != '' && endDate.length != ''){
									
									setTimeout("$.fancybox.close()", 1000);
									window.location.href = "funds.php?module=fund&act=search&startDate=" + startDate + "&endDate=" + endDate;
									
								}
							});
						});
					</script>
				
				
				<?php if ($_smarty_tpl->tpl_vars['module']->value=='fund'&&$_smarty_tpl->tpl_vars['act']->value=='search'){?>
					<br>
					<table width="98%" align="center">
						<tr>
							<td>
								<a href="#inline2" class="modalbox2"><button type="button" class="btn btn-primary">Cari Pengeluaran Biaya</button></a>
							</td>
						</tr>
					</table>
					
					<!-- hidden inline form -->
					<div id="inline2">
						<form id="fund2" name="fund2" action="#" method="POST">
						<table cellpadding="5" cellspacing="5" style="background-color: #FFFFFF; color: #000000;" width="100%">
							<tr>
								<td colspan="2"><h3>Cari Pengeluaran Biaya</h3></td>
							</tr>
							<tr>
								<td><label for="startDate">Periode Awal</label></td>
								<td><input type="text" id="startDate" name="startDate" class="txt" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
							</tr>
							<tr>
								<td><label for="endDate">Periode Akhir</label></td>
								<td><input type="text" id="endDate" name="endtDate" class="txt" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
							</tr>
						</table>
						<button id="send2" class="btn btn-primary">Cari</button>
						</form>
					</div>
					
					<table width="98%" align="center">
						<tr valign="top">
							<td><h3>Hasil Pencarian, Periode <?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
 s/d <?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
</h3></td>
						</tr>
						<tr>
							<td style="padding: 10px 0px 0px 2px;">
								<table cellpadding="5" cellspacing="5" class="table table-bordered table-hover tablesorter" style="background-color: #FFFFFF; color: #000000;" width="100%">
									<thead>
								    	<tr>
								    		<th width="30" style='border-left: 1px solid #CCCCCC;'>No <i class="fa fa-sort"></i></th>
											<th width="100" style='border-left: 1px solid #CCCCCC;'>Tanggal <i class="fa fa-sort"></i></th>
											<th width="80" style='border-left: 1px solid #CCCCCC;'>Kode Akun <i class="fa fa-sort"></i></th>
											<th width="200" style='border-left: 1px solid #CCCCCC;'>Nama Akun <i class="fa fa-sort"></i></th>
											<th width="80" style='border-left: 1px solid #CCCCCC;'>Jumlah <i class="fa fa-sort"></i></th>
											<th width="250" style='border-left: 1px solid #CCCCCC;'>Keterangan <i class="fa fa-sort"></i></th>
											<th width="50" style='border-left: 1px solid #CCCCCC;'>Aksi <i class="fa fa-sort"></i></th>
								    	</tr>
								    <thead>
								    <tbody>
								    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['name'] = 'dataFund';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataFund']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total']);
?>
								    	<tr class="borderedtd">
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['no'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundDate'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['accountCode'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['accountName'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundAmount'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundNote'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><a href="edit_funds.php?module=fund&act=edit&fundID=<?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundID'];?>
&startDate=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&endDate=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" data-width="400" data-height="290" class="various2 fancybox.iframe"><img src="images/icons/edit.png" width="20">
								    			<a href="funds.php?module=fund&act=delete&fundID=<?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundID'];?>
&startDate=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&endDate=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" onclick="return confirm('Anda Yakin ingin menghapus data biaya <?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['accountName'];?>
?');"><img src="images/icons/delete.png" width="20"></td>
								    	</tr>
								    	<?php endfor; endif; ?>
								    </tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td><br><a href="print_funds.php?module=fund&act=print&startDate=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&endDate=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" target="_blank"><button type="button" class="btn btn-warning">Print</button></a></td>
						</tr>
					</table>
					
				<?php }else{ ?>
					<br>
					<table width="98%" align="center">
						<tr>
							<td>
								<a href="#inline" class="modalbox"><button type="button" class="btn btn-primary">Tambah Pengeluaran Biaya</button></a>
							</td>
						</tr>
					</table>
					
					<table width="98%" align="center">
						<tr valign="top">
							<td><h3>Pengeluaran Biaya per <?php echo $_smarty_tpl->tpl_vars['periodMonth']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['periodYear']->value;?>
</h3></td>
						</tr>
						<tr>
							<td style="padding: 10px 0px 0px 2px;">
								<table cellpadding="5" cellspacing="5" class="table table-bordered table-hover tablesorter" style="background-color: #FFFFFF; color: #000000;" width="100%">
									<thead>
								    	<tr>
								    		<th width="30" style='border-left: 1px solid #CCCCCC;'>No <i class="fa fa-sort"></i></th>
											<th width="100" style='border-left: 1px solid #CCCCCC;'>Tanggal <i class="fa fa-sort"></i></th>
											<th width="80" style='border-left: 1px solid #CCCCCC;'>Kode Akun <i class="fa fa-sort"></i></th>
											<th width="200" style='border-left: 1px solid #CCCCCC;'>Nama Akun <i class="fa fa-sort"></i></th>
											<th width="80" style='border-left: 1px solid #CCCCCC;'>Jumlah <i class="fa fa-sort"></i></th>
											<th width="250" style='border-left: 1px solid #CCCCCC;'>Keterangan <i class="fa fa-sort"></i></th>
											<th width="50" style='border-left: 1px solid #CCCCCC;'>Aksi <i class="fa fa-sort"></i></th>
								    	</tr>
								    <thead>
								    <tbody>
								    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['name'] = 'dataFund';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataFund']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataFund']['total']);
?>
								    	<tr class="borderedtd">
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['no'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundDate'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['accountCode'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['accountName'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundAmount'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundNote'];?>
</td>
								    		<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'><a href="edit_funds.php?module=fund&act=edit&fundID=<?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundID'];?>
&startDate=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&endDate=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" data-width="400" data-height="290" class="various2 fancybox.iframe"><img src="images/icons/edit.png" width="20">
								    			<a href="funds.php?module=fund&act=delete&fundID=<?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['fundID'];?>
&startDate=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&endDate=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" onclick="return confirm('Anda Yakin ingin menghapus data biaya <?php echo $_smarty_tpl->tpl_vars['dataFund']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataFund']['index']]['accountName'];?>
?');"><img src="images/icons/delete.png" width="20"></td>
								    	</tr>
								    	<?php endfor; endif; ?>
								    </tbody>
								</table>
							</td>
						</tr>
					</table>
					
					<!-- hidden inline form -->
					<div id="inline">
						<table width="98%" align="center">
							<tr>
								<td colspan="3"><h3>Pengeluaran Biaya</h3></td>
							</tr>
							<tr>
								<td>
									<form id="fund" name="fund" method="POST" action="#">
									<table cellpadding="7" cellspacing="7">
										<tr>
											<td width="140">Tanggal</td>
											<td width="5">:</td>
											<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['fundDate']->value;?>
" id="fundDate" name="fundDate" class="txt" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
										</tr>
										<tr>
											<td>Akun Biaya</td>
											<td>:</td>
											<td>
												<select id="accountID" name="accountID" style="display: block; width: 270px; height: 35px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required>
													<option value=""></option>
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['name'] = 'dataAccount';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataAccount']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataAccount']['total']);
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['dataAccount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataAccount']['index']]['accountID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataAccount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataAccount']['index']]['accountCode'];?>
 - <?php echo $_smarty_tpl->tpl_vars['dataAccount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataAccount']['index']]['accountName'];?>
</option>
													<?php endfor; endif; ?>
												</select>
											</td>
										</tr>
										<tr>
											<td>Jumlah</td>
											<td>:</td>
											<td><input type="text" id="fundAmount" name="fundAmount" class="txt" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
										</tr>
										<tr>
											<td>Keterangan</td>
											<td>:</td>
											<td><input type="text" id="fundNote" name="fundNote" class="txt" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;"></td>
										</tr>
									</table>
									<button id="send" class="btn btn-primary">Simpan</button>
									</form>
								</td>
							</tr>
						</table>
					</div>
				<?php }?>
			</div><!-- /scroller-inner -->
		</div><!-- /scroller -->

	</div><!-- /pusher -->
</div><!-- /container -->
		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>