const image_input = document.querySelector("#image-input")
var uploaded_image = "";

image_input.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.getElementById("loaded_image").src=`${uploaded_image}`
    });
    reader.readAsDataURL(this.files[0]);
})