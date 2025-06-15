const express = require('express');
const { MongoClient } = require('mongodb');
const app = express();
const path = require('path');
const port = 3030;

const url = "mongodb://localhost:27017";
const client = new MongoClient(url);
const dbName = "zainab";
let db;

// Connect to MongoDB
async function mongodb_connection() {
    try {
        const client = await MongoClient.connect(url, {
            useNewUrlParser: true,
            useUnifiedTopology: true
        });
        db = client.db(dbName);
        console.log("✅ Database Connected Successfully - Asad");
    } catch (error) {
        console.error("❌ Can't connect with DB", error);
    }
}
mongodb_connection();

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
app.get('/create', async (req, res) => {
    try {
        const collection = db.collection("products");
        const products = await collection.find({}).toArray();
        //res.json(products);
        res.render('create',{products}); 
    } catch (error) {
        console.log("cant fetch data from mongodb", error);
    }
});
app.listen(port,()=> {
    console.log('Hello Dost Project Is Running On ',port);
})