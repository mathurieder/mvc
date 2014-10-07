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

$form = new Form($path);

echo $form->text()->label('Vorname')->name('fname')->value($firstName);
echo $form->text()->label('Nachname')->name('lname')->value($lastName);
echo $form->text()->label('Mail')->name('email')->value($email);
echo $form->submit()->label('Benutzer erstellen')->name('send');

$form->end();
