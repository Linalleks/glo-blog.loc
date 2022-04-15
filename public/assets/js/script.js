const exampleModal = document.getElementById('exampleModal'),
			exampleModal2 = document.getElementById('exampleModal2');

exampleModal.addEventListener('show.bs.modal', function (event) {
	// Кнопка, запускающая модальное окно
	const button = event.relatedTarget;
	// Извлечь информацию из атрибутов data-bs- *
	const recipient = button.getAttribute('data-bs-whatever');
	// При необходимости вы можете инициировать запрос AJAX здесь
	// а затем выполните обновление в обратном вызове.
	//
	// Обновите содержимое модального окна.
	// var modalTitle = exampleModal.querySelector('.modal-title')
	// var modalBodyInput = exampleModal.querySelector('.modal-body input')

	// modalTitle.textContent = 'Новое сообщение для ' + recipient
	// modalBodyInput.value = recipient
});

exampleModal2.addEventListener('show.bs.modal', function (event) {
	// Кнопка, запускающая модальное окно
	const button = event.relatedTarget;
	// Извлечь информацию из атрибутов data-bs- *
	const recipient = button.getAttribute('data-bs-whatever');
	// При необходимости вы можете инициировать запрос AJAX здесь
	// а затем выполните обновление в обратном вызове.
	//
	// Обновите содержимое модального окна.
	// var modalTitle = exampleModal.querySelector('.modal-title')
	// var modalBodyInput = exampleModal.querySelector('.modal-body input')

	// modalTitle.textContent = 'Новое сообщение для ' + recipient
	// modalBodyInput.value = recipient
});


const valid = (formLink, elemLink, sp) => {
	let form = document.querySelector(formLink);
	let elem = document.querySelector(elemLink);

	form.addEventListener('submit', (e) => {
		e.preventDefault();

		if (elem.value.length < 10) {
			elem.classList.add('act');
			document.querySelector(sp).style.display = 'block';
		} else {
			elem.classList.remove('act');
			document.querySelector(sp).style.display = 'none';
		}
	});
};

valid('.modal-form-1', '.modal-form-1-login', '.modal-form-1-login-sp');
valid('.modal-form-1', '.modal-form-1-pass', '.modal-form-1-pass-sp');
valid('.modal-form-2', '.modal-form-2-login', '.modal-form-2-login-sp');
valid('.modal-form-2', '.modal-form-2-pass', '.modal-form-2-pass-sp');
valid('.modal-form-2', '.modal-form-2-repeatPassword', '.modal-form-2-repeatPassword-sp');


// Imask на мобильный телефон
const telInputs = document.querySelectorAll('input[type="tel"]');

const crateMaskForTel = (inp) => IMask(inp, { mask: '+{7}(000)000-00-00' });

telInputs?.forEach(crateMaskForTel);
