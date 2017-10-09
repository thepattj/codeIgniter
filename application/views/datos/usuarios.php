<?php
	foreach ($usuario->result() as $user) {?>
		<ul>
			<li><?= $user->usuario; ?></li>
		</ul>
		
	<?php } ?>

</body>
</html>