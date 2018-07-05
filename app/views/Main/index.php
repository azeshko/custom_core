<h1 style="color:blue">Hello, World!</h1>
<h2 style="color:darkmagenta">Custom core</h2>
<p><?=$name;?></p>
<p><?=$age?></p>
<?php debug($names); ?>
<?php foreach ($posts as $post):?>
<h3><?=$post->title;?></h3>
<?php endforeach;?>

