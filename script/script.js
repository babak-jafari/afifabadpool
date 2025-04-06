// side bar menu action
const sidebar = document.getElementById('sidebar'),
      sidebarCloseIcon = document.getElementById('sidebar-close-icon'),
      sidebarOpenIcon = document.getElementById('sidebar-open-icon'),
      overlay = document.getElementById('overlay');

function openSidebar() {
  sidebar.classList.add( 'block' )
  sidebar.classList.remove('hidden')
  sidebarOpenIcon.classList.add('hidden')
  sidebarOpenIcon.classList.remove('block')
}

function closeSidebar() {
    sidebar.classList.add( 'hidden' )
    sidebar.classList.remove('block')
    sidebarOpenIcon.classList.add('block')
    sidebarOpenIcon.classList.remove('hidden')
}

sidebarOpenIcon.addEventListener('click' , () => openSidebar() );
sidebarCloseIcon.addEventListener('click' , () => closeSidebar());
window.addEventListener('resize',() => closeSidebar())

// h1 motion


