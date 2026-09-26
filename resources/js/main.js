const form = document.querySelector('#loginForm')
const password = document.querySelector('#password')
const passwordToggle = document.querySelector('#passwordToggle')
const alert = document.querySelector('#loginAlert')

passwordToggle?.addEventListener('click', () => {
  const isVisible = password.type === 'text'

  password.type = isVisible ? 'password' : 'text'
  passwordToggle.setAttribute('aria-pressed', String(!isVisible))
  passwordToggle.setAttribute(
    'aria-label',
    isVisible ? 'Mostra password' : 'Nascondi password',
  )
})

form?.addEventListener('submit', (event) => {
  event.preventDefault()

  if (!form.checkValidity()) {
    event.stopPropagation()
    form.classList.add('was-validated')
    return
  }

  form.classList.remove('was-validated')
  alert.classList.remove('d-none')
})
