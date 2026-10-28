const notificationButton = document.querySelector('.app-icon-button')
const notificationDot = document.querySelector('.notification-dot')
const navigationLinks = document.querySelectorAll('.app-nav .nav-link')

notificationButton?.addEventListener('click', () => {
  notificationDot?.remove()
  notificationButton.setAttribute('aria-label', 'Nessuna nuova notifica')
})

navigationLinks.forEach((link) => {
  const href = link.getAttribute('href')
  const linkUrl = new URL(link.href, window.location.href)
  const isCurrentPage =
    href !== '#' && linkUrl.pathname === window.location.pathname

  link.classList.toggle('active', isCurrentPage)

  if (isCurrentPage) {
    link.setAttribute('aria-current', 'page')
  } else {
    link.removeAttribute('aria-current')
  }
})
