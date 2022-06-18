document.addEventListener("scroll", (e) => {
  console.log(window.window.pageYOffset);
  const searchBar = document.querySelector("#navSearchBar");
  if (
    window.window.pageYOffset > 327 &&
    !searchBar.classList.contains("d-md-block")
  ) {
    searchBar.classList.toggle("d-md-block");
  } else if (
    window.window.pageYOffset < 327 &&
    searchBar.classList.contains("d-md-block")
  ) {
    searchBar.classList.toggle("d-md-block");
  }
});

const validate = (txt, rgx, field) => {
  var regx = rgx;

  if (regx.test(txt)) {
    field.style.border = "2px solid green";
    return true;
  } else {
    field.style.border = "2px solid red";
    return false;
  }
};
var x = document.getElementById("locationtop");

document.querySelector(".locicn").addEventListener("click", () => {
  navigator.geolocation
    ? navigator.geolocation.getCurrentPosition(writepos)
    : (x.innerHTML = "Geolocation is not supported by this browser.");
});


const writepos = (position)=>{
  x.value = `${position.coords.latitude}, ${position.coords.longitude}`;
}