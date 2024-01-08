// select tous les elemnt and btn submit
const inputs = document.querySelectorAll('input, select');
const submitButton = document.querySelector('.form-group.submit-btn button');

// func validate et afficher error msg in keyup
const validateAndShowError = (field) => {
  const fieldValue = field.value.trim();
  const fieldId = field.getAttribute('id');
  let errorText = '';

  switch (fieldId) {
    case 'fullname':
      errorText = fieldValue === '' ? 'Enter your full name' : '';
      break;
    case 'email':
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      errorText = !emailPattern.test(fieldValue) ? 'Enter a valid email address' : '';
      break;
    case 'password':
      errorText = fieldValue === '' ? 'Enter your password' : '';
      break;
    case 'date':
      errorText = fieldValue === '' ? 'Select your date of birth' : '';
      break;
    case 'gender':
      errorText = fieldValue === '' ? 'Select your gender' : '';
      break;
    default:
      break;
  }

  const errorElement = field.closest('.form-group').querySelector('.error-text');
  if (errorElement) {
    errorElement.innerText = errorText;
    errorElement.style.display = errorText ? 'block' : 'none';
  }
  field.classList.toggle('error', errorText !== '');
};

// func pour handle input keyup event
const handleInputKeyup = (e) => {
  const field = e.target;
  validateAndShowError(field);
};

// funtion pour handle sumit button click event

const handleSubmitButtonClick = (e) => {
  e.preventDefault();

//   validate tous les inputs fields
  inputs.forEach(input => {
    validateAndShowError(input);
  });

//   check pour les error avan submiting formulaire
  const errorInputs = document.querySelectorAll('.form-group .error');
  if (errorInputs.length === 0) {
    // if not error, submit formulaire
    document.querySelector('form').submit();
  }
};

// attach keyup event listeners pour tous les inputs
inputs.forEach(input => {
  input.addEventListener('keyup', handleInputKeyup);
});

// attach click event listener pour submit btn   
submitButton.addEventListener('click', handleSubmitButtonClick);
