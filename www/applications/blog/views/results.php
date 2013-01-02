<?php 
if(!defined("_access")) {
	die("Error: You don't have permission to access here..."); 
}

$caption = __("Manage Blog");
$colspan = 8;

echo $search;

$colors[0] = _color1;
$colors[1] = _color2;
$colors[2] = _color3;
$colors[3] = _color4;
$colors[4] = _color5;		

$i = 0;
$j = 2;	
?>		
<table id="results" class="results">
	<caption class="caption">
		<span class="bold"><?php echo $caption; ?></span>
	</caption>
					
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>ID</th>
			<th style="text-align: left;"><?php echo __("Title"); ?></th>
			<th><?php echo __("Views"); ?></th>
			<th><?php echo __("Author"); ?></th>
			<th><?php echo __("Language"); ?></th>
			<th><?php echo __("Situation"); ?></th>
			<th><?php echo __("Action"); ?></th>
		</tr>
	</thead>
					
	<tfoot>
		<tr>
			<td colspan="<?php echo $colspan; ?>">
				<span class="bold"><?php echo __("Total"); ?>:</span> <?php echo $total; ?>
			</td>
		</tr>
	</tfoot>		  
		
	<tbody>		
	<?php
		if($tFoot) {
			foreach($tFoot as $column) {     
				$ID    = $column["ID_Post"]; 
				$color = ($column["Situation"] === "Deleted") ? $colors[$j] : $colors[$i];  

				$i = ($i === 1) ? 0 : 1;
				$j = ($j === 3) ? 2 : 3;
				?>
				<tr style="background-color: <?php echo $color; ?>">		
					<td class="center">
						<?php echo getCheckbox($ID); ?>
					</td>
								
					<td class="center">
						<?php echo $ID; ?>
					</td>
																				
					<td style="text-align: left;">
					<?php			
						echo stripslashes(cut($column["Title"], 6, "text")); 
					?>
					</td>

					<td class="center">
						<?php echo $column["Views"]; ?>
					</td>
								
					<td class="center">
						<?php echo $column["Author"]; ?>
					</td>
								
					<td class="center">
						<?php echo getLanguage($column["Language"], TRUE); ?>
					</td>
						 
					<td class="center">
						<?php echo __($column["Situation"]); ?>
					</td>
												 
					<td class="center">
					<?php 					
						echo ($column["Situation"] === "Deleted") ? getAction(TRUE, $ID) : getAction(FALSE, $ID);
					?>
					</td>
	 			</tr>
	 		<?php
	 		}
	 	}
	 	?>                     
	</tbody>            
</table>
		
<div class="table-options" style="position: relative; z-index: 1; margin-bottom: 25px;">
	<?php echo __("Select"); ?>: <br />
	
	<a onclick="javascript:checkAll('records')" class="pointer" title="<?php echo __("All"); ?>"><?php echo __("All"); ?></a> |
	<a onclick="javascript:unCheckAll('records')" class="pointer" title="<?php echo __("None"); ?>"><?php echo __("None"); ?></a><br /><br />
	
	<?php				
	if(segment(3, isLang()) === "trash") { 
	?>
		<input class="btn btn-success" onclick="javascript:return confirm(\'<?php echo __("Do you want to restore the records?"); ?>\')" name="restore" value="<?php echo __("Restore"); ?>" type="submit" class="small-input" />
		<input class="btn btn-danger" onclick="javascript:return confirm(\'<?php echo __("Do you want to delete the records?"); ?>\')" name="delete" value="<?php echo __("Delete"); ?>" type="submit" class="small-input" />
	<?php
	} else { 
	?>
		<input class="btn btn-warning" onclick="javascript:return confirm(\'<?php echo __("Do you want to send to trash the records?"); ?>\')" name="trash" value="<?php echo __("Send to trash"); ?>" type="submit" class="small-input" />
	<?php
	}
	?>					
</div>

<?php echo $pagination; ?>
