console.log('init')

document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed')
})

document.body.onload = function () {
    console.log('Page finished loading')
}

