<div class="content_article_home_cont">
	<div class="content_article_home_text"><h1><img src="<?php echo $url_category.$category_image;?>" title="<?php echo $category_name;?>" alt="<?php echo $category_name;?>" width="16" height="16" border="0">&nbsp;<?php  if ($article_link == "TRUE"){?><a href="index.php?lang=<?php echo AGet($_GET,'lang');?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;action=clanek&amp;id=<?php echo $article_id;?>&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>" title="<?php echo $article_headline;?>"><?php echo $article_headline;?></a><?php  } else {echo $article_headline;}?></h1>
		<strong><?php echo FormatTimestamp($article_date_on,"d/m/Y");?> - <a href="index.php?lang=<?php echo AGet($_GET,'lang');?>&amp;action=user_details&amp;user_id=<?php echo $admin_id;?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>"><?php echo $admin_nickname;?></a></strong> (<?php if ($_SESSION['u_status'] == "admin"){ echo _COM_COM_VIEWS." "; if($article_views > 70){echo $article_views * 3;} else {echo $article_views;} echo "&nbsp;";} if ($article_comments != "0"){?> <a href="index.php?lang=<?php echo AGet($_GET,'lang');?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;action=komentar&amp;id=<?php echo $article_id;?>&amp;modul=article&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>" target="_self"><?php echo _COM_COM.' '.$num2;?></a><?php  } if (($_SESSION['u_status'] == "user" || $_SESSION['u_status'] == "admin") && ($comments_log_comments < $num2)){$new_comments = ($num2 - $comments_log_comments); echo '&nbsp;';?> <a href="index.php?lang=<?php echo AGet($_GET,'lang');?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;action=komentar&amp;id=<?php echo $article_id;?>&amp;modul=article&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>" target="_self"><?php echo _COM_COM_NEW.' '.$new_comments;?></a><?php }?>)<br>
		<?php  if ($article_img_1 != ""){?><img src="<?php echo $url_articles.$article_img_1;?>" alt="" width="100" height="100" border="1" align="left" class="img_articles"><?php  }if ($article_link == "TRUE"){echo $article_perex;} else {echo $article_text;}?><br>
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="464" align="left">&nbsp;&nbsp;<?php  if ($article_source != ""){?><?php echo _ARTICLES_SOURCE;?>: <a href="http://<?php echo $article_source;?>" target="_self"><?php echo $article_source;?></a><?php }?></td>
			<td width="100" align="right"><?php  if ($article_ftext == 1){?><a href="index.php?action=clanek&amp;id=<?php echo $article_id;?>&amp;lang=<?php echo AGet($_GET,'lang');?>&amp;filter=<?php echo AGet($_GET,'filter');?>&amp;page_mode=<?php echo AGet($_GET,'page_mode');?>" target="_self"><?php echo _FULL_ARTICLE;?></a><?php  }?></td>
		</tr>
	</table>
	</div>
</div>