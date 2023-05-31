window.onload = function () {
    let modal = document.getElementById("myModal");


    let btn = document.getElementById("myBtn");


    let span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
    modal.style.display = "block";
    }

    span.onclick = function() {
    modal.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        }
    }


    // let modaldelete = document.getElementById("myModaldelete");


    // let btndelete = document.getElementById("myBtndelete");


    // let spandelete = document.getElementsByClassName("close2")[0];

    // btndelete.onclick = function() {
    // modaldelete.style.display = "block";
    // }

    // spandelete.onclick = function() {
    // modaldelete.style.display = "none";
    // }

    // window.onclick = function(event) {
    // if (event.target == modaldelete) {
    //     modaldelete.style.display = "none";
    //     }
    // }
}