function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}

function formatRupiah(input) {
    let value = input.value.replace(/\D/g, ''); 
    let formatted = new Intl.NumberFormat('id-ID').format(value);
    input.value = formatted;
}