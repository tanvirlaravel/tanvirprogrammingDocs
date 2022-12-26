const h3El = document.querySelectorAll("h3");
const sidebarLinks = document.getElementById("sidebar_links");
let ul_li = "";

h3El.forEach((h_3) => {
  const elText = h_3.innerText;
  const elId = elText.split(" ").join("_");
  h_3.setAttribute("id", elId);
  h_3.setAttribute("class", "text-success");
  ul_li += `
    <li><a href="#${elId}">${elText}</a></li>
  `;
});

sidebarLinks.innerHTML = ul_li;

document.querySelectorAll("span").forEach((element) => {
  element.classList.add("text-danger");
});
