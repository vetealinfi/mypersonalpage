<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friendly Url'); ?></dt>
		<dd>
			<?php echo h($post['Post']['friendly_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($post['Post']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Img'); ?></dt>
		<dd>
			<?php echo h($post['Post']['main_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['User']['full_name'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Category']['name'], array('controller' => 'categories', 'action' => 'view', $post['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archivos'), array('controller' => 'archivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archivo'), array('controller' => 'archivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Archivos'); ?></h3>
	<?php if (!empty($post['Archivo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['Archivo'] as $archivo): ?>
		<tr>
			<td><?php echo $archivo['id']; ?></td>
			<td><?php echo $archivo['post_id']; ?></td>
			<td><?php echo $archivo['title']; ?></td>
			<td><?php echo $archivo['name']; ?></td>
			<td><?php echo $archivo['created']; ?></td>
			<td><?php echo $archivo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'archivos', 'action' => 'view', $archivo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'archivos', 'action' => 'edit', $archivo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'archivos', 'action' => 'delete', $archivo['id']), array(), __('Are you sure you want to delete # %s?', $archivo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Archivo'), array('controller' => 'archivos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Images'); ?></h3>
	<?php if (!empty($post['Image'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id']; ?></td>
			<td><?php echo $image['post_id']; ?></td>
			<td><?php echo $image['title']; ?></td>
			<td><?php echo $image['name']; ?></td>
			<td><?php echo $image['type']; ?></td>
			<td><?php echo $image['created']; ?></td>
			<td><?php echo $image['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), array(), __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
