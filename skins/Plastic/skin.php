<?php
// This file is part of esoForum for Projects.
// All non-modified code is property of Simon and Toby Zerner.

// Plastic skin file.

if (!defined("IN_ESOTALK")) exit;

class Plastic extends Skin {

var $name = "Plastic";
var $version = "1.0";
var $author = "esoForum team";
var $numberOfColors = 27;

// Add stylesheets and a favicon to the page header.
function init()
{
	global $config;
	$this->esoTalk->addCSS("skins/{$config["skin"]}/styles.css");
	$this->esoTalk->addCSS("skins/{$config["skin"]}/ie6.css", "ie6");
	$this->esoTalk->addCSS("skins/{$config["skin"]}/ie7.css", "ie7");
	$this->esoTalk->addToHead("<link rel='shortcut icon' type='image/ico' href='skins/{$config["skin"]}/favicon.ico'/>");
}

// Generate button HTML.
function button($attributes)
{
	$class = $id = $style = ""; $attr = " type='submit'";
	foreach ($attributes as $k => $v) {
		if ($k == "class") $class = " $v";
		elseif ($k == "id") $id = " id='$v'";
		elseif ($k == "style") $style = " style='$v'";
		else $attr .= " $k='$v'";
	}
	return "<span class='button$class'$id$style><input$attr/></span>";
}

}

?>
