<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT Gapura Angkasa Kualanamu | Warehouse Management System</title>
<style type="text/css">
html{
	margin:15px;
}


table.gridtable {
	font-family: times,arial,sans-serif;
	font-size:14px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
	margin-top:10px;
	margin-bottom:2px;
	border-top: 1px solid;
	
	height:auto;
	
}
table.gridtable th {
	border-width: 1px;
	padding: 4px;
	border-style: solid;
	border-color: #666666;
	height:auto;
	border-bottom:1px solid;
	border-top:1px solid;
}
table.gridtable td {
	border-width: 1px;
	padding: 2px;
	border-style: solid;
	border-color: #666666;
	border-bottom: 1px solid;
	background-color: #ffffff;
	text-align: left;
	height:auto;
}
</style>

</head>
<body>
<?php 
	$namauser = str_replace('_',' ',strtoupper($user));
	$namauser = str_replace('%20',' ',strtoupper($namauser));
?>
                   <h2>Laporan Transaksi Inbound Kasir : <?php echo $namauser; ?>, Tanggal : <?php echo mdate('%d-%m-%Y', strtotime($date)); ?> <h2>
					 <table  border="1" class="gridtable" width="1024px">
                    	<tr>
                            <td><div align="center"><strong>Tgl Bayar</strong></div></td>
                            <td><div align="center"><strong>No BTB</strong></div></td>
                            <td><div align="center"><strong>No SMU</strong></div></td>
                            <td><div align="center"><strong>Koli</strong></div></td>
                            <td><div align="center"><strong>Berat Aktual</strong></div></td>
                            <td><div align="center"><strong>Berat Bayar</strong></div></td>
                            <td><div align="center"><strong>Hari</strong></div></td>
                            <td><div align="center"><strong>WHC</strong></div></td>
                            <td><div align="center"><strong>CSC</strong></div></td>
                            <td><div align="center"><strong>Adm</strong></div></td>
                            <td><div align="center"><strong>Sub Total</strong></div></td>
                            <td><div align="center"><strong>PPN</strong></div></td>
                            <td><div align="center"><strong>Total</strong></div></td>
                        </tr>
                       
                        <?php
						$tot_in = 0; 
						foreach($incoming as $row_in): 
						$tot_in=$tot_in+$row_in->total_biaya;
						?>
               			<tr>
                            <td><div align="center"><?php echo strtoupper($row_void->no_smubtb); ?></div></td>
                            <td><div align="center"><?php echo strtoupper($row_void->nosmu); ?></div></td>
                            <td><div align="center"><?php echo strtoupper($row_void->btb_totalkoli); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->btb_totalberat); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->btb_totalberatbayar); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->hari); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->sewagudang); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->cargo_charge); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->administrasi); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->sewagudang_after_discount+$row_void->administrasi); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->ppn); ?></div></td>
                            <td><div align="right"><?php echo strtoupper($row_void->total_biaya); ?></div></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
							<td colspan="11"></td>
                            <td colspan="2">Rp. <?php echo number_format($tot_in, 0, ',', '.'); ?></td>
                      	</tr>
                    </table>
              
            <br><br><br>  
     		<h2>Laporan Transaksi Outbound Kasir : <?php echo $namauser; ?>, Tanggal : <?php echo mdate('%d-%m-%Y', strtotime($date)); ?> <h2>
						
                    <table  border="1" class="gridtable" width="1024px">
					    <tr>
                            <td><div align="center"><strong>Tgl Bayar</strong></div></td>
                            <td><div align="center"><strong>No BTB</strong></div></td>
                            <td><div align="center"><strong>No SMU</strong></div></td>
                            <td><div align="center"><strong>Koli</strong></div></td>
                            <td><div align="center"><strong>Berat Aktual</strong></div></td>
                            <td><div align="center"><strong>Berat Bayar</strong></div></td>
                            <td><div align="center"><strong>Hari</strong></div></td>
                            <td><div align="center"><strong>WHC</strong></div></td>
                            <td><div align="center"><strong>CSC</strong></div></td>
                            <td><div align="center"><strong>Adm</strong></div></td>
                            <td><div align="center"><strong>Sub Total</strong></div></td>
                            <td><div align="center"><strong>PPN</strong></div></td>
                            <td><div align="center"><strong>Total</strong></div></td>
                        </tr>
                        <?php
						$tot_out = 0; 
						foreach($outgoing as $row_out): 
						$tot_out=$tot_out+$row_out->total_biaya;
						?>
               			
						<tr>
                        	
                            <td><?php echo mdate("%d-%m-%Y %H:%i",strtotime($row_out->tglbayar)); ?></td>
                            <td><?php echo strtoupper($row_out->no_smubtb); ?></td>
                            <td><?php echo strtoupper($row_out->nosmu); ?></td>
                            <td><?php echo strtoupper($row_out->btb_totalkoli); ?></td>
                            <td><?php echo strtoupper($row_out->btb_totalberat); ?></td>
                            <td><?php echo strtoupper($row_out->btb_totalberatbayar); ?></td>
                            <td><?php echo strtoupper($row_out->hari); ?></td>
                            <td><?php echo strtoupper($row_out->sewagudang); ?></td>
                            <td><?php echo strtoupper($row_out->cargo_charge); ?></td>
                            <td><?php echo strtoupper($row_out->administrasi); ?></td>
                            <td><?php echo strtoupper($row_out->sewagudang+$row_out->cargo_charge+$row_out->administrasi); ?></td>
                            <td><?php echo strtoupper($row_out->ppn); ?></td>
                            <td><?php echo strtoupper($row_out->total_biaya); ?></td>
                          
                        </tr>
                        <?php endforeach; ?>
                        <tr>
							<td colspan="11"></td>
                            <td colspan="2">Rp. <?php echo number_format($tot_out, 0, ',', '.'); ?></td>
                      	</tr>
                    </table>
                    
         
     		<br><br><br>  
     		<h2>Laporan Transaksi Void Kasir : <?php echo $namauser; ?>, Tanggal : <?php echo mdate('%d-%m-%Y', strtotime($date)); ?> <h2>
			
                    <table  border="1" class="gridtable" width="1024px">
                    	
                        <tr>
                            <td><div align="center"><strong>Tgl Bayar</strong></div></td>
                            <td><div align="center"><strong>No BTB</strong></div></td>
                            <td><div align="center"><strong>No SMU</strong></div></td>
                            <td><div align="center"><strong>Koli</strong></div></td>
                            <td><div align="center"><strong>Berat Aktual</strong></div></td>
                            <td><div align="center"><strong>Berat Bayar</strong></div></td>
                            <td><div align="center"><strong>Hari</strong></div></td>
                            <td><div align="center"><strong>WHC</strong></div></td>
                            <td><div align="center"><strong>CSC</strong></div></td>
                            <td><div align="center"><strong>Adm</strong></div></td>
                            <td><div align="center"><strong>Sub Total</strong></div></td>
                            <td><div align="center"><strong>PPN</strong></div></td>
                            <td><div align="center"><strong>Total</strong></div></td>
                        </tr>
                         <?php
						$tot_void = 0; 
						foreach($void as $row_void): 
						$tot_void=$tot_void+$row_void->total_biaya;
						?>
               			
        
                        	
                            <td><?php echo mdate("%d-%m-%Y",strtotime($row_void->tglbayar)); ?></td>
                            <td><?php echo strtoupper($row_void->no_smubtb); ?></td>
                            <td><?php echo strtoupper($row_void->nosmu); ?></td>
                            <td><?php #echo strtoupper($row_void->btb_totalkoli); ?></td>
                            <td><?php #echo strtoupper($row_void->btb_totalberat); ?></td>
                            <td><?php #echo strtoupper($row_void->btb_totalberatbayar); ?></td>
                            <td><?php echo strtoupper($row_void->hari); ?></td>
                            <td><?php echo strtoupper($row_void->sewagudang); ?></td>
                            <td><?php echo strtoupper($row_void->cargo_charge); ?></td>
                            <td><?php echo strtoupper($row_void->administrasi); ?></td>
                            <td><?php echo strtoupper($row_void->sewagudang+$row_void->cargo_charge+$row_void->administrasi); ?></td>
                            <td><?php echo strtoupper($row_void->ppn); ?></td>
                            <td><?php echo strtoupper($row_void->total_biaya); ?></td>
                          
                        </tr>
                        <?php endforeach; ?>
                        <tr>
							<td colspan="11"></td>
                            <td colspan="2">Rp. <?php #echo number_format($tot_void, 0, ',', '.'); ?></td>
                      	</tr>
                    </table>
                    
                   
</body>
</html>