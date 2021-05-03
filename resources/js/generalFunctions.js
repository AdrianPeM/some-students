window.addEventListener('DOMContentLoaded', () =>{

    const submitFormButtons = Array.from(document.querySelectorAll('[data-type="submit-form-btn"]'))

    const submitForm = element => {
        document.getElementById(element.dataset['targetForm']).submit()
    }

    submitFormButtons.map( element => {
        element.addEventListener('click', function(event) {submitForm(this)})
    })
})