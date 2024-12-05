document.getElementById("menu-icon").addEventListener("click", function () {
  let menu = document.getElementById("mobile-menu");
  let body = document.body;
  if (menu.classList.contains("show")) {
    menu.classList.remove("show");
    body.classList.remove("no-scroll");
  } else {
    menu.classList.add("show");
    body.classList.add("no-scroll");
  }
});

let menuLinks = document.querySelectorAll("#mobile-menu a");
menuLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    let menu = document.getElementById("mobile-menu");
    let body = document.body;
    menu.classList.remove("show");
    body.classList.remove("no-scroll");
  });
});

document.getElementById("close-menu").addEventListener("click", function () {
  let menu = document.getElementById("mobile-menu");
  let body = document.body;
  menu.classList.remove("show");
  body.classList.remove("no-scroll");
});
