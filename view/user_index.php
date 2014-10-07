<article class="hreview open special">
	<?php if (empty($users)):?>
		<div class="dhd">
			<h1 class="item title">Hoopla! Keine User erfasst</h1>
		</div>
	<?php else:?>
		<?php foreach($users as $user):?>
			<div class="panel panel-default">
				<div class="panel-heading"><?= $user->fname;?> <?= $user->lname;?></div>
				<div class="panel-body">
					<p class="description">In der Datenbank existiert ein User mit dem Namen <?= $user->lname;?> und dem Vornamen <?= $user->fname;?>. Dieser hat zudem die EMail-Adresse: <?= $user->email;?></p>
					<p>
						<a title="Erfahre mehr" href="/user/create/<?= $user->id;?>">Bearbeiten <span>☞</span></a>
					</p>
				</div>
			</div>
		<?php endforeach?>
	<?php endif ?>
</article>
