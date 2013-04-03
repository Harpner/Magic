<div class="content_article_home_cont">
	<div class="content_article_home_text">
		<?php
		$res = mysql_query("SELECT decklist_id, decklist_name, decklist_format 
		FROM "._DB_MTG_DECKLISTS." 
		WHERE decklist_admin_id = ".(integer)$_SESSION['loginid']." 
		ORDER BY decklist_format ASC, decklist_name ASC") or die ("<strong>File:</strong> ".__FILE__."<br><strong>Line:</strong>".__LINE__."<br>".mysql_error());
		$format = 1;
		while ($ar = mysql_fetch_array($res)){
			if ($ar['decklist_format'] == 1){
				$format_title = "Standard";
			} elseif ($ar['decklist_format'] == 2){
				$format_title = "Modern";
			} elseif ($ar['decklist_format'] == 3){
				$format_title = "Extended";
			} elseif ($ar['decklist_format'] == 4){
				$format_title = "Legacy";
			} elseif ($ar['decklist_format'] == 5){
				$format_title = "Vintage";
			} elseif ($ar['decklist_format'] == 6){
				$format_title = "Commander";
			}
			
			if ($format == $ar['decklist_format']){
				echo "<br><h2>".$format_title."</h2>";
				$format = $format + 1;
			}?>
			<div><a href="index.php?action=decklist_show&lang=<?php echo $_GET['lang']; ?>&did=<?php echo $ar['decklist_id']; ?>"><?php echo $ar['decklist_name']; ?></a></div>
			<?php
		}
		?>
	</div>
</div>
