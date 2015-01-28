<div class="specificCards view">
<h2><?php echo __('Specific Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($specificCard['SpecificCard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
			<?php echo $this->Html->link($specificCard['Edition']['name'], array('controller' => 'editions', 'action' => 'view', $specificCard['Edition']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($specificCard['Card']['name'], array('controller' => 'cards', 'action' => 'view', $specificCard['Card']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist'); ?></dt>
		<dd>
			<?php echo h($specificCard['SpecificCard']['artist']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flavour Text'); ?></dt>
		<dd>
			<?php echo h($specificCard['SpecificCard']['flavour_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($specificCard['SpecificCard']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Specific Card'), array('action' => 'edit', $specificCard['SpecificCard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Specific Card'), array('action' => 'delete', $specificCard['SpecificCard']['id']), array(), __('Are you sure you want to delete # %s?', $specificCard['SpecificCard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specific Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specific Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Editions'), array('controller' => 'editions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edition'), array('controller' => 'editions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Prices'), array('controller' => 'card_prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Price'), array('controller' => 'card_prices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Card Prices'); ?></h3>
	<?php if (!empty($specificCard['CardPrice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Card Page Id'); ?></th>
		<th><?php echo __('Specific Card Id'); ?></th>
		<th><?php echo __('Nm'); ?></th>
		<th><?php echo __('Ex'); ?></th>
		<th><?php echo __('V'); ?></th>
		<th><?php echo __('Vg'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($specificCard['CardPrice'] as $cardPrice): ?>
		<tr>
			<td><?php echo $cardPrice['id']; ?></td>
			<td><?php echo $cardPrice['card_page_id']; ?></td>
			<td><?php echo $cardPrice['specific_card_id']; ?></td>
			<td><?php echo $cardPrice['nm']; ?></td>
			<td><?php echo $cardPrice['ex']; ?></td>
			<td><?php echo $cardPrice['v']; ?></td>
			<td><?php echo $cardPrice['vg']; ?></td>
			<td><?php echo $cardPrice['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'card_prices', 'action' => 'view', $cardPrice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'card_prices', 'action' => 'edit', $cardPrice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'card_prices', 'action' => 'delete', $cardPrice['id']), array(), __('Are you sure you want to delete # %s?', $cardPrice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card Price'), array('controller' => 'card_prices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
