window.addEventListener('DOMContentLoaded', () =>{
    const subjButtons = Array.from(document.querySelectorAll('[data-subj-modal-btn="open-modal"]'))
    const closeButtons = Array.from(document.querySelectorAll('[data-subj-modal-btn="close-modal"]'))

    const toggleModal = element => {
        document.getElementById(element.dataset["subjModalId"]).classList.toggle('hidden')
        document.getElementById(element.dataset["subjModalId"]).classList.toggle('flex')
    }

    subjButtons.map( element => {
        element.addEventListener('click', function(event) {toggleModal(this)})
    })

    closeButtons.map( element => {
        element.addEventListener('click', function(event) {toggleModal(this)})
    })
})