<div class="content_article_home_cont">
	<div class="content_article_home_text">
		<form id="htmlForm" action="<?php echo $this->eden_cfg['url_edencms'];?>eden_save.php?action=mtg_decklist_add&amp;project=<?php echo $_SESSION['project'];?>" method="post"> 
		  	<p>
				<label for="decklist_name"><strong>Název decklistu</strong></label><br>
				<input type="text" name="decklist_name" id="decklist_name" value="<?php if ($_GET['dn']){echo $_GET['dn'];} ?>" size="50" tabindex="0">
			</p>
			<p>
				<label for="decklist_format"><strong>Formát</strong></label><br>
				<select name="decklist_format" id="decklist_format" size="1" tabindex="1"><br>
					<option value="0" selected="selected">Prosím vyberte formát</option>
					<option value="1" <?php if ($_GET['df'] == 1){echo "selected=\"selected\"";} ?>>Standard</option>
					<option value="2" <?php if ($_GET['df'] == 2){echo "selected=\"selected\"";} ?>>Modern</option>
					<option value="3" <?php if ($_GET['df'] == 3){echo "selected=\"selected\"";} ?>>Extended</option>
					<option value="4" <?php if ($_GET['df'] == 4){echo "selected=\"selected\"";} ?>>Legacy</option>
					<option value="5" <?php if ($_GET['df'] == 5){echo "selected=\"selected\"";} ?>>Vintage</option>
					<option value="6" <?php if ($_GET['df'] == 6){echo "selected=\"selected\"";} ?>>Commander</option>
				</select>
			</p>
			<p>
				<label for="decklist_desc"><strong>Popis decklistu (max 250 znaků)</strong></label><br>
				<textarea id="decklist_desc" name="decklist_desc" rows="3" cols="50"><?php if ($_GET['dd']){echo $_GET['dd'];} ?></textarea>
			</p>
		   	<p>
				<input type="hidden" name="mode" value="decklists_add">
				<input type="submit" value="Přidat decklist">
			</p>
		</form>
	</div>
</div>
