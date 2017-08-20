{include file="header.tpl"}

<div class="container">
	<!-- Push Wrapper -->
	<div class="mp-pusher" id="mp-pusher">

		{include file="navigation.tpl"}

		<div class="scroller"><!-- this is for emulating position fixed of the nav -->
			<div class="scroller-inner">
				<!-- Top Navigation -->
				<div style="padding-left: 18px; padding-top: 10px;">
					
					{include file="logo.tpl"}
					
				</div>
				
				<!-- Top Navigation -->
				<div class="codrops-top clearfix">
					<!--<a href="#" id="trigger" class="menu-trigger">Open Menu</a>-->
					<a class="codrops-icon codrops-icon-prev" href="#" id="trigger"><span>Open Menu</span></a> |
					<a href="home.php"><span>Home</span></a>
					<span class="right"><a class="codrops-icon codrops-icon-drop" href="logout.php"><span>Logout</span></a></span>
				</div>
				
				<link rel="stylesheet" type="text/css" media="all" href="design/js/fancybox/jquery.fancybox.css">
  				<script type="text/javascript" src="design/js/fancybox/jquery.fancybox.js?v=2.0.6"></script>
  				
  				{literal}
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
							
							$("#outlet").submit(function() { return false; });
							
							$("#outlet2").submit(function() { return false; });
					
							
							$("#send").on("click", function(){
								var outletCode = $("#outletCode").val();
								var outletName = $("#outletName").val();
								var outletStatus = $("#outletStatus").val();
								var outletUsername = $("#outletUsername").val();
								var outletPassword = $("#outletPassword").val();
								
								if (outletCode != '' && outletName != '' && outletStatus != '' && outletUsername != '' && outletPassword != ''){
								
									$.ajax({
										type: 'POST',
										url: 'save_outlet.php',
										dataType: 'JSON',
										data:{
											outletCode: outletCode,
											outletName: outletName,
											outletStatus: outletStatus,
											outletUsername: outletUsername,
											outletPassword: outletPassword
										},
										beforeSend: function (data) {
											$('#send').hide();
										},
										success: function(data) {
											setTimeout("$.fancybox.close()", 1000);
											window.location.href = "outlets.php?code=1";
										}
									});
								}
							});
						});
					</script>
				{/literal}
				
				<div style="width: 98%; margin: 0px auto;">
					<br>
					<a href="#inline" class="modalbox"><button class="btn btn-primary" type="button">Tambah Outlet</button></a>
					<a href="print_outlet.php" target="_blank"><button class="btn btn-warning" type="button">Print</button></a>
					<h3>Manajemen Outlet</h3>
					<div class="table-responsive">
						<table cellpadding="5" cellspacing="5" class="table table-bordered table-hover tablesorter" style="background-color: #FFFFFF; color: #000000;" width="100%">
							<thead>
								<tr>
									<th width="40" style='border-left: 1px solid #CCCCCC;'>No. <i class="fa fa-sort"></i></th>
									<th width="150" style='border-left: 1px solid #CCCCCC;'>Kode Outlet <i class="fa fa-sort"></i></th>
									<th width="350" style='border-left: 1px solid #CCCCCC;'>Nama Outlet <i class="fa fa-sort"></i></th>
									<th width="150" style='border-left: 1px solid #CCCCCC;'>Status <i class="fa fa-sort"></i></th>
									<th width="200" style='border-left: 1px solid #CCCCCC;'>Username <i class="fa fa-sort"></i></th>
									<th width="150" style='border-left: 1px solid #CCCCCC;'>Aksi <i class="fa fa-sort"></i></th>
								</tr>
							</thead>
							<tbody>
								{section name=dataOutlet loop=$dataOutlet}
								<tr>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>{$dataOutlet[dataOutlet].no}</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC; text-align: center;'>{$dataOutlet[dataOutlet].outletCode}</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>{$dataOutlet[dataOutlet].outletName}</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>{$dataOutlet[dataOutlet].outletStatus}</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>{$dataOutlet[dataOutlet].outletUsername}</td>
									<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>
										{if $dataOutlet[dataOutlet].outletID != '1'}
											<a href="edit_outlets.php?module=outlet&act=edit&outletID={$dataOutlet[dataOutlet].outletID}" data-width="450" data-height="360" class="various2 fancybox.iframe"><button type="button" class="btn btn-success">Edit</button></a>
											<a href="outlets.php?module=outlet&act=delete&outletID={$dataOutlet[dataOutlet].outletID}" onclick="return confirm('Anda Yakin ingin menghapus outlet {$dataOutlet[dataOutlet].outletName}?');"><button type="button" class="btn btn-danger">Hapus</button></a>
										{/if}
									</td>
								</tr>
								{/section}
							</tbody>
						</table>
					</div>
					<br>
					<div id="paging">{$pageLink}</div>
					
					<div id="inline">	
						<table width="98%" align="center">
							<tr>
								<td colspan="3"><h3>Tambah Outlet</h3></td>
							</tr>
							<tr>
								<td>
									<form id="outlet" name="outlet" method="POST" action="#">
									<table cellpadding="7" cellspacing="7">
										<tr>
											<td width="140">Kode Outlet</td>
											<td width="5">:</td>
											<td><input type="text" name="outletCode" value="{$outletCode}" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" DISABLED>
												<input type="hidden" name="outletCode" id="outletCode" value="{$outletCode}">
											</td>
										</tr>
										<tr>
											<td>Nama Outlet</td>
											<td>:</td>
											<td><input type="text" name="outletName" id="outletName" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
										</tr>
										<tr>
											<td>Status</td>
											<td>:</td>
											<td><select name="outletStatus" id="outletStatus" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required>
												<option value="">- Pilih Status -</option>
												<option value="Y">Y (Aktif)</option>
												<option value="N">N (Tidak Aktif)</option>
											</select></td>
										</tr>
										<tr>
											<td>Username</td>
											<td>:</td>
											<td><input type="text" name="outletUsername" id="outletUsername" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
										</tr>
										<tr>
											<td>Password</td>
											<td>:</td>
											<td><input type="text" name="outletPassword" id="outletPassword" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
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
		
{include file="footer.tpl"}