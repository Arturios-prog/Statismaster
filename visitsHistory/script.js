$(function(){

	var dTable = $('#tHistoryResult').DataTable({
		'stateSave': true,
		'language': {
			'paginate': {
				'next': 'след.',
				'previous': 'пред.',
			},
			'search': 'Поиск',
			"emptyTable": 'Записи отсутствуют (͡ ͡° ͜ つ ͡͡°)',
			'zeroRecords': 'Ничего не найдено ლ(ಠ益ಠლ)',
			"infoEmpty": 'Показано от 0 до 0 из 0 записей',
			"info": 'Показано от _START_ до _END_ из _TOTAL_ записей',
			"lengthMenu": 'Показано _MENU_ записей'
		}

	});


	$.ajax({
		type:"POST",


		url: "../php/connectSQL.php",
		//в каком формате получаем ответ
		dataType:"json",

		success:function(response){
			for(let key in response){
				console.log(response[key].request_time);
				dTable.row.add([response[key].request_time, response[key].site_name, response[key].visits_month,
				 response[key].visits_day, response[key].visits_day]).draw(false);
			}

			//начинаем строить таблицу
			

		}
	})
});