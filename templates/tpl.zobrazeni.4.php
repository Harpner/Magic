<table cellspacing="0" cellpadding="3" border="0">
<?php  if ($_GET['team_detail'] == "open" && $article_id == $_GET['id_clena']){?>
	<tr>
		<td width="480" align="left" valign="top"><?php echo $article_text;?></td>
		<td width="80" align="right" valign="top"><a href="?lang=<?php echo AGet($_GET,'lang');?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;action=<?php echo AGet($_GET,'action');?>&team_detail=close&id_clena=<?php echo $article_id;?>&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>">Close</a></td>
	</tr>
<?php  } else {?>
	<tr>
		<td width="400" align="left" valign="top"><?php echo $article_perex;?></td>
		<td width="80" align="right" valign="top"><a href="?lang=<?php echo AGet($_GET,'lang');?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;action=<?php echo AGet($_GET,'action');?>&team_detail=<?php  if ($_GET['team_detail'] == "open" && $article_id == $_GET['id_clena']){echo "close";} else {echo "open";}?>&id_clena=<?php echo $article_id;?>&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>">Details</a></td>
	</tr>
<?php  }?>
</table>
