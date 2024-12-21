<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination">
		<?php if ($pager->hasPrevious()) : ?>
			<li>
				<a class="btn btn-primary gradient" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
					<span aria-hidden="true"><?= lang('Pager.first') ?></span>
				</a>
			</li>&nbsp;
			<li>
				<a class="btn btn-primary gradient" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
					<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
				</a>
			</li>&nbsp;
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li <?= $link['active'] ? 'class="active"' : '' ?>>
				<a href="<?= $link['uri'] ?>" class="btn btn-primary gradient">
					<?= $link['title'] ?>
				</a>
			</li>&nbsp;
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li>
				<a class="btn btn-primary gradient" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true"><?= lang('Pager.next') ?></span>
				</a>
			</li>&nbsp;
			<li>
				<a class="btn btn-primary gradient" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
					<span aria-hidden="true"><?= lang('Pager.last') ?></span>
				</a>
			</li>&nbsp;
		<?php endif ?>
	</ul>
</nav>


<style>
	.gradient {
		color: #fff;
		background-image: linear-gradient(to right,
				#1171ef 0%,
				#11cdef 100%);
		background-size: 120% auto;
		transition: all 0.25s;
		border-radius: 8px;
		height: auto;
		width: auto;
		padding: 4px 12px;
		display: flex;
		align-items: center;
		justify-content: center;
		text-overflow: ellipsis;
		overflow: hidden;
	}

	.gradient:hover {
		background-position: right center;
	}
</style>