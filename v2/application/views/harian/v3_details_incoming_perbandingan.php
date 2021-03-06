<div id="content">
	    	PT Gapura Angkasa - PT Angkasa Pura II<br />
        Domestic Cargo Warehouse Kualanamu International Airport<br />
        <br />
    	Laporan Pendapatan Harian Incoming Airline : <?php echo strtoupper($airline); ?>  Tanggal : <?php echo $date; ?><br />
    	<table>
        	<tr>
            	<th>Kasir</th>
                <th>Agent</th>
                <th>NPJG</th>
                <th>No SMU</th>
                <th>No BTB</th>
                <th>Hari</th>
                <th>Koli</th>
                <th>Berat</th>
                <th>WHC</th>
                <th>CSC</th>
                <th>Adm</th>
                <th>Sub Total</th>
                <th>Ppn</th>
                <th>Total</th>
				<th>Total Hitung</th>
            </tr>
            <?php 
			$tot_whc = 0;
			$tot_csc = 0;
			$tot_kol = 0;
			$tot_bbr = 0;
			$tot_adm = 0;
			$tot_ppn = 0;
			foreach($details as $item): 
			if (isset($item)) 
			{
				$tot_kol = $tot_kol + $item->in_koli;
				$tot_bbr = $tot_bbr + $item->in_berat_bayar;
				$tot_whc = $tot_whc + $item->sewagudang;
				$tot_csc = $tot_csc + $item->cargo_charge;
				$tot_adm = $tot_adm + $item->administrasi;
				$tot_ppn = $tot_ppn + $item->ppn;
			?>
            <tr>
            	<td><?php echo ucwords($item->user); ?></td>
                <td><?php echo $item->in_agent; ?></td>
                <td><?php echo $item->nodb; ?></td>
                <td><?php echo $item->nosmu; ?></td>
                <td><?php echo $item->in_btb; ?></td>
                <td align="right"><?php echo $item->hari; ?></td>
                <td align="right"><?php echo number_format($item->in_koli, 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->in_berat_bayar, 1, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->sewagudang, 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->cargo_charge, 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->administrasi, 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->sewagudang+$item->cargo_charge+$item->administrasi, 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->ppn, 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item->total_biaya, 0, ',', '.'); ?></td>
				<td><??> </td>
            </tr>
            <?php 
			}
			endforeach; 
			?>
			<tr>
            	<td colspan="6"><b>TOTAL</b></td>
                <td align="right"><strong><?php echo number_format($tot_kol, 0, ',', '.'); ?></strong> koli</td>
                <td align="right"><strong><?php echo number_format($tot_bbr, 1, ',', '.'); ?></strong> Kg</td>
                <td align="right">Rp. <strong><?php echo number_format($tot_whc, 0, ',', '.'); ?></strong></td>
                <td align="right">Rp. <strong><?php echo number_format($tot_csc, 0, ',', '.'); ?></strong></td>
                <td align="right">Rp. <strong><?php echo number_format($tot_adm, 0, ',', '.'); ?></strong></td>
                <td align="right">Rp. <strong><?php echo number_format($tot_whc+$tot_csc+$tot_adm, 0, ',', '.'); ?></strong></td>
                <td align="right">Rp. <strong><?php echo number_format($tot_ppn, 0, ',', '.'); ?></strong></td>
                <td align="right">Rp. <strong><?php echo number_format($tot_whc+$tot_csc+$tot_adm+$tot_ppn, 0, ',', '.'); ?></strong></td>
            </tr>
			
        </table>
         <?php echo anchor('harian/incoming_pdf/' . $airline . '/' . $date . '/', 'export to pdf' ); ?>
    
</div>