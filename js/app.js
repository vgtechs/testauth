const loginform = document.getElementById("loginform");
const znak = document.getElementById("znak");
const container = document.querySelector(".container");
const granted = '<img src="images/granted.png" alt="" class="zn">';
const denied = '<img src="images/denied.png" alt=""  class="zn">';
//signInBtn.addEventListener("click", () => {
  //  container.classList.remove("right-panel-active");
//});


loginform.addEventListener("submit", (e) => {
    e.preventDefault()
    container.classList.add("right-panel-active");
    fetch(loginform.action, {method:'post', body: new FormData(loginform)})
    .then((response) => response.json())
    .then((result) => {
           if(result.message === "SUCCESS"){
               znak.innerHTML = granted;
               container.classList.remove("right-panel-active");
              setTimeout(function () {
                  location.href="success.php"
              }, 3000);

           }
       }).catch(error => { container.classList.remove("right-panel-active"); znak.innerHTML = denied;});

    console.log('We send post asynchronously (AJAX)');


});
