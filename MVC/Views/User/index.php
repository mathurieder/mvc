<?php if (empty($users)) { ?>
	<div class="card">
		<div class="card-header">Info</div>
		<div class="card-body">
			<p class="card-text">Hoopla! Keine User gefunden.</p>
		</div>
	</div>
<?php } else { ?>
	<?php foreach ($users as $user) { ?>
    	<div class="card">
    		<div class="card-header">
                <?= $user->firstName;?> <?= $user->lastName;?>
              </div>
    		<div class="card-body">
    			<p class="description">In der Datenbank existiert ein User mit dem Namen <?= $user->firstName;?> <?= $user->lastName;?>. Dieser hat die E-Mail-Adresse: <a
    					href="mailto:<?= $user->email;?>"><?= $user->email;?></a>
    			</p>
    			<p>
    				<a title="Löschen" href="/user/delete?id=<?= $user->id ?>">Löschen</a>
    			</p>
    		</div>
    	</div>
    	<br>
	<?php } ?>
<?php } ?>

