<?php

$form = new Form('/user/save');

echo $form->text()->label('Vorname')->name('fname');
echo $form->text()->label('Nachname')->name('lname');
echo $form->text()->label('Mail')->name('email');
echo $form->submit()->label('Benutzer erstellen')->name('send');

$form->end();
