<link rel="shortcut icon" href="images/favicon.jpg">
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
{literal}
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
{/literal}
				

{if $module == 'prdid' AND $act == 'edit'}
	
						
	<table width="95%"  align="center">
		<tr>
			<td colspan="3"><h3>Ubah Produk ID</h3></td>
		</tr>
		<tr>
			<td>
				<form id="prdid" name="prdid" method="POST" action="#">
				<input type="hidden" id="idprd" name="idprd" value="{$idprd}">
				<table cellpadding="7" cellspacing="7">
					<tr>
						<td width="100">Produk ID</td>
						<td width="5">:</td>
						<td><input type="text" id="namaid" name="namaid" value="{$namaid}" style="display: block; width: 350px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
					</tr>
					</tr>
						<td width="130">Sub Produk ID</td>
						<td width="5">:</td>
						<td><input type="text" id="namasub" name="namasub" value="{$namasub}" style="display: block; width: 350px; height: 34px; padding: 6px 20px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
				
				</tr>
			
				<tr>
						<td>Status</td>
						<td>:</td>
						<td><select name="status" id="status" style="display: block; width: 350px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required>
							<option value="">- Pilih Status -</option>
							<option value="Y" {if $status == 'Y'} SELECTED {/if}>Y (Aktif)</option>
							<option value="N" {if $status == 'N'} SELECTED {/if}>N (Tidak Aktif)</option>
						</select></td>
					</tr>
				</table>
				<button id="send" class="btn btn-primary">Simpan</button>
				</form>
			</td>
		</tr>
	</table>


{/if}
</body>