<?php
// This file is part of esoForum for Projects.
// All non-modified code is property of Simon and Toby Zerner.

// Post controller: finds the conversation and position of a given post, and redirects there.

if (!defined("IN_ESOTALK")) exit;

class post extends Controller {

function init()
{
	// Permanently redirected to the conversation.
	header("HTTP/1.1 301 Moved Permanently");
	
	if (!empty($_GET["q2"]) and $postId = (int)$_GET["q2"]) {
		
		global $config;
		
		// Get the conversationId, slug, and the number of posts in the conversation before the post we're redirecting
		// to (ie. the position of this post within its conversation.)
		$result = $this->esoTalk->db->query("SELECT c.conversationId, c.slug,
			(SELECT COUNT(*) FROM {$config["tablePrefix"]}posts p2 WHERE p2.conversationId=c.conversationId AND time<p.time)
			FROM {$config["tablePrefix"]}posts p LEFT JOIN {$config["tablePrefix"]}conversations c USING (conversationId)
			WHERE p.postId=$postId");
		if (!$this->esoTalk->db->numRows($result)) redirect("");
		list($conversationId, $slug, $startFrom) = $this->esoTalk->db->fetchRow($result);
		$startFrom = max(0, floor($startFrom - $config["postsPerPage"] / 2));
					
		// Redirect!
		redirect($conversationId, $slug, "?start=$startFrom", "#p$postId");
	}
	
	// No post ID given? Back home we go...
	redirect("");
}

}

?>
