<script>
// prepare the form when the DOM is ready 
$(document).ready(function() { 
    // bind form using ajaxForm 
    $('#htmlForm').ajaxForm({ 
        // target identifies the element(s) to update with the server response 
        target: '#htmlCardTarget', 
 
        // success identifies the function to invoke when the server response 
        // has been received; here we apply a fade-in effect to the new content 
        success: function() { 
            $('#htmlCardTarget').fadeIn('slow');
            $('#htmlForm').resetForm();
        } 
    });
});
</script>

<div><?php echo $this->formAddDecklist("edit", $ar); ?></div>
<div class="clear"></div>
<div id="htmlCardTarget" style="width:403px;float: left;">
	<?php
	if ($ar['decklist_id'] != ""){
		echo $this->showDecklist($ar['decklist_id'], "add");
	}
	?>&nbsp;		
</div>
<div style="width:180px;float: left;">
	<form id="htmlForm" action="<?php echo $this->eden_cfg['url_edencms'];?>eden_ajax.php?action=mtg_decklist_add&amp;project=<?php echo $_SESSION['project'];?>" method="post"> 
		<p>
			<label for="card_num"><strong>Počet karet</strong></label><br>
			<select name="card_num" size="1">
			<?php 
			for ($i=1;$i<21;$i++){
				echo "<option value=\"".$i."\" "; if ($i == 1 || $i == 4){ echo "selected=\"selected\""; } echo ">".$i."</option>";
			}?>
			</select>
		</p>
    	<p>
			<label for="card"><strong>Název karty</strong></label><br>
			<input type="text" id="card" name="card" value="" size="30" autocomplete="off" onkeyup="ajax_showOptions(this,'getMtGCardByLetters=1&amp;project=<?php echo $_SESSION['project'];?>',event)">
		</p>
		<p>
			<label for="card_mode"><strong>Typ hry</strong></label><br>
			<select name="card_mode" size="1">
				<option value="1">Main</option>
				<option value="2">Sideboard</option>
			</select>
		</p>
		<p>
		<input type="hidden" id="card_hidden" name="card_id">
		<input type="hidden" name="decklist_id" value="<?php echo $ar['decklist_id']; ?>">
    	<input type="submit" value="Vložit kartu/y">
		</p>
	</form>
</div>
<div class="clear"></div>