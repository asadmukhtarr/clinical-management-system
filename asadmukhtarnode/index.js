const express = require('express');
const app = express();
const path = require('path');
const port = 3030;
app.set('view engine','ejs');
app.set('views',path.join(__dirname,'views'));

app.get('/',(req,res) => {
    res.render('index');
});
app.get('/about',(req,res)=> {
    res.render(('about'));
});
app.get('/contact',(req,res)=> {
    res.render('contact');
});
app.get('/products',(req,res)=> {
    res.render('products');
});
app.listen(port,()=> {
    console.log('Hello Dost Project Is Running On ',port);
})