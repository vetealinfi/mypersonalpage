<div class="cardPrices view">
<h2><?php echo __('Card Price'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cardPrice['CardPrice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardPrice['CardPage']['name'], array('controller' => 'card_pages', 'action' => 'view', $cardPrice['CardPage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specific Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardPrice['SpecificCard']['card_id'], array('controller' => 'specific_cards', 'action' => 'view', $cardPrice['SpecificCard']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nm'); ?></dt>
		<dd>
			<?php echo h($cardPrice['CardPrice']['nm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ex'); ?></dt>
		<dd>
			<?php echo h($cardPrice['CardPrice']['ex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('V'); ?></dt>
		<dd>
			<?php echo h($cardPrice['CardPrice']['v']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vg'); ?></dt>
		<dd>
			<?php echo h($cardPrice['CardPrice']['vg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cardPrice['CardPrice']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Price'), array('action' => 'edit', $cardPrice['CardPrice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Price'), array('action' => 'delete', $cardPrice['CardPrice']['id']), array(), __('Are you sure you want to delete # %s?', $cardPrice['CardPrice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Prices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Price'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Pages'), array('controller' => 'card_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Page'), array('controller' => 'card_pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specific Cards'), array('controller' => 'specific_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specific Card'), array('controller' => 'specific_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
