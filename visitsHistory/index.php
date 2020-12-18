<? include '../header.php'; ?>
<script type="text/javascript" src="script.js"></script>
<button id ="deleteAll" type="submit" class="btn btn-primary btnDelete">Удалить данные</button>

<div class="tableResult container marginTable" >
	<table id="tHistoryResult" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Время проверки</th>
				<th >Название сайта</th>
				<th >Количество посещений за месяц</th>
				<th >Количество посещений за день</th>
				<th >Пользователей онлайн</th>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table> 
</div>

<? include '../footer.php'; ?>