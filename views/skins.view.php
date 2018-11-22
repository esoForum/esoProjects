<?php
if(!defined("IN_ESOTALK"))exit;?>

<?php if(count($this->skins)):?>

<fieldset id='skins'>
<legend><?php echo $language["Installed skins"];?></legend>
<ul>

<?php foreach($this->skins as $k=>$skin):?>
<li<?php if($skin["selected"]):?> class='enabled'<?php endif;?>>
<a href='<?php echo makeLink("skins",$k,"?token={$_SESSION["token"]}");?>'>
<span class='preview'>
<?php if($skin["preview"]):?><img src='skins/<?php echo $k;?>/<?php echo $skin["preview"];?>' alt='<?php echo $skin["name"];?>'/>
<?php else:?><span><?php echo $language["No preview"];?></span>
<?php endif;?>
</span>
<strong><?php echo $skin["name"];?></strong> <small><?php printf($language["version"],$skin["version"]);?> <?php printf($language["author"],$skin["author"]);?></small>
</a>
</li>
<?php endforeach;?>

</ul>
</fieldset>

<?php else:?>
<?php echo $this->esoTalk->htmlMessage("noSkinsInstalled");?>
<?php endif;?>

<?php ?>
<fieldset id='addSkin'>
<legend><?php echo $language["Add a new skin"];?></legend>
<?php echo $this->esoTalk->htmlMessage("downloadSkins","https://esotalk.net/skins");?>
<form action='<?php echo makeLink("skins");?>' method='post' enctype='multipart/form-data'>
<input type='hidden' name='token' value='<?php echo $_SESSION["token"];?>'/>
<ul class='form'>
<li><label><?php echo $language["Upload a skin"];?></label> <input name='installSkin' type='file' class='text' size='20'/></li>
<li><label></label> <?php echo $this->esoTalk->skin->button(array("value"=>$language["Add skin"]));?></li>
</ul>
</form>
</fieldset>
