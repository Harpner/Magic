<table cellspacing="2" cellpadding="2" border="0">
<?php
$i = 1;
while ($ar = mysql_fetch_array($res)){
	echo  "	<tr>";
	echo  "		<td>";
	echo "			<img src=\""._URL_CATEGORIES.$ar['category_image']."\" title=\"".$ar['category_name']."\" alt=\"".$ar['category_name']."\" width=\"16\" height=\"16\" border=\"0\"> ";
	echo "				<a href=\"".$this->eden_cfg['url']."index.php?lang=".$_GET['lang']."&amp;filter=".$_GET['filter']."&amp;action=clanek&amp;id=".$ar['article_id']."&amp;page_mode=".$_GET['page_mode']."\" title=\"".TreatText($ar['article_headline'],0,1)."\" target=\"_parent\">".TreatText($ar['article_headline'],0,1)."</a>";
	echo  "		</td>";
	echo "	</tr>";
	$i++;
}
?>
</table>