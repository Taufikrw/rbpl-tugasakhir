<<<<<<< HEAD

=======
>>>>>>> 5c268cf5296d26b3c1bfba6dd671a554c501b208
// Sidebar
const hamburger = document.getElementById('hamburger')
const sidebar = document.getElementById('sidebar')
const closeSidebar = document.getElementById('close-sidebar')

hamburger.addEventListener('click', () => {
    sidebar.classList.remove('hidden')
})

closeSidebar.addEventListener('click', () => {
    sidebar.classList.add('hidden')
})

// Generate Number
function generateNumber() {
    let randomNumber = Math.floor(1000 + Math.random() * 9000)
    document.getElementById('token').value = randomNumber
}

// Set Mapel Name
function setName(btn) {
    let nameValue = btn.id
    document.getElementById('matkulName').value = nameValue
}

//button from input nilai
const nextTaskName = document.getElementById('nextTaskName')
const backTaskName = document.getElementById('backTaskName')
const inputNilai1 = document.getElementsByClassName('inputNilai1')
const inputNilai2 = document.getElementsByClassName('inputNilai2')
const inputTaskName = document.getElementById('inputTaskName')

inputTaskName.addEventListener('keyup', () => {
    nextTaskName.removeAttribute('disabled')
})

nextTaskName.addEventListener('click', () => {

    for (let y = 0; y < 2; y++) {
        inputNilai2[y].classList.remove('hidden')
    }
    for (let x = 0; x < 2; x++) {
        inputNilai1[x].classList.add('hidden')
        
    }
})

backTaskName.addEventListener('click', () => {
    for (let y = 0; y < 2; y++) {
        inputNilai2[y].classList.add('hidden')
    }
    for (let x = 0; x < 2; x++) {
        inputNilai1[x].classList.remove('hidden')
    }
})