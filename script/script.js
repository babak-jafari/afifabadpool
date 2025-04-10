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
const loginButton = document.querySelectorAll('.login');

      closeLoginButton = document.getElementById('closelogin');
      loginForm = document.getElementById('loginform');

      

      
function openLoginForm(){
  loginForm.classList.add('flex')
  loginForm.classList.remove('hidden')
}
function closeLoginForm(){
  loginForm.classList.add('hidden')
  loginForm.classList.remove('flex')
}

loginButton.forEach(button => {
  button.addEventListener('click', () => openLoginForm());
});
closeLoginButton.addEventListener('click' , () => closeLoginForm());
loginForm.addEventListener('click' , () => closeLoginForm());


// asdasd

// const form = document.getElementById('newsletter-form');

// form.addEventListener('submit', function(e) {
//   e.preventDefault(); // جلو‌گیری از رفرش شدن صفحه

//   const number = document.getElementById('phone-number').value;

//   const formData = new FormData();
//   formData.append('number', number);

//   fetch('save.php', {
//     method: 'POST',
//     body: formData
//   })
//   .then(response => response.text())
//   .then(data => {
//     document.getElementById('result').innerText = data;
//     form.reset();
//   })
//   .catch(error => {
//     document.getElementById('result').innerText = 'خطا در ارتباط';
//     console.error(error);
//   });
// });

const toast = document.getElementById('toast');
document.addEventListener('DOMContentLoaded', function() {
      // نمایش توتیف
      toast.classList.add('flex');
      toast.classList.remove('hidden');
      // مخفی کردن بعد از 5 ثانیه
      setTimeout(function() {
          toast.classList.remove('flex'); // محو شدن
          toast.classList.add('hidden');
          setTimeout(function() {
              toast.remove(); // حذف از DOM بعد از انیمیشن
          }, 500); // هم‌زمان با مدت transition
      }, 5000); // 5 ثانیه نمایش
  }
);
