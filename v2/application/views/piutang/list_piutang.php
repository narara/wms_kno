<div id='content'>
            	<h2>SEARCH PIUTANG INBOUND</h2>
					
                    <?php 
							echo form_open('piutang/do_search_piutang');
					?>
                    
                      <input name="agent" size=40 placeholder="nama agent" type="text">
                    <?php 
						echo form_submit('submit', 'SEARCH' ); 
						echo form_close();
					?>
					 
					<table>
						<thead>
						<tr>
							<th>No</th>
							<th>Tgl Manifest</th>
							<th>Agent</th>
							<th>Penerima</th>
							<th>No. BTB</th>
							<th>No. SMU</th>
							<th>Airline</th>
							
						</tr>
						</thead>
						<tfoot>
						<tr><td colspan=7><center><div class="pagination"><?php echo $this->pagination->create_links();?></div></center></td></tr>
						</tfoot>
						<tbody>
					 <?php 
					 $num = $offset+1;
					 foreach ($result as $row)
					 { ?>
						<tr>
							<td><?php echo $num++?></td>
							<td><?php echo $row->in_tgl_manifest?></td>
							<td><?php echo $row->in_agent?></td>
							<td><?php echo $row->in_name?></td>
							<td><?php echo $row->in_btb?></td>
							<td><?php echo $row->in_smu?></td>
							<td><?php echo $row->in_airline?></td>
						</tr>
					 <?php }?>
						</tbody>
					</table>
                 
				<?php echo anchor('piutang/pdf_piutang_incoming/'.$agent.'/', '<i class="icon-print"></i> EXPORT TO PDF'); ?>
</div>