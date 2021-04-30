window.addEventListener('DOMContentLoaded', () =>{
    const subjBtn = document.querySelectorAll('.subj-btn')
    const closeBtn = document.querySelectorAll('.close-modal')

    const toggleModal = element => {
        document.getElementById(`overlay-${element.dataset["id"]}`).classList.toggle('hidden')
        document.getElementById(`overlay-${element.dataset["id"]}`).classList.toggle('flex')
    }
    
    Array.from(subjBtn).map( element => {
        element.addEventListener('click', function(event) {toggleModal(this)})
    })
    Array.from(closeBtn).map( element => {
        element.addEventListener('click', function(event) {toggleModal(this)})
    })
})