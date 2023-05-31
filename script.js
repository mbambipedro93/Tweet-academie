  $(document).ready(function() {
    $("#formulaire").submit(function (event) {
      event.preventDefault();
      // let allInput = $("input");
  
      let isFormEmpty = false;
      $("#formulaire input, select").each(function() {
        if ($(this).val() === "") {
          isFormEmpty = true;
        }
      });
  
      if(isFormEmpty) {
        alert("Veuillez remplir tout le formulaire.");
      } else {
        $.ajax({
          type: "POST",
          url: "req.php",
          data: $("#formulaire").serialize(),
          success: function (data) {  
            console.log(data);
          }
        });
      }
    });
  });