const express = require('express');
const app = express();

const port = process.env.PORT || 8080;

// route
app.get('/', (req, res) => {
    res.json("get Request");
})

app.listen(port, ()=>{
    console.log(`App listening on port ${port}`);
})