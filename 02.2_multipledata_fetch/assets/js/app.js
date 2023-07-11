console.log("Fetching multiple json files at the same time...");


// Fetching Single json here
// basic example

const url = 'https://jsonplaceholder.typicode.com/todos/1';

fetch(url)
    .then( res => {
        return res.json();
    })
    .then( data => {
        // console.log(data);
    })
    .catch(err => {
        alert(err);
    });

