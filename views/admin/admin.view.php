<?php
// This file is part of esoForum for Projects.
// All non-modified code is property of Simon and Toby Zerner.

// Conversation view: displays conversation header, pagination, posts, and reply box.

if (!defined("IN_ESOTALK")) exit;
?>

<div id='admin'>
	
		<ul class='menu'>
			
			<?php foreach ($this->sections as $k => $v): ?>
			<li<?php if ($this->section == $k): ?> class='active'<?php endif; ?>><a href='<?php echo makeLink("admin", $k); ?>'><?php echo $v["title"]; ?></a></li>
			<?php endforeach; ?>
		</ul>
	
	<div class='inner'>
		<?php include $this->esoTalk->skin->getView($this->subView); ?>
		
	</div>
	
	<div class='clear'></div>
	
</div>
