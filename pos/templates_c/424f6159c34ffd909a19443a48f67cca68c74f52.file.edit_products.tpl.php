<?php /* Smarty version Smarty-3.1.11, created on 2017-07-27 16:25:47
         compiled from ".\templates\edit_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140325979b19bafe438-11128882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424f6159c34ffd909a19443a48f67cca68c74f52' => 
    array (
      0 => '.\\templates\\edit_products.tpl',
      1 => 1501089648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140325979b19bafe438-11128882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'act' => 0,
    'productID' => 0,
    'productBarcode' => 0,
    'productBuyPrice' => 0,
    'productName' => 0,
    'productSalePrice' => 0,
    'supplierID' => 0,
    'dataSupplier' => 0,
    'productDiscount' => 0,
    'categoryID' => 0,
    'dataCategory' => 0,
    'productStock' => 0,
    'brandID' => 0,
    'dataBrand' => 0,
    'productNote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5979b19be811d8_13570916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5979b19be811d8_13570916')) {function content_5979b19be811d8_13570916($_smarty_tpl) {?><link rel="shortcut icon" href="images/favicon.jpg">
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

<body style='background-color: #FFF; color: #000;'>

	<script>
		$(document).ready(function() {
			
			$("#product").submit(function() { return false; });
	
			$("#send").on("click", function(){
				var productID = $("#productID").val();
				var supplierID = $("#supplierID").val();
				var categoryID = $("#categoryID").val();
				var brandID = $("#brandID").val();
				var productName = $("#productName").val();
				var productDiscount = $("#productDiscount").val();
				var productBuyPrice = $("#productBuyPrice").val();
				var productSalePrice = $("#productSalePrice").val();
				var productStock = $("#productStock").val();
				var productNote = $("#productNote").val();
				
				if (productID != '' && productName != '' && productBuyPrice != '' && productSalePrice != ''){
				
					$.ajax({
						type: 'POST',
						url: 'save_edit_products.php',
						dataType: 'JSON',
						data:{
							productID: productID,
							supplierID: supplierID,
							categoryID: categoryID,
							brandID: brandID,
							productName: productName,
							productDiscount: productDiscount,
							productBuyPrice: productBuyPrice,
							productSalePrice: productSalePrice,
							productStock: productStock,
							productNote: productNote
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

				

<?php if ($_smarty_tpl->tpl_vars['module']->value=='product'&&$_smarty_tpl->tpl_vars['act']->value=='edit'){?>
	<table width="98%" align="center">
		<tr>
			<td colspan="3"><h3>Ubah Produk</h3></td>
		</tr>
		<tr>
			<td>
				<form id="product" name="product" method="POST" action="#">
				<input type="hidden" name="productID" id="productID" value="<?php echo $_smarty_tpl->tpl_vars['productID']->value;?>
">
				<table cellpadding="7" cellspacing="7">
					<tr>
						<td width="140">Kode Produk</td>
						<td width="5">:</td>
						<td><input type="text" id="productBarcode" name="productBarcode" value="<?php echo $_smarty_tpl->tpl_vars['productBarcode']->value;?>
" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" DISABLED></td>
						<td width="20"></td>
						<td>Harga Beli</td>
						<td>:</td>
						<td><input type="number" id="productBuyPrice" value="<?php echo $_smarty_tpl->tpl_vars['productBuyPrice']->value;?>
" name="productBuyPrice" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
					</tr>
					<tr>
						<td>Nama Produk</td>
						<td>:</td>
						<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" id="productName" name="productName" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
						<td width="20"></td>
						<td>Harga Jual</td>
						<td>:</td>
						<td><input type="number" id="productSalePrice" name="productSalePrice" value="<?php echo $_smarty_tpl->tpl_vars['productSalePrice']->value;?>
" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
					</tr>
					<tr>
						<td>Supplier</td>
						<td>:</td>
						<td><select name="supplierID" id="supplierID" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['supplierID']->value=='0'){?> SELECTED <?php }?>>None</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['name'] = 'dataSupplier';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataSupplier']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['supplierID']->value==$_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplierID']){?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplierID'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplierName'];?>
</option>
								<?php }else{ ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplierID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplierName'];?>
</option>
								<?php }?>
							<?php endfor; endif; ?>
						</select></td>
						<td width="20"></td>
						<td>Diskon (%)</td>
						<td>:</td>
						<td><input type="number" id="productDiscount" name="productDiscount" value="<?php echo $_smarty_tpl->tpl_vars['productDiscount']->value;?>
" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;"></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>:</td>
						<td><select name="categoryID" id="categoryID" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['categoryID']->value=='0'){?> SELECTED <?php }?>>None</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['name'] = 'dataCategory';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataCategory']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCategory']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['categoryID']->value==$_smarty_tpl->tpl_vars['dataCategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCategory']['index']]['categoryID']){?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataCategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCategory']['index']]['categoryID'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataCategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCategory']['index']]['categoryName'];?>
</option>
								<?php }else{ ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataCategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCategory']['index']]['categoryID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataCategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCategory']['index']]['categoryName'];?>
</option>
								<?php }?>
							<?php endfor; endif; ?>
						</select></td>
						<td width="20"></td>
						<td>Stok</td>
						<td>:</td>
						<td><input type="number" id="productStock" value="<?php echo $_smarty_tpl->tpl_vars['productStock']->value;?>
" name="productStock" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;" required></td>
					</tr>
					<tr>
						<td>Brand</td>
						<td>:</td>
						<td><select name="brandID" id="brandID" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['brandID']->value=='0'){?> SELECTED <?php }?>>None</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['name'] = 'dataBrand';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataBrand']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataBrand']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['brandID']->value==$_smarty_tpl->tpl_vars['dataBrand']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataBrand']['index']]['brandID']){?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataBrand']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataBrand']['index']]['brandID'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataBrand']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataBrand']['index']]['brandName'];?>
</option>
								<?php }else{ ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataBrand']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataBrand']['index']]['brandID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataBrand']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataBrand']['index']]['brandName'];?>
</option>
								<?php }?>
							<?php endfor; endif; ?>
						</select></td>
						<td width="20"></td>
						<td>Note</td>
						<td>:</td>
						<td><input type="text" id="productNote" name="productNote" value="<?php echo $_smarty_tpl->tpl_vars['productNote']->value;?>
" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;"></td>
					</tr>
				</table>
				<button id="send" class="btn btn-primary">Simpan</button>
				</form>
			</td>
		</tr>
	</table>

<?php }?>
</body><?php }} ?>