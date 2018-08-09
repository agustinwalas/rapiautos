window.onload = function () {
  console.log("app3.js")
  var logeo = document.querySelector('#login');

  var formatoEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

	var inputEmail = logeo.querySelector('input[name=email]');

	inputEmail.addEventListener('blur', function () {
		if (!formatoEmail.test(this.value)) {
			this.classList.add('is-invalid');
			this.parentNode.querySelector('div').classList.add('error');
			this.parentNode.querySelector('div').innerHTML = 'Por favor ingrese un mail valido';
		} else {
			this.classList.remove('is-invalid');
			this.parentNode.querySelector('div').classList.remove('error');
			this.parentNode.querySelector('div').innerHTML = '';
		}
	});

  var inputPass = logeo.querySelector('input[name=password]');

  inputPass.addEventListener('blur', function () {
		  if (this.value.trim() === '') {
			this.classList.add('is-invalid');
			this.parentNode.querySelector('div').classList.add('error');
			this.parentNode.querySelector('div').innerHTML = 'Por favor ingrese una Contraseña';
		} else {
			this.classList.remove('is-invalid');
			this.parentNode.querySelector('div').classList.remove('error');
			this.parentNode.querySelector('div').innerHTML = '';
		}
	});

};
