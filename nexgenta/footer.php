			<div id="navigation">
			<?php if(isset($site_nav))
			{
				echo '<div id="site-nav"><ul>';
				$first = true;
				foreach($site_nav as $entry) 
				{
					echo '<li' . (isset($entry['id']) ? ' id="' . _e($entry['id']) . '"' : '') . ($first ? ' class="first"' : '') . '><a href="' . htmlspecialchars($entry['link']) . '">' . htmlspecialchars($entry['name']) . '</a></li>';
				}
				echo '</ul></div>';
			}
			?>
			<?php if(isset($global_nav) && is_array($global_nav))
			{
				echo '<ul id="global-nav">';
				$first = true;
				foreach($global_nav as $entry) 
				{
					echo '<li' . ($first ? ' class="first"' : '') . '><a href="' . htmlspecialchars($entry['link']) . '">' . htmlspecialchars($entry['name']) . '</a></li>';
				}
				echo '</ul>';
			}
			?>
			</div>
		</div>
		<div id="footer">
			<p>Copyright © <?php echo strftime('%Y'); ?>. <abbr title="Made in Scotland">Dèanta ann an Alba</abbr>.<?php if(isset($credits)) echo ' ' . $credits; ?></p>
		</div>
		<?php if(defined('URCHIN_ACCOUNT')) { ?>
		<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo URCHIN_ACCOUNT; ?>");
pageTracker._trackPageview();
} catch(err) {}</script><?php
		} ?>
	</body>
</html>