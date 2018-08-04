<div class="container mb-100 pt-30">
	<div class="row">
		<div class="col-xl-10 offset-1">
			<div class="title-3">Опыт работы</div>
			<?php require ROOT . "templates/_parts/_success.tpl";?>
			<?php foreach ($jobs as $job) {
				include	ROOT."templates/about/_card-job-edit.tpl";
			} ?>
			<div class="title-3">Добавить новое место работы</div>
			<form action="<?=HOST?>edit-jobs" method="POST">
				<div class="user-message">

					<div class="fieldset__title">Период</div>
					<input name="period" class="input mb-15" placeholder="Введите даты начала и окончания работы" value="<?=@$_POST['period'] ?>" />

					<div class="fieldset__title">Название должности</div>
					<input name="title" class="input mb-15" placeholder="Введите название должности" value="<?=@$_POST['title'] ?>" />

					<div class="fieldset__title">Описание работы, должностные обязанности, достигнутые результаты</div>
					<textarea name="description" class="textarea mb-20" rows="5" placeholder="Напишите интересное краткое содержательное описание">
						<?=@$_POST['description'] ?>
					</textarea>
					<input name="newJob" type="submit" class="button button--save" value="Добавить">
				</div>
			</form>
		</div>
	</div>
</div>
