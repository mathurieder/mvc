<?php

$form = new Form('/users/save');

echo $form->text()->label('Vorname')->name('fname');
echo $form->text()->label('Nachname')->name('lname');
echo $form->text()->label('Mail')->name('email');
echo $form->submit()->label('User erstellen')->name('send');

$form->end();
