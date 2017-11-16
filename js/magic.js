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

function showRangeResult() {
	result = document.getElementById('preferenceRange').value
	text = document.getElementById('resultInput')

	console.log(result);

	if (result == -5) {
		text.value = "\u2665 \u2665 \u2665 \u2665 \u2665"
	} else if (result == -4) {
		text.value = "\u2665 \u2665 \u2665 \u2665"
	} else if (result == -3) {
		text.value = "\u2665 \u2665 \u2665"
	} else if (result == -2) {
		text.value = "\u2665 \u2665"
	} else if (result == -1) {
		text.value = "\u2665"
	} else if (result == 5) {
		text.value = "\u2665 \u2665 \u2665 \u2665 \u2665"
	} else if (result == 4) {
		text.value = "\u2665 \u2665 \u2665 \u2665"
	} else if (result == 3) {
		text.value = "\u2665 \u2665 \u2665"
	} else if (result == 2) {
		text.value = "\u2665 \u2665"
	} else if (result == 1) {
		text.value = "\u2665"
	} else {
		text.value = "Neither"
	}

	light = document.getElementById('lightThemeLabel');
	dark = document.getElementById('darkThemeLabel');
	neither = document.getElementById('neitherLabel');

	if (result > 0) {
		light.style.fontWeight = "700";
		dark.style.fontWeight = "300";
		neither.style.fontWeight = "300"
	} else if (result < 0) {
		light.style.fontWeight = "300";
		dark.style.fontWeight = "700";
		neither.style.fontWeight = "300"
	} else {
		light.style.fontWeight = "300";
		dark.style.fontWeight = "300";
		neither.style.fontWeight = "700"
	}
}
