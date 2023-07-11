console.log("asyncawait js");

// Single loaded Request
const LoadData = async () => {
    try{
        const url = 'https://jsonplaceholder.typicode.com/todos/2';
        const res = await fetch(url);
        const data = await res.json();

        // console.log(res.status);
        // console.log(data);

        return data;
    }catch(err){
        console.error("Test error : " + err);
    }
};

// const data = LoadData().then(data => console.log(data)); 

// Multiple data request
const LoadMultipleData = async () => {
    try{
        const url1 = 'https://jsonplaceholder.typicode.com/todos/1';
        const url2 = 'https://jsonplaceholder.typicode.com/todos/2';
        const url3 = 'https://jsonplaceholder.typicode.com/todos/3';

        const results = await Promise.all([
            fetch(url1),
            fetch(url2),
            fetch(url3)
        ]);

        const dataResponses = results.map(result => result.json());
        const finalData = await Promise.all(dataResponses);

        return finalData;
    }catch(err){
        console.error("Test error : " + err);
    }
};

// const dataMultiple = LoadMultipleData().then(data => console.log(data)); 

( async () => {
    const dataMultiple = await LoadMultipleData();
    console.log(dataMultiple);
})();


// https://www.youtube.com/watch?v=_9vgd9XKlDQ
