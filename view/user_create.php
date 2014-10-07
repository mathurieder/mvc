<?php
$path      = '/user/save';
$firstName = '';
$lastName  = '';
$email     = '';

if ($user !== null) {
	$path     .= '/' . $user->id;
	$firstName = $user->fname;
	$lastName  = $user->lname;
	$email     = $user->email;
}

?>

<form class="form-horizontal" action="<?= $path ?>" method="post">
	<div class="component" data-html="true">
		<div class="form-group">
		  <label class="col-md-2 control-label" for="textinput">Vorname</label>
		  <div class="col-md-4">
		  	<input id="fname" name="fname" type="text" value="<?= $firstName ?>" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="textinput">Nachname</label>
		  <div class="col-md-4">
		  	<input id="lname" name="lname" type="text" value="<?= $lastName ?>" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="textinput">Mail</label>
		  <div class="col-md-4">
		  	<input id="email" name="email" type="text" value="<?= $email ?>" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
	      <label class="col-md-2 control-label" for="textinput">&nbsp;</label>
		  <div class="col-md-4">
		    <input id="send" name="send" type="submit" class="btn btn-primary">
		  </div>
		</div>
	</div>
</form>
