window.addEventListener('DOMContentLoaded', () =>{

    const modalHandlers = Array.from(document.querySelectorAll('[data-type="modal"]'))
    const closeModalBtn = Array.from(document.querySelectorAll('[data-type="close-modal"]'))

    const handleModal = element => {
        document.getElementById(`overlay-${element.dataset["id"]}`).classList.toggle('hidden')
        document.getElementById(`overlay-${element.dataset["id"]}`).classList.toggle('flex')
    }

    const closeModal = element => {
        document.getElementById(`${element.dataset["close"]}`).classList.toggle('hidden')
        document.getElementById(`${element.dataset["close"]}`).classList.toggle('flex')
    }
    
    modalHandlers.map( element => {
        element.addEventListener('click', function(event) {handleModal(this)})
    })

    closeModalBtn.map( element => {
        element.addEventListener('click', function(event) {closeModal(this)})
    })
})