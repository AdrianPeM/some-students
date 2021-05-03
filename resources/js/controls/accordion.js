window.addEventListener('DOMContentLoaded', () => {
    const accordions = Array.from(document.getElementsByClassName('accordion'))
    const accordionHandlers = Array.from(document.getElementsByClassName('accordion__title'))

    const accordionHandle = (element, accordion) => {
        if (accordion.classList.toggle('open')) {
            expandAccordion(element.nextElementSibling)
        } else {
            collapseAccordion(element.nextElementSibling)
        }

        accordions.map(e => {
            if (e.id != accordion.id) {
                e.classList.remove('open')
                e.getElementsByClassName('accordion__content')[0].style.height = ''
            }
        })
    }

    const collapseAccordion = element => {
        element.style.height = ''
    }

    const expandAccordion = element => {
        element.style.height = element.scrollHeight + 'px'
    }

    accordionHandlers.map(e => {
        e.addEventListener('click', function () {
            accordionHandle(this, this.closest('.accordion'))
        })
    })
})