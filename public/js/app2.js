window.onload = function () {
  var form = document.querySelector('#register');

  var theInputs = form.elements;
  theInputs = Array.from(theInputs);

  for (var input of theInputs) {
    input.addEventListener('blur', function () {
      if (this.value.trim() === '') {
        this.classList.add('is-invalid');
        this.parentNode.querySelector('div').classList.add('error');
        this.parentNode.querySelector('div').innerHTML = 'Este campo es <b>obligatorio</b>';
      } else {
        this.classList.remove('is-invalid');
        this.parentNode.querySelector('div').classList.remove('error');
        this.parentNode.querySelector('div').innerHTML = '';
      }
    });
  }
  var formatoEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

	var inputEmail = form.querySelector('input[name=email]');

	inputEmail.addEventListener('blur', function () {
		if (!formatoEmail.test(this.value)) {
			this.classList.add('is-invalid');
			this.parentNode.querySelector('div').classList.add('error');
			this.parentNode.querySelector('div').innerHTML = 'Ingresa un mail valido';
		} else {
			this.classList.remove('is-invalid');
			this.parentNode.querySelector('div').classList.remove('error');
			this.parentNode.querySelector('div').innerHTML = '';
		}
	});

  var inputNombre = form.querySelector('input[name=name]');

  inputNombre.addEventListener('blur', function () {
      if (this.value.trim() === '') {
      this.classList.add('is-invalid');
      this.parentNode.querySelector('div').classList.add('error');
      this.parentNode.querySelector('div').innerHTML = 'Ingrese un nombre';
    } else {
      this.classList.remove('is-invalid');
      this.parentNode.querySelector('div').classList.remove('error');
      this.parentNode.querySelector('div').innerHTML = '';
    }
  });


  var inputpass2 = form.querySelector('input[name=password_confirmation]');

  inputpass2.addEventListener('blur', function () {
		  if (this.value.trim() === '') {
			this.classList.add('is-invalid');
			this.parentNode.querySelector('div').classList.add('error');
			this.parentNode.querySelector('div').innerHTML = 'Confirme la contraseña';
		} else {
			this.classList.remove('is-invalid');
			this.parentNode.querySelector('div').classList.remove('error');
			this.parentNode.querySelector('div').innerHTML = '';
		}
	});


};
