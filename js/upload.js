const fileInput = document.getElementById("inputGroupFile02");
const previewImg = document.getElementById("preview-img");

fileInput.addEventListener("change", function (e) {
  const reader = new FileReader();

  reader.onload = function () {
    previewImg.src = reader.result;
  };

  reader.readAsDataURL(e.target.files[0]);
});
