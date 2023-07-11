console.log('about to fetch the rainbow...');

fetch('rainbow.png')
    .then( response => {
        console.log(response);
        return response.blob();
    })
    .then( blob => {
        console.log(blob);
        document.getElementById("rainbow").src = URL.createObjectURL(blob);
    })
    .catch( error => {
        console.log('error!');
        console.error(error);
    }); 