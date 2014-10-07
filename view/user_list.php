<article class="hreview open special">
	<?php if (empty($users)):?>
		<div class="dhd">
			<h1 class="item title">Hoopla! Keine User erfasst</h1>
		</div>
	<?php else:?>
		<?php foreach($users as $user):?>
			<div class="dhd">
				<h1 class="item title"> <?php echo $user->fname;?> <?php echo $user->lname;?></h1>
				<p class="description">In der Datenbank existiert ein User mit dem Namen <?php echo $user->lname;?> und dem Vornamen <?php echo $user->fname;?>. Dieser hat zudem die EMail-Adresse: <?php echo $user->email;?></p> 
				<p>
					<a title="Erfahre mehr" href="/Users/Create/<?php echo $user->id;?>">Bearbeite <span class="unicon">☞</span></a>
				</p>
			</div>
		<?php endforeach?>
	<?php endif ?>
</article>