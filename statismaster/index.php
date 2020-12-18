<? include '../header.php'; ?>

<div class="statisForm container">
	<form id="urlForm">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label textDescribe">Введите домен или адрес сайта</label>
			<input type="text" required placeholder="URL" class="form-control textDescribe" id="insertUrl" aria-describedby="emailHelp">
			<div class="form-text textDescribe" >В приведенной ниже таблице будет отображена статистика посещения</div>
		</div>
		<button type="submit" class="btn btn-primary">Проверка</button>
	</form>
</div>



<div class="tableResult container" >
	<table id="tResult" class="table table-striped table-bordered">
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

