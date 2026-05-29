<?php
$file = $file ?? null;
if (!$file)
    return;

$thumb = $file->resize($width ?? 1200, null);
$class = $class ?? null;
$loading = $loading ?? 'lazy';
?>

<img src="<?= $thumb->url() ?>" <?php if ($thumb->width()): ?> width="<?= $thumb->width() ?>" <?php endif ?><?php if ($thumb->height()): ?> height="<?= $thumb->height() ?>" <?php endif ?> loading="<?= $loading ?>" <?php if ($class): ?> class="<?= $class ?>" <?php endif ?> alt="<?= $alt ?? '' ?>">