<div class="publications view">
<h2><?php echo __('Publication'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($publication['User']['full_name'], array('controller' => 'users', 'action' => 'view', $publication['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publication'), array('action' => 'edit', $publication['Publication']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Publication'), array('action' => 'delete', $publication['Publication']['id']), array(), __('Are you sure you want to delete # %s?', $publication['Publication']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Publications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
