const express = require('express');
const app = express();
const port = 1010;
app.get('/',(req,res) => {
    res.send('Hello Main Page');
});
app.get('/about',(req,res)=> {
    res.send('Hello About');
});
app.get('/contact',(req,res)=> {
    res.send('Hello contact');
});
app.get('/products',(req,res)=> {
    res.send('Hello products');
});
app.listen(port,()=> {
    console.log('Hello Dost Project Is Running On ',port);
})