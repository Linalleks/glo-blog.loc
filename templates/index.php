<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Главная страница</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header__wrap">
				<a href="index.html" class="header__logo g-link">GLO Academy</a>
				<ul class="header__menu g-ul">
					<li><a href="index.html" class="g-link active">Главная</a></li>
					<li><a href="blog.html" class="g-link">Блог</a></li>
					<li><a href="about.html" class="g-link">Об авторе</a></li>
					<li><a href="contact.html" class="g-link">Обратная связь</a></li>
					<!-- <li><a href="#" class="g-link"> Админ панель</a></li> -->
				</ul>
				<div class="header__btns">
					<a href="register.html" class="g-link register">Зарегистрироваться</a>
					<a href="#" class="button button1 login" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Войти</a>
				</div>
			</div>
		</div>
	</header>

	<section class="blog">
		<div class="container">
			<div class="blog__wrap">
				<div class="blog__body">
					<h1>Блог Михаила<br>Кузнецова</h1>
					<p class="text">
						Банальные, но неопровержимые выводы, а также ключевые особенности структуры проекта, превозмогая сложившуюся непростую экономическую ситуацию, представлены в исключительно положительном свете.
					</p>
					<a href="blog.html" class="button button1">К постам</a>
				</div>
				<div class="blog__img">
					<img src="img/Foto.jpg" alt="Foto" class="img">
				</div>
			</div>
		</div>
	</section>

	<section class="about-me">
		<div class="container">
			<div class="about-me__wrap">
				<div class="about-me__img">
					<div class="about-me__img-figure">
						<img src="img/Ellipsefoto.png" alt="Ellipsefoto" class="img--cover">
					</div>
				</div>
				<div class="about-me__body">
					<h1>Об авторе</h1>
					<h2>Михаил Кузнецов</h2>
					<p class="text">
						С учётом сложившейся международной обстановки, глубокий уровень погружения способствует подготовке и реализации дальнейших направлений развития. Следует отметить, что внедрение современных методик способствует подготовке и реализации своевременного выполнения сверхзадачи. Современные технологии достигли такого уровня, что выбранный нами инновационный путь играет важную роль в формировании укрепления моральных ценностей.
					</p>
					<div class="about-me__soc">
						<a href="#" class="g-link">
							<svg class="svg" width="13" height="22" viewBox="0 0 13 22" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M12 1H9C7.67392 1 6.40215 1.52678 5.46447 2.46447C4.52678 3.40215 4 4.67392 4 6V9H1V13H4V21H8V13H11L12 9H8V6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5H12V1Z" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
						<a href="#" class="g-link">
							<svg class="svg" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16 1H6C3.23858 1 1 3.23858 1 6V16C1 18.7614 3.23858 21 6 21H16C18.7614 21 21 18.7614 21 16V6C21 3.23858 18.7614 1 16 1Z" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M15 10.3701C15.1234 11.2023 14.9812 12.0523 14.5937 12.7991C14.2062 13.5459 13.5931 14.1515 12.8416 14.5297C12.0901 14.908 11.2384 15.0397 10.4077 14.906C9.57708 14.7723 8.80971 14.3801 8.21479 13.7852C7.61987 13.1903 7.22768 12.4229 7.09402 11.5923C6.96035 10.7616 7.09202 9.90995 7.47028 9.15843C7.84854 8.40691 8.45414 7.7938 9.20094 7.4063C9.94773 7.0188 10.7977 6.87665 11.63 7.00006C12.4789 7.12594 13.2648 7.52152 13.8716 8.12836C14.4785 8.73521 14.8741 9.52113 15 10.3701Z" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<circle cx="17" cy="5" r="0.5" stroke="#7D7D7D" />
							</svg>
						</a>
						<a href="#" class="g-link">
							<svg class="svg" width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23 1.01006C22.0424 1.68553 20.9821 2.20217 19.86 2.54006C19.2577 1.84757 18.4573 1.35675 17.567 1.13398C16.6767 0.911216 15.7395 0.967251 14.8821 1.29451C14.0247 1.62177 13.2884 2.20446 12.773 2.96377C12.2575 3.72309 11.9877 4.62239 12 5.54006V6.54006C10.2426 6.58562 8.50127 6.19587 6.93101 5.4055C5.36074 4.61513 4.01032 3.44869 3 2.01006C3 2.01006 -1 11.0101 8 15.0101C5.94053 16.408 3.48716 17.109 1 17.0101C10 22.0101 21 17.0101 21 5.51006C20.9991 5.23151 20.9723 4.95365 20.92 4.68006C21.9406 3.67355 22.6608 2.40277 23 1.01006V1.01006Z" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="posts">
		<div class="container">
			<h1 class="posts__title">Посты</h1>
			<div class="posts__wrap">
				<div class="posts__sidebar">
					<div class="posts__sidebar-widget widget__search">
						<!-- <h4>Поиск</h4> -->
						<form action="search.html" class="form__search">
							<input type="text" class="g-input-sm" name="" value="" placeholder="Поиск">
							<button type="submit" class="button-sm button1">
								<svg class="svg" width="20" height="20" viewBox="0 0 512 512" fill="white" xmlns="http://www.w3.org/2000/svg">
									<path d="M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0
									S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786
									c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z
									M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667
									S302.646,384,202.667,384z"/>
								</svg>
							</button>
						</form>
					</div>
					<div class="posts__sidebar-widget widget__text">
						<h4>О блоге</h4>
						<p>С учётом сложившейся международной обстановки, глубокий уровень погружения способствует подготовке и реализации дальнейших направлений развития.</p>
					</div>
					<div class="posts__sidebar-widget widget__categories">
						<h4>Категории</h4>
						<ul class="g-ul">
							<li>
								<a href="archive.html" class="g-link g-link-sm">Программирование</a>
								<span>68</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Книги</a>
								<span>12</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Soft skills</a>
								<span>23</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Сниппеты</a>
								<span>7</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Алгоритмы</a>
								<span>48</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Администрирование</a>
								<span>32</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Архитектура</a>
								<span>54</span>
							</li>
							<li>
								<a href="archive.html" class="g-link g-link-sm">Базы данных</a>
								<span>18</span>
							</li>
							<!-- <li>
								<a href="#" class="g-link g-link-sm gray">Показать еще</a>
							</li> -->
						</ul>
					</div>
					<div class="posts__sidebar-widget widget__tags">
						<h4>#теги</h4>
						<div class="posts__sidebar-hes">
							<a href="archive.html" class="button button5">PHP</a>
							<a href="archive.html" class="button button5">Nginx</a>
							<a href="archive.html" class="button button5">Backend</a>
							<a href="archive.html" class="button button5">Windows</a>
							<a href="archive.html" class="button button5">JS</a>
							<a href="archive.html" class="button button5">NodeJS</a>
							<a href="archive.html" class="button button5">Python</a>
							<a href="archive.html" class="button button5">MySQL</a>
							<a href="archive.html" class="button button5">Фреймворк</a>
							<a href="archive.html" class="button button5">C#</a>
							<a href="archive.html" class="button button5">Linux</a>
							<a href="archive.html" class="button button5">SQLite</a>
							<a href="archive.html" class="button button5">Frontend</a>
							<a href="archive.html" class="button button5">MongDB</a>
							<a href="archive.html" class="button button5">MacOS</a>
							<a href="archive.html" class="button button5">Apache</a>
						</div>
					</div>
					<div class="posts__sidebar-widget widget__latest-posts">
						<h4>Популярные посты</h4>
						<a href="post.html" class="posts__sidebar-latest-elem g-link">
							<div class="posts__sidebar-latest-img">
								<img src="img/small-photo.png" alt="small-photo" class="img">
							</div>
							<div class="posts__sidebar-latest-body">
								<h5>Заголовок поста</h5>
								<p class="gray">25 апреля 2021</p>
								<div class="posts__sidebar-latest-icon">
									<div class="posts__sidebar-latest-ic">
										<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>40</span>
									</div>
									<div class="posts__sidebar-latest-ic">
										<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>40</span>
									</div>
								</div>
							</div>
						</a>
						<a href="post.html" class="posts__sidebar-latest-elem g-link">
							<div class="posts__sidebar-latest-img">
								<img src="img/small-photo.png" alt="small-photo" class="img">
							</div>
							<div class="posts__sidebar-latest-body">
								<h5>Заголовок поста</h5>
								<p class="gray">25 апреля 2021</p>
								<div class="posts__sidebar-latest-icon">
									<div class="posts__sidebar-latest-ic">
										<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>40</span>
									</div>
									<div class="posts__sidebar-latest-ic">
										<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>40</span>
									</div>
								</div>
							</div>
						</a>
						<a href="post.html" class="posts__sidebar-latest-elem g-link">
							<div class="posts__sidebar-latest-img">
								<img src="img/small-photo.png" alt="small-photo" class="img">
							</div>
							<div class="posts__sidebar-latest-body">
								<h5>Заголовок поста</h5>
								<p class="gray">25 апреля 2021</p>
								<div class="posts__sidebar-latest-icon">
									<div class="posts__sidebar-latest-ic">
										<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>40</span>
									</div>
									<div class="posts__sidebar-latest-ic">
										<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>40</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="posts__block">
					<div class="posts__block-wrap">
						<div class="posts__block-column">
							<a href="post.html" class="posts__block-item g-link">
								<div class="posts__block-img">
									<img src="img/foto.png" alt="foto" class="img">
								</div>
								<h3>Заголовок поста</h3>
								<p class="text">Равным образом, глубокий уровень погружения предопределяет ...</p>
								<div class="posts__block-inf">
									<span>25 апреля 2021</span>
									<div class="posts__block-icons">
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>40</span>
										</div>
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>12</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="posts__block-column">
							<a href="post.html" class="posts__block-item g-link">
								<div class="posts__block-img">
									<img src="img/foto.png" alt="foto" class="img">
								</div>
								<h3>Заголовок поста</h3>
								<p class="text">Равным образом, глубокий уровень погружения предопределяет ...</p>
								<div class="posts__block-inf">
									<span>25 апреля 2021</span>
									<div class="posts__block-icons">
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>40</span>
										</div>
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>12</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="posts__block-column">
							<a href="post.html" class="posts__block-item g-link">
								<div class="posts__block-img">
									<img src="img/foto.png" alt="foto" class="img">
								</div>
								<h3>Заголовок поста</h3>
								<p class="text">Равным образом, глубокий уровень погружения предопределяет ...</p>
								<div class="posts__block-inf">
									<span>25 апреля 2021</span>
									<div class="posts__block-icons">
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>40</span>
										</div>
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>12</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="posts__block-column">
							<a href="post.html" class="posts__block-item g-link">
								<div class="posts__block-img">
									<img src="img/foto.png" alt="foto" class="img">
								</div>
								<h3>Заголовок поста</h3>
								<p class="text">Равным образом, глубокий уровень погружения предопределяет ...</p>
								<div class="posts__block-inf">
									<span>25 апреля 2021</span>
									<div class="posts__block-icons">
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>40</span>
										</div>
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>12</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="posts__block-column">
							<a href="post.html" class="posts__block-item g-link">
								<div class="posts__block-img">
									<img src="img/foto.png" alt="foto" class="img">
								</div>
								<h3>Заголовок поста</h3>
								<p class="text">Равным образом, глубокий уровень погружения предопределяет ...</p>
								<div class="posts__block-inf">
									<span>25 апреля 2021</span>
									<div class="posts__block-icons">
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>40</span>
										</div>
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>12</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="posts__block-column">
							<a href="post.html" class="posts__block-item g-link">
								<div class="posts__block-img">
									<img src="img/foto.png" alt="foto" class="img">
								</div>
								<h3>Заголовок поста</h3>
								<p class="text">Равным образом, глубокий уровень погружения предопределяет ...</p>
								<div class="posts__block-inf">
									<span>25 апреля 2021</span>
									<div class="posts__block-icons">
										<div class="posts__sidebar-latest-ic">

											<svg class="svg" width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 5.5C1 5.5 3.263 1 7.22326 1C11.1835 1 13.4465 5.5 13.4465 5.5C13.4465 5.5 11.1835 10 7.22326 10C3.263 10 1 5.5 1 5.5Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.22312 7.18761C8.16048 7.18761 8.92036 6.43209 8.92036 5.50011C8.92036 4.56814 8.16048 3.81262 7.22312 3.81262C6.28576 3.81262 5.52588 4.56814 5.52588 5.50011C5.52588 6.43209 6.28576 7.18761 7.22312 7.18761Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>40</span>
										</div>
										<div class="posts__sidebar-latest-ic">
											<svg class="svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 5.72223C11.0019 6.45549 10.8306 7.17883 10.5 7.83334C10.108 8.61764 9.5054 9.27732 8.75968 9.73849C8.01396 10.1997 7.15457 10.4441 6.27777 10.4444C5.54451 10.4464 4.82117 10.275 4.16666 9.94445L1 11L2.05555 7.83334C1.72496 7.17883 1.55364 6.45549 1.55555 5.72223C1.55589 4.84543 1.80034 3.98604 2.26151 3.24032C2.72268 2.4946 3.38236 1.892 4.16666 1.50002C4.82117 1.16942 5.54451 0.998104 6.27777 1.00002H6.55555C7.71352 1.0639 8.80723 1.55266 9.62729 2.37271C10.4473 3.19277 10.9361 4.28648 11 5.44445V5.72223Z" stroke="#7D7D7D" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span>12</span>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="myPaginations">
						<div class="myPaginations__pagin">
							<a href="#" class="myPaginations__elem2">
								<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M7 13L1 7L7 1" stroke="#F7F7F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
							<a href="#" class="myPaginations__elem active"><span>1</span></a>
							<a href="#" class="myPaginations__elem"><span>2</span></a>
							<a href="#" class="myPaginations__elem"><span>3</span></a>
							<a href="#" class="myPaginations__elem2"><span>...</span></a>
							<a href="#" class="myPaginations__elem"><span>9</span></a>
							<a href="#" class="myPaginations__elem2">
								<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 13L7 7L1 1" stroke="#008BCC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</div>
					</div>
					<!-- .myPaginations -->
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="footer__wrap">
				<div class="footer__left">
					<a href="policy.html">Политика конфедициальности</a>
					<a href="ad.html">Реклама</a>
				</div>
				<div class="footer__right">
					<span>&copy; 2021, Glo Academy</span>
					<!-- <a href="mailto:mail@somemail.com">mail@somemail.com</a> -->
				</div>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
				</div>
				<div class="modal-body">
					<form class="modal-form-1">
						<h2 class="h2">Введите логин и пароль, чтобы войти на сайт</h2>
						<div class="modal__inputs">
							<input type="text" name="login" class="g-input modal-form-1-login" placeholder="Логин" required min="10" max="100" step="10">
							<span class="modal-form-1-login-sp">Минимальная длинна логина 10 символов</span>
							<input type="password" name="password" class="g-input modal-form-1-pass" placeholder="Пароль" required min="10" max="100" step="10">
							<span class="modal-form-1-pass-sp">Минимальная длинна пароля 10 символов</span>
						</div>
						<div class="modal__btns">
							<button class="button button3">Войти</button>
							<button class="button button4">Отмена</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
				</div>
				<div class="modal-body">
					<form class="modal-form-2">
						<h2 class="h2">Введите данные для регистрации на сайте</h2>
						<div class="modal__inputs">
							<input type="text" name="login" class="g-input modal-form-2-login" placeholder="Логин" required min="10" max="100" step="10">
							<span class="modal-form-2-login-sp">Минимальная длинна логина 10 символов</span>
							<input type="password" name="password" class="g-input modal-form-2-pass" placeholder="Пароль" required min="10" max="100" step="10">
							<span class="modal-form-2-pass-sp">Минимальная длинна пароля 10 символов</span>
							<input type="password" name="repeatPassword" class="g-input modal-form-2-repeatPassword" placeholder="Повторить пароль" required min="10" max="100" step="10">
							<span class="modal-form-2-repeatPassword-sp">Минимальная длинна пароля 10 символов</span>
							<input type="email" name="email" class="g-input modal-form-2-email" placeholder="E-Mail" required min="10" max="100" step="10">
						</div>
						<div class="modal__img">
							<img src="img/user-2.png" alt="user">
						</div>

						<div class="input__wrapper">
							<input name="file" type="file" name="file" id="input__file" class="input input__file" multiple>
							<label for="input__file" class="input__file-button">
								<span class="input__file-button-text">Загрузить фотографиию</span>
							</label>
						</div>

						<div class="myInp modal__check">
							<input id="check12" type="checkbox" checked name="ok">
							<label for="check12">Согласен на обработку данных </label>
						</div>

						<div class="modal__btns modal__btns2">
							<button class="button button3">Зарегестриироваться</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://unpkg.com/imask"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>