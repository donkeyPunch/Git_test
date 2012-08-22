<div class="statuses view">
<h2><?php  echo __('Status');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($status['Status']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($status['Status']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($status['Status']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), null, __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages Users'), array('controller' => 'messages_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Messages User'), array('controller' => 'messages_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Messages Users');?></h3>
	<?php if (!empty($status['MessagesUser'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Receiver Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Message Id'); ?></th>
		<th><?php echo __('Sender Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($status['MessagesUser'] as $messagesUser): ?>
		<tr>
			<td><?php echo $messagesUser['id'];?></td>
			<td><?php echo $messagesUser['receiver_id'];?></td>
			<td><?php echo $messagesUser['status_id'];?></td>
			<td><?php echo $messagesUser['created'];?></td>
			<td><?php echo $messagesUser['modified'];?></td>
			<td><?php echo $messagesUser['message_id'];?></td>
			<td><?php echo $messagesUser['sender_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages_users', 'action' => 'view', $messagesUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages_users', 'action' => 'edit', $messagesUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages_users', 'action' => 'delete', $messagesUser['id']), null, __('Are you sure you want to delete # %s?', $messagesUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Messages User'), array('controller' => 'messages_users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
