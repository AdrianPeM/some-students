window.addEventListener('DOMContentLoaded', () =>{
    let tabs = Array.from(document.querySelectorAll('.tab-option'))
    let sections = Array.from(document.querySelectorAll('[data-type="tab-section"]'))

    sections.map(section => {
        if(section.dataset["tabSection"] == document.querySelector('.tab-option.active').dataset["tabOption"])
            section.classList.add('active')
        else
            section.classList.add('hidden')
    })

    tabs.map(el => el.addEventListener('click', e => {
        document.querySelector('.tab-option.active').classList.remove('active')
        document.querySelector('[data-tab-section].active').classList.add('hidden')
        document.querySelector('[data-tab-section].active').classList.remove('active')

        el.classList.add('active', 'otra');
        document.querySelector(`[data-tab-section="${el.dataset["tabOption"]}"]`).classList.remove('hidden')
        document.querySelector(`[data-tab-section="${el.dataset["tabOption"]}"]`).classList.add('active')
    }))
})