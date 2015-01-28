<div class="archivos view">
<h2><?php echo __('Archivo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($archivo['Archivo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($archivo['Post']['title'], array('controller' => 'posts', 'action' => 'view', $archivo['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($archivo['Archivo']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($archivo['Archivo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($archivo['Archivo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($archivo['Archivo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Archivo'), array('action' => 'edit', $archivo['Archivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Archivo'), array('action' => 'delete', $archivo['Archivo']['id']), array(), __('Are you sure you want to delete # %s?', $archivo['Archivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Archivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archivo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
