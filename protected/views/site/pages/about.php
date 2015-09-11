<h1>About my blog</h1>

<div class="about">
	
	<div class="content">
		<?php if ($model->image!=''){ ?>
	<img src="/wwwroot/blog/uploads/<?php echo $model->image ?>" width="400">
	<?php } ?>
		
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $model->content;
			$this->endWidget();
		?>
	</div>
	
</div>


