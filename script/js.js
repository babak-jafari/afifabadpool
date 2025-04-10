// side bar menu action
const sidebar = document.getElementById('sidebar'),
      sidebarCloseIcon = document.getElementById('sidebar-close-icon'),
      sidebarOpenIcon = document.getElementById('sidebar-open-icon'),
      navbar = document.getElementById('navbar')
      overlay = document.getElementById('overlay');

function openSidebar() {
  sidebar.classList.add( 'block' )
  sidebar.classList.remove('hidden')
  navbar.classList.add('hidden')
  navbar.classList.remove('block')
}

function closeSidebar() {
    sidebar.classList.add( 'hidden' )
    sidebar.classList.remove('block')
    navbar.classList.add('block')
    navbar.classList.remove('hidden')
}

sidebarOpenIcon.addEventListener('click' , () => openSidebar() );
overlay.addEventListener('click' , () => closeSidebar());
window.addEventListener('resize',() => closeSidebar())

// login button
// const loginButton = document.querySelectorAll('.login');

//       closeLoginButton = document.getElementById('closelogin');
//       loginForm = document.getElementById('loginform');

      

      
// function openLoginForm(){
//   loginForm.classList.add('flex')
//   loginForm.classList.remove('hidden')
// }
// function closeLoginForm(){
//   loginForm.classList.add('hidden')
//   loginForm.classList.remove('flex')
// }

// loginButton.forEach(button => {
//   button.addEventListener('click', () => openLoginForm());
// });
// closeLoginButton.addEventListener('click' , () => closeLoginForm());
// loginForm.addEventListener('click' , () => closeLoginForm());

// newsletters

document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('toast');
    if (toast) {
      setTimeout(function() {
        toast.remove();  
      }, 2500); 
    }
  });


  // 
  const loginButton = document.querySelectorAll('.login');
  const closeLoginButton = document.getElementById('closelogin');
  const closeRegisterButton = document.getElementById('closeregister');
  const loginForm = document.getElementById('loginform');
  const signupForm = document.getElementById('signupform');
  const signupButton = document.getElementById('signup-btn');
  
  function openLoginForm() {
    loginForm.classList.add('flex');
    loginForm.classList.remove('hidden');
  }
  
  function closeLoginForm() {
    loginForm.classList.add('hidden');
    loginForm.classList.remove('flex');
  }
  
  function openSignupForm() {
    signupForm.classList.add('flex');
    signupForm.classList.remove('hidden');
  }
  
  function closeSignupForm() {
    signupForm.classList.add('hidden');
    signupForm.classList.remove('flex');
  }
  
  loginButton.forEach(button => {
    button.addEventListener('click', () => openLoginForm());
  });
  closeLoginButton.addEventListener('click', () => closeLoginForm());
  closeRegisterButton.addEventListener('click', () => closeSignupForm());
  signupButton.addEventListener('click', () => {
    closeLoginForm();
    openSignupForm();
  });
  //   loginForm.addEventListener('click', () => closeLoginForm());
  // signupForm.addEventListener('click', () => closeSignupForm());

  // sessions
  const sessionsButton = document.getElementById('sessionsbutton');
        sessionsForm = document.getElementById('sessionsform');
        closeSessions = document.getElementById('closesessions');

function sessionsOpen (){
  sessionsForm.classList.add('flex');
  sessionsForm.classList.remove('hidden');
}

function sessionsClose() {
  sessionsForm.classList.add('hidden');
  sessionsForm.classList.remove('flex');
}

sessionsButton.addEventListener('click',() => sessionsOpen ());
closeSessions.addEventListener('click',() => sessionsClose ());
