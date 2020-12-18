$(function() {

	var dTable = $('#tResult').DataTable({
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

	/*const dataTableInstatce = new mdb.Database(document.getElementById('datatable'), {
		columns: [

		],
	})*/


	$("#insertUrl").keydown(function(){
		$("#insertUrl").removeClass("is-invalid").removeClass("is-valid");
	});

	if(window.location.pathname.includes("/statismaster/")){
		$("#nav-statis-tab").addClass("active");
		$("#nav-home-tab").removeClass("active");
	}
	else{
		$("#nav-home-tab").addClass("active");
		$("#nav-statis-tab").removeClass("active");
	}
	//Подписываемся на событие отправки формы
	$("#urlForm").submit(function( event ) {
		//Отменяем стандартное поведение формы
		event.preventDefault();
	  	//Собираем данные с формы в формате FormData
	  	let formData = new FormData();
	  	
	  	//Переделываем адрес в домен
	  	var str = $(this).find("#insertUrl").val();
	  	var match;
	  	var result;
	  	if (match = str.match(/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n\?\=]+)/im)) {
	  		result = match[1]
	  		if (match = result.match(/^[^\.]+\.(.+\..+)$/)) {
	  			result = match[1]
	  		}
	  	}
	  	formData.append('searchUrl', result);

		//Отправляем ajax запрос в getStat.php
		$.ajax({
			//метод отправки
			type: "POST",
			//куда отправляем запрос
			url: "../ajax/getStat.php",
			//что мы отправляем
			data: formData,
			contentType: false,
			processData: false,
			//в каком формате получаем ответ
			//dataType:"json",

			success: function(response, status){
				//console.log(response, status);
				if(response.indexOf("LI_month_vis")!=-1){

					$("#insertUrl").removeClass("is-invalid").addClass("is-valid");
					var timeResponse = new Date();
					var nameSite = response.slice(response.lastIndexOf("LI_site"), response.indexOf(`LI_month_hit`)).replace("LI_site = '",'').replace("'", '').replace(";", '');
					var visMonth = response.slice(response.lastIndexOf("LI_month_vis"), response.indexOf(`LI_week_hit`)).replace(/[^\d]/g, '');
					var visDay = response.slice(response.lastIndexOf("LI_today_vis"), response.indexOf(`LI_online_hit`)).replace(/[^\d]/g, '');
					var visOnline = response.slice(response.lastIndexOf("LI_online_vis")).replace(/[^\d]/g, '');
					console.log(visMonth, visDay, visOnline);

					//начинаем строить таблицу
					dTable.row.add([timeResponse.toLocaleDateString()+ " " + timeResponse.toLocaleTimeString(), nameSite, visMonth, visDay, visOnline]).draw(false);
					/*var tableBuild =$('<tr>' + '<th scope="col">'+timeResponse.toLocaleDateString()+' '+ timeResponse.toLocaleTimeString()+'</th>' +
						'<th scope="col">'+nameSite+'</th>' + '<th scope="col">'+visMonth+'</th>' + '<th scope="col">'+visDay+'</th>'
						+'<th scope="col">'+visOnline+'</th>' +
						'</tr>');
						$(".tableResult tbody" ).append(tableBuild);*/

					//console.log(response.slice(response.lastIndexOf("LI_month_vis"), response.indexOf(`LI_week_hit`)).replace(/[^\d]/g, ''));

				}
				if(response.includes("LI_error")){
					console.log(response);
					$("#insertUrl").removeClass("is-valid").addClass("is-invalid").focus();
					if(response.includes("Unregistered site")){
						showModalMessage("Неверный URL ಠ_ಠ");
					}
					else
						if(response.includes("access denied")){
							showModalMessage("Доступ к статистике запрещен (▀̿Ĺ̯▀̿ ̿)");
						}
						else {
							showModalMessage("Что-то пошло не так... (ノಠ益ಠ)ノ彡┻━┻");
						}
					// error = response.slice(response.lastIndexOf("LI_error")).replace("LI_error = ",'').replace("'", '');
					
				}
			}
		});

	});
	function showModalMessage(message){
		var myModal = new bootstrap.Modal(document.getElementById('formModal1'), {
			keyboard: false
		})
		$("#formModalTitle").html(message);
		myModal.toggle();
	}
});



