<? include 'header.php'; ?>


<div class="row row-cols-1 row-cols-md-2 g-4">
	<div class="col">
		<div class="card">
			<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
				<img
				src="/assets/pictures/img_main.png"
				class="card-img-top"
				alt="..."
				/>
				<a href="/">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
				</a>
			</div>
			<div class="card-body">
				<h5 class="card-title">С чего начать</h5>
				<p class="card-text">
					На данной странице изображена главная информация, касающаяся курсовой работы.
					Эта информация поможет пользователям изучить работу аддитивного микропортала по статистике посещения интернет-ресурсов.
				</p>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="card">
			<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
				<img
				src="/assets/pictures/img_stat1.png"
				class="card-img-top"
				alt="..."
				/>
				<a href="/statismaster/">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
				</a>
			</div>
			<div class="card-body">
				<h5 class="card-title">Страница "Проверка посещаемости"</h5>
				<p class="card-text">
					Данная страница позволяет произвести непосредственную работу со службами, отвечающими за сбор статистики посещения сайтов.
					В контексте данной курсовой работы, к таким службам относятся: Liveinternet.ru.
				</p>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="card">
			<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
				<img
				src="/assets/pictures/img_stat2.png"
				class="card-img-top"
				alt="..."
				/>
				<a href="/statismaster/">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
				</a>
			</div>
			<div class="card-body">
				<h5 class="card-title">Как работает "Проверка посещаемости"</h5>
				<p class="card-text">
					Пользователю предоставляется очень простой функционал: В строку с пометкой "URL" ему необходимо
					внести адрес интересующей его страницы или же имя домена.
					<ul>
						<li><a>Пример ввода домена: liveinternet.ru</a></li>
						<li><a>Пример ввода адреса: https://www.liveinternet.ru</a></li>
					</ul>
					Также важным аспектом является возможность сортировки результатов запросов, позволяющие сделать выборку по названию,
					количеству посещений за месяц, за день, а также по количеству человек онлайн на момент запроса.
					Важно понимать! При обновлении страницы, таблица с результатами посещаемости очищается, дабы избавить страницы от лишей загруженности. Тем не менее, пользователь всегда может просмотреть историю результатов запроса на странице "История проверок"
				</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card">
			<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
				<img
				src="/assets/pictures/img_history1.png"
				class="card-img-top"
				alt="..."
				/>
				<a href="/visitsHistory/">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
				</a>
			</div>
			<div class="card-body">
				<h5 class="card-title">Страница "История проверок"</h5>
				<p class="card-text">
					На данной странице пользователь может посмотреть свою историю запросов, результаты которых были получены в виде таблицы.
					Здесь пользователю предоставляется функционал сортировки по убыванию и возрастанию, а также функция поиска по любым из полей таблицы. Вся информация хранится в базе данных.
				</p>
			</div>
		</div>
	</div>
</div>
<? include 'footer.php'; ?>