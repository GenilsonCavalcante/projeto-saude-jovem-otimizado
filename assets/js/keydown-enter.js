function keydownFunction() {

   document.addEventListener("keypress", function (e) {

      const btn = document.getElementById("input-submit");
      const tx = document.getElementById("textarea");
      
      if (e.key === "Enter" && tx.value != "") {
         btn.click();
      }

   });

}
