<script type="text/javascript">
 function changeparent(doc,doc2){
        var input1=doc;
        var input2=doc2;
        window.opener.document.getElementById('txtId').value=input1;
        window.opener.document.getElementById('txtNama').value=input2;
        window.close();
    }
</script>
<h3>Data Employee</h3>
<table cellpadding="3" cellspacing="0" border="1" width="80%" id="tblMain">
 <tr>
  <td>Employee Id</td>
  <td>Nama</td>
  <td>Alamat</td>
 </tr>
<?php
function getConnection() {
    $usr="root";
    $pwd="";
    $database="dbpos";
    $host="localhost";
    $connection=  mysql_connect($host, $usr, $pwd);
    mysql_select_db($database)or die("Database tidak ditemukan !");
    return $connection;
}

$conn=getConnection();
$sql="select * from as_prdid";
$dataQry  =  mysql_query($sql, $conn)or die("Query error :".  mysql_error());
while ($dataRow=  mysql_fetch_array($dataQry)){  
?>
<tr onClick="javascript:changeparent('<?php echo $dataRow['idprd']; ?>','<?php echo $dataRow['namaid']; ?>');">
 <td><?php echo $dataRow['idprd'];?></td>
   <td><?php echo $dataRow['namaid'];?></td>
   <td><?php echo $dataRow['namasub'];?></td>
</tr>
<script language="javascript">
    var tbl = document.getElementById("tblMain");
    if (tbl != null) {
        if (tbl.rows[0] != null) {
            tbl.rows[0].style.backgroundColor = "#365890";
            tbl.rows[0].style.color = "#FFFFFF";
        }
        for (var i = 1; i < tbl.rows.length; i++) {

            tbl.rows[i].style.cursor = "pointer";
            tbl.rows[i].onmousemove = function () { this.style.backgroundColor = "#cccccc"; this.style.color = "#FFFFFF"; };
            tbl.rows[i].onmouseout = function () { this.style.backgroundColor = ""; this.style.color = ""; };
        }
    }
</script>
<?php
}
?>
</table>