<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}

	$URL = path("bookmarks/". $bookmark["ID_Bookmark"] ."/". $bookmark["Slug"], FALSE, $bookmark["Language"]);
?>

<div class="bookmarks">
	<h2>
		<?php echo getLanguage($bookmark["Language"], TRUE); ?> <a href="<?php echo path("bookmarks/visit/". $bookmark["ID_Bookmark"], FALSE, $bookmark["Language"]); ?>" target="_blank" title="<?php echo quotes($bookmark["Title"]); ?>"><?php echo quotes($bookmark["Title"]); ?></a>
	</h2>

	<span class="small italic grey">
		<?php 
			echo __("Published") ." ". howLong($bookmark["Start_Date"]) ." ". __("by") .' <a title="'. $bookmark["Author"] .'" href="'. path("bookmarks/author/". $bookmark["Author"]) .'">'. $bookmark["Author"] .'</a> '; 
			 
			if($bookmark["Tags"] !== "") {
				echo __("in") ." ". exploding($bookmark["Tags"], "bookmarks/tag/");
			}
		?>			
		<br />

		<?php 
			echo '<span class="bold">'. __("Likes") .":</span> ". (int) $bookmark["Likes"]; 
			echo ' <span class="bold">'. __("Dislikes") .":</span> ". (int) $bookmark["Dislikes"];
			echo ' <span class="bold">'. __("Views") .":</span> ". (int) $bookmark["Views"];
		?>
	</span>

	<?php echo display(social($URL, $bookmark["Title"], FALSE), 4); ?>


	<p class="justify">				
		<?php 
			echo stripslashes($bookmark["Description"]); 
		?> 
	</p>

	<br />

	<h3>
		<a href="<?php echo path("bookmarks/visit/". $bookmark["ID_Bookmark"]); ?>" target="_blank" title="<?php echo $bookmark["Title"]; ?>"><?php echo __("Visit Bookmark"); ?></a>
	</h3>

	<?php
		if(SESSION("ZanUser")) {
	?>
			<p class="small italic">
				<?php  echo like($bookmark["ID_Bookmark"], "bookmarks", $bookmark["Likes"]) ." ". dislike($bookmark["ID_Bookmark"], "bookmarks", $bookmark["Dislikes"]) ." ". report($bookmark["ID_Bookmark"], "bookmarks"); ?>
			</p>
	<?php
		}
	?>

	<br />

	<?php
		echo display('<p>
                        <script type="text/javascript">
                            google_ad_client = "ca-pub-4006994369722584";
                            /* CodeJobs.biz */
                            google_ad_slot = "1672839256";
                            google_ad_width = 728;
                            google_ad_height = 90;
                            </script>
                            <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                    </p>', 4);
	?>
	<p>
		<?php echo fbComments($URL); ?>
	</p>
	
	<p>
		<a href="<?php echo path("bookmarks"); ?>">&lt;&lt; <?php echo __("Go back"); ?></a>
	</p>
</div>
