const humbtn = document.getElementById("dashhumburger");
const userbtn = document.getElementById("usricn");

humbtn.addEventListener("click", () => {
  document.getElementById("dashsidebar").classList.toggle("d-none");
  document.getElementById("dashmain").classList.toggle("d-none");
});

userbtn.addEventListener("click", () => {
  document.querySelector(".useropt").classList.toggle("d-none");
});

// /admin/manageadmins

const adminDelete = async (id,el)=>{

    let response = await fetch(`${window.location.origin}/api/admin/admindelete/${id}`, {
        method:'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    if (response.status === 200) {
        let data = await response.text();

        jQuery(el).parent().parent().remove();
        swal({
            title: "Deleted Successfully",
            icon: "success",
            button: "OK",
        });
    }

}
// $('#admintable .adminDelete').click(async ()=>{
//     $(this).parent().parent().remove();
//     console.log($(this).parent().parent())
//     let response = await fetch('/readme.txt');
// });
