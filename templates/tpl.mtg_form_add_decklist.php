<form action="<?php echo $this->eden_cfg['url_edencms'];?>eden_save.php?project=<?php echo $_SESSION['project'];?>" method="post"> 
  	<p>
		<label for="decklist_name"><strong>Název decklistu</strong></label><br>
		<input type="text" name="decklist_name" id="decklist_name" value="<?php if (isset($_GET['dn'])){ echo $_GET['dn']; } elseif ($mode == "edit"){ echo $data['decklist_name']; } ?>" size="50" tabindex="0">
	</p>
	<p>
		<label for="decklist_format"><strong>Formát</strong></label><br>
		<select name="decklist_format" id="decklist_format" size="1" tabindex="1"><br>
			<option value="0" selected="selected">Prosím vyberte formát</option>
			<option value="1" <?php if ($_GET['df'] == 1 || $data['decklist_format'] == 1){echo "selected=\"selected\"";} ?>>Standard</option>
			<option value="2" <?php if ($_GET['df'] == 2 || $data['decklist_format'] == 2){echo "selected=\"selected\"";} ?>>Modern</option>
			<option value="3" <?php if ($_GET['df'] == 3 || $data['decklist_format'] == 3){echo "selected=\"selected\"";} ?>>Extended</option>
			<option value="4" <?php if ($_GET['df'] == 4 || $data['decklist_format'] == 4){echo "selected=\"selected\"";} ?>>Legacy</option>
			<option value="5" <?php if ($_GET['df'] == 5 || $data['decklist_format'] == 5){echo "selected=\"selected\"";} ?>>Vintage</option>
			<option value="6" <?php if ($_GET['df'] == 6 || $data['decklist_format'] == 6){echo "selected=\"selected\"";} ?>>Commander</option>
		</select>
	</p>
	<p>
		<label for="decklist_desc"><strong>Popis decklistu (max 250 znaků)</strong></label><br>
		<textarea id="decklist_desc" name="decklist_desc" rows="3" cols="50"><?php if (isset($_GET['dd'])){ echo $_GET['dd']; } elseif ($mode == "edit"){ echo $data['decklist_description']; } ?></textarea>
	</p>
   	<p><?php
		if ($mode == "edit"){?>
			<input type="hidden" name="decklist_id" value="<?php echo $data['decklist_id']; ?>"><?php
		}?>
		<input type="hidden" name="mode" value="<?php if ($mode == "add"){ echo "decklist_add";} elseif ($mode == "edit") { echo "decklist_edit"; }?>">
		<input type="submit" value="<?php if ($mode == "add") {echo "Přidat decklist";} else { echo "Uložit decklist";}?>">
	</p>
</form>