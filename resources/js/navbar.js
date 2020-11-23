document.addEventListener('scroll', () => {

    let navbarLinks = document.querySelectorAll('.nav-link')
    let navbarToggler = document.querySelector('.navbar-toggler-icon')
    let navbarButton = document.querySelector('.navbar-button')
    let navbarLogo =  document.querySelector('#logo')

    if (window.location.pathname !=='/index' && window.pageYOffset > 235) {  
        navbarLinks.forEach(element => {
            element.classList.remove('text-white')
            element.classList.add('text-primary')
        })
        navbarToggler.classList.remove('text-white')
        navbarToggler.classList.add('text-primary')
        navbarButton.classList.remove('btn-outline-light')
        navbarButton.classList.add('btn-outline-primary')
        navbarLogo.src = "/images/logo.svg"
    }  else if (window.location.pathname !=='/index' && window.pageYOffset < 235) {
        navbarLinks.forEach(element => {
        element.classList.remove('text-primary')
        element.classList.add('text-white')
    })
    navbarToggler.classList.remove('text-primary')
    navbarToggler.classList.add('text-white')
    navbarButton.classList.remove('btn-outline-primary')
    navbarButton.classList.add('btn-outline-light')
    navbarLogo.src = "/images/logo_white.svg"
}
})

