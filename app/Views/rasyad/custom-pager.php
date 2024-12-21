<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);

?>

<div class="d-flex justify-content-end">
	<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
		<ul class="pagination">
			<?php if ($pager->hasPrevious()) : ?>
				<li>
					<a class="btn btn-primary btn-small" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
						<span aria-hidden="true"><?= lang('Pager.first') ?></span>
					</a>
				</li>&nbsp;
				<li>
					<a class="btn btn-primary btn-small" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
						<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
					</a>
				</li>&nbsp;
			<?php endif ?>

			<?php foreach ($pager->links() as $link) : ?>
				<li <?= $link['active'] ? 'class="active"' : '' ?>>
					<a href="<?= $link['uri'] ?>" class="btn btn-primary btn-small">
						<?= $link['title'] ?>
					</a>
				</li>&nbsp;
			<?php endforeach ?>

			<?php if ($pager->hasNext()) : ?>
				<li>
					<a class="btn btn-primary btn-small" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
						<span aria-hidden="true"><?= lang('Pager.next') ?></span>
					</a>
				</li>&nbsp;
				<li>
					<a class="btn btn-primary btn-small" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
						<span aria-hidden="true"><?= lang('Pager.last') ?></span>
					</a>
				</li>&nbsp;
			<?php endif ?>
		</ul>
	</nav>
</div>