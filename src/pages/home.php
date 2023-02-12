<?php

$name = $request->query->get('name', 'World');
?>

<h1>Hello <?= $name; ?></h1>