<div class="content_article_home_cont">
	<div class="content_article_home_text">
		<h2><?php echo $ar['decklist_name']; ?></h2>
		<p><?php echo $ar['decklist_description'];?></p>
		<?php 
		if ($_SESSION['loginid'] == $ar['decklist_admin_id']){?>
			<a href="index.php?action=decklist_edit&lang=<?php echo $_GET['lang']; ?>&did=<?php echo $ar['decklist_id']; ?>">Editovat decklist</a>
			<div class="clear"></div>
<?php
		}
		$res_cards = mysql_query("SELECT decklist_card_num, mtg_card_id, mtg_card_mtg_id, mtg_card_name, mtg_card_set, mtg_card_set_code, mtg_card_type, mtg_card_variation 
		FROM "._DB_MTG_DECKLISTS_CARDS." 
		JOIN "._DB_MTG_CARDS." ON mtg_card_id = decklist_card_card_id 
		WHERE  	decklist_card_decklist_id = ".(integer)$ar['decklist_id']." AND decklist_card_mode = 1
		ORDER BY mtg_card_type ASC, mtg_card_name ASC 
		") or die ("<strong>File:</strong> ".__FILE__."<br><strong>Line:</strong>".__LINE__."<br>".mysql_error());
		$type = "";
		$num_main = 0;?>
		<div style="width:198px; float:left;">
			<h3 style="font-size: medium">Main deck</h3><p>
			<?php
			while ($ar_cards = mysql_fetch_array($res_cards)){
				$card_type = $this->getSimpleCardType($ar_cards['mtg_card_type']);
				$num_main = $num_main + $ar_cards['decklist_card_num'];
				if ($type != $card_type){
					echo "<h4>".$card_type."</h4>";
					$type = $card_type;
				}?>
				<span><?php echo $ar_cards['decklist_card_num']."x "?><a href="#<?php echo $ar_cards['mtg_card_id']; ?>" rel="magic,cz,mtgcard,<?php echo $ar_cards['mtg_card_id']; ?>" class="eden_hintbox_trigger"><?php echo $ar_cards['mtg_card_name']; ?></a></span><br><?php
			}?></p>
		</div>

		<?php
		$res_cards = mysql_query("SELECT decklist_card_num, mtg_card_id, mtg_card_mtg_id, mtg_card_name, mtg_card_set, mtg_card_set_code, mtg_card_type, mtg_card_variation 
		FROM "._DB_MTG_DECKLISTS_CARDS." 
		JOIN "._DB_MTG_CARDS." ON mtg_card_id = decklist_card_card_id 
		WHERE  	decklist_card_decklist_id = ".(integer)$ar['decklist_id']." AND decklist_card_mode = 2
		ORDER BY mtg_card_type ASC, mtg_card_name ASC 
		") or die ("<strong>File:</strong> ".__FILE__."<br><strong>Line:</strong>".__LINE__."<br>".mysql_error());
		$type = "";
		$num_side = 0;?>
		<div style="width:198px; float:left;">
			<h3 style="font-size: medium">Sideboard</h3><p>
			<?php
			while ($ar_cards = mysql_fetch_array($res_cards)){
				$card_type = $this->getSimpleCardType($ar_cards['mtg_card_type']);
				$num_side = $num_side + $ar_cards['decklist_card_num'];
				if ($type != $card_type){
					echo "<h4>".$card_type."</h4>";
					$type = $card_type;
				}?>
				<span><?php echo $ar_cards['decklist_card_num']."x "?><a href="#<?php echo $ar_cards['mtg_card_id']; ?>" rel="magic,cz,mtgcard,<?php echo $ar_cards['mtg_card_id']; ?>" class="eden_hintbox_trigger"><?php echo $ar_cards['mtg_card_name']; ?></a></span><br><?php
			}?></p>
		</div>
		<div class="clear"></div>
	</div>
</div>