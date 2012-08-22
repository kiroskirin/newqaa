<div class="subelements form">
<?php echo $this->Form->create('Subelement'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subelement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subelement_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subelement.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subelement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subelements'), array('action' => 'index')); ?></li>
	</ul>
</div>
