const h3El = document.querySelectorAll("h3");
const sidebarLinks = document.getElementById("sidebar_links");
let ul_li = "";

h3El.forEach((h_3) => {
  const elText = h_3.innerText;
  const elId = elText.split(" ").join("_");
  h_3.setAttribute("id", elId);
  h_3.setAttribute("class", "text-danger");
  ul_li += `
    <li><a href="#${elId}">${elText}</a></li>
  `;
});

if(typeof sidebarLinks === 'object' && sidebarLinks !== null) {
  sidebarLinks.innerHTML = ul_li;
}

document.querySelectorAll("span").forEach((element) => {
  element.classList.add("text-danger");
});

document.querySelectorAll("pre").forEach((element) => {
  const cls = ["p-2", "bg-dark", "text-white"];
  element.classList.add(...cls);
});

document.querySelectorAll("h5").forEach((element) => {
  const cls = [
    "text-info",
    "border",
    "p-2",
    "border-warning",
    "text-center",
    "mt-5",
  ];
  element.classList.add(...cls);
});

const button = document.getElementById("scroll-to-top-btn");
button.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    left: 0,
    // behavior: "smooth",
  });
});
