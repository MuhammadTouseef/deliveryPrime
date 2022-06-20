document.addEventListener("scroll", (e) => {

  console.log(window.pageYOffset);
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


const cartbtnhandle = ()=>{
    document.getElementById('cart').classList.toggle('dn')
    let cc = document.getElementById('vc')
    if(cc.innerText == 'View Cart'){
        cc.innerText = 'Close Cart'
    }
    else{
        cc.innerText = 'View Cart'
    }
}
var x = document.getElementById("locationtop");

document.querySelector(".locicn").addEventListener("click", () => {
  navigator.geolocation
    ? navigator.geolocation.getCurrentPosition(writepos)
    : (x.innerHTML = "Geolocation is not supported by this browser.");
});


const writepos = (position)=>{
  x.value = `${position.coords.latitude}, ${position.coords.longitude}`;
}


const categories = async function (){

    let response = await fetch(`${window.location.origin}/api/business/categories`, {

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    if (response.status === 200) {
        let data = await response.json();
        console.log(data)
        data['categories'].forEach((a)=>{
            $('#catsele').append(`<option value="${a['id']}">
                                       ${a['name']}
                                  </option>`)
        })


    }else{
        console.log(response.status)
    }

}

if ($('#catsele').length) {
    categories()
}

