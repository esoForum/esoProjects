<?php
if(!defined("IN_ESOTALK"))exit;?>
<?php $this->callHook("beforeRenderTagCloud");?>

<div id='tagArea'>
<p id='tags'><?php
ksort($this->tagCloud);foreach($this->tagCloud as $k=>$v){echo "<a href='".makeLink("search","?q2=".urlencode(desanitize((!empty($_SESSION["search"])?"{$_SESSION["search"]} + ":"")."{$language["gambits"]["tag:"]}$k")))."' class='$v'>".str_replace(" ","&nbsp;",$k)."</a> ";}?></p>

<?php $this->callHook("afterRenderTagCloud");?>

<p id='gambits'><?php
ksort($this->gambitCloud);foreach($this->gambitCloud as $k=>$v){echo "<a href='".makeLink("search","?q2=".urlencode(desanitize((!empty($_SESSION["search"])?"{$_SESSION["search"]} + ":"").$k)))."' class='$v'>".str_replace(" ","&nbsp;",$k)."</a> ";}?></p>
</div>

<?php $this->callHook("beforeRenderSearchForm");?>

<?php include $this->esoTalk->skin->getView("searchForm.inc.php");?> 

<?php $this->callHook("afterRenderSearchForm");?>

<div id='searchResults'>
<?php include $this->esoTalk->skin->getView("searchResults.inc.php");?>
</div>

<?php $this->callHook("afterRenderSearchResults");?>

<script type='text/javascript'>
// <![CDATA[
Search.currentSearch = '<?php if(isset($_SESSION["search"]))echo addslashes(desanitize($_SESSION["search"]));?>';
Search.init();
// ]]>
</script>
