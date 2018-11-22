<?php
if(!defined("IN_ESOTALK"))exit;?>
<fieldset id='forgot-pass'>
<legend><?php echo $language["Forgot your password"];?></legend>
<?php
 if(!$this->setPassword):echo $this->esoTalk->htmlMessage("forgotPassword");?>

<form id='forgot-password' action='<?php echo makeLink("forgot-password");?>' method='post'>
<ul class='form'>
	
<li><label><?php echo $language["Enter your email"];?></label>
<input type='text' autocomplete='email' value='' name='email' id='email' class='text'/></li>

<li><label id='lbl-fgps'></label> <?php echo $this->esoTalk->skin->button(array("value"=>$language["Recover password"]));?></li>

</ul>
</form>

<?php
 else:echo $this->esoTalk->htmlMessage("setNewPassword");?>

<form id='forgot-pass-reset' action='<?php echo makeLink("forgot-password",@$_GET["q2"]);?>' method='post'>
<ul class='form'>

<li><label><?php echo $language["New password"];?></label>
<input type='password' autocomplete='new-password' value='' name='password' id='password' class='text'/>
<?php if(isset($this->errors["password"])):echo $this->esoTalk->htmlMessage($this->errors["password"]);endif;?></li>

<li><label><?php echo $language["Confirm password"];?></label>
<input type='password' autocomplete='new-password' value='' name='confirm' id='confirm' class='text'/>
<?php if(isset($this->errors["confirm"])):echo $this->esoTalk->htmlMessage($this->errors["confirm"]);endif;?></li>

<li><label id='lbl-fgcf'></label>
<?php echo $this->esoTalk->skin->button(array("name"=>"changePassword","value"=>$language["Change password"]));?></li>

</ul>
</form>

<?php endif;?>
</fieldset>
