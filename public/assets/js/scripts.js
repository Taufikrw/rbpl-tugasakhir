const hamburger = document.getElementById('hamburger')
const sidebar = document.getElementById('sidebar')
const closeSidebar = document.getElementById('close-sidebar')

hamburger.addEventListener('click', () => {
    sidebar.classList.remove('hidden')
})

closeSidebar.addEventListener('click', () => {
    sidebar.classList.add('hidden')
})