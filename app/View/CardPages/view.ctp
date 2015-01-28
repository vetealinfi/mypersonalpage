<div class="cardPages view">
<h2><?php echo __('Card Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cardPage['CardPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cardPage['CardPage']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Page'), array('action' => 'edit', $cardPage['CardPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Page'), array('action' => 'delete', $cardPage['CardPage']['id']), array(), __('Are you sure you want to delete # %s?', $cardPage['CardPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Page'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Prices'), array('controller' => 'card_prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Price'), array('controller' => 'card_prices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Card Prices'); ?></h3>
	<?php if (!empty($cardPage['CardPrice'])): ?>
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
	<?php foreach ($cardPage['CardPrice'] as $cardPrice): ?>
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
