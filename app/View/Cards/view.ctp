<div class="cards view">
<h2><?php echo __('Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($card['Card']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
			<?php echo h($card['Card']['edition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cast'); ?></dt>
		<dd>
			<?php echo h($card['Card']['cast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Power'); ?></dt>
		<dd>
			<?php echo h($card['Card']['full_power']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Type'); ?></dt>
		<dd>
			<?php echo h($card['Card']['full_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rarity'); ?></dt>
		<dd>
			<?php echo h($card['Card']['rarity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oracle Text'); ?></dt>
		<dd>
			<?php echo h($card['Card']['oracle_text']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['id']), array(), __('Are you sure you want to delete # %s?', $card['Card']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specific Cards'), array('controller' => 'specific_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specific Card'), array('controller' => 'specific_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Specific Cards'); ?></h3>
	<?php if (!empty($card['SpecificCard'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Edition Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Artist'); ?></th>
		<th><?php echo __('Flavour Text'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($card['SpecificCard'] as $specificCard): ?>
		<tr>
			<td><?php echo $specificCard['id']; ?></td>
			<td><?php echo $specificCard['edition_id']; ?></td>
			<td><?php echo $specificCard['card_id']; ?></td>
			<td><?php echo $specificCard['artist']; ?></td>
			<td><?php echo $specificCard['flavour_text']; ?></td>
			<td><?php echo $specificCard['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'specific_cards', 'action' => 'view', $specificCard['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'specific_cards', 'action' => 'edit', $specificCard['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'specific_cards', 'action' => 'delete', $specificCard['id']), array(), __('Are you sure you want to delete # %s?', $specificCard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Specific Card'), array('controller' => 'specific_cards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
