<div class="editions view">
<h2><?php echo __('Edition'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($edition['Edition']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($edition['Edition']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($edition['Edition']['sigla']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Edition'), array('action' => 'edit', $edition['Edition']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Edition'), array('action' => 'delete', $edition['Edition']['id']), array(), __('Are you sure you want to delete # %s?', $edition['Edition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Editions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edition'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specific Cards'), array('controller' => 'specific_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specific Card'), array('controller' => 'specific_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Specific Cards'); ?></h3>
	<?php if (!empty($edition['SpecificCard'])): ?>
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
	<?php foreach ($edition['SpecificCard'] as $specificCard): ?>
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
