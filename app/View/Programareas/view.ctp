<div class="programareas view">
<h2><?php  echo __('Programarea');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($programarea['Programarea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($programarea['Programarea']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($programarea['Programarea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($programarea['Programarea']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Programarea'), array('action' => 'edit', $programarea['Programarea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Programarea'), array('action' => 'delete', $programarea['Programarea']['id']), null, __('Are you sure you want to delete # %s?', $programarea['Programarea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Programareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programarea'), array('action' => 'add')); ?> </li>
	</ul>
</div>
