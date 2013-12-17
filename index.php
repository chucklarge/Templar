<?php
require_once "Loader.php";

$t = new Templar();
$t->assign('title', 'Templar, the hottest templating engine');
$t->assign('heading', 'Imporant Words!');
$t->assign('staff', 'Rafe');
$t->assign('bcontent', 'this is big time');
$t->assign('ccontent', 'Derpa Derpa dooooooo');
//$c = $t->fetch('templates/derp.tpl');
$t->render('templates/derp.tpl');
