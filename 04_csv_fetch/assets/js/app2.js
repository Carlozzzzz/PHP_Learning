console.log('about to fetch the image...');
const sampleimage = document.getElementById("sampleimage");

// Normal Fetch version
fetch('rainbow.png')
    .then(response => {
        return response.blob();
    })
    .then( blob => {
        //document.getElementById("sampleimage").src = URL.createObjectURL(blob);
    })
    .catch( error => {
        console.log('Error: ' + error);
    });

// Async Version
const LoadImageData = async () => {
    try {
        const imageLoc = 'rainbow.png';
        const res = await fetch(imageLoc);
        const data = res.blob();
        return data;
    } catch (error) {
        console.log(error);
    }
}

( async () => {
    const imageData = await LoadImageData();
    sampleimage.src = URL.createObjectURL(imageData);
})();