function fixNav() {
	alert('Hola!');
}

function checkAble() {
	firstNameInput = document.getElementById('nameInput').value
	genderInput = document.getElementById('genderSelect').value
	inputButton = document.getElementById('submitStart')

	if (firstNameInput != "" && genderInput != "noValue") {
		inputButton.classList.remove('disabledButton')
		inputButton.disabled = false
	} else {
		inputButton.classList.add('disabledButton')
		inputButton.disable = true
	}
}
