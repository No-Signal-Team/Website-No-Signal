/*const express = require('express');
const mongoose = require('mongoose');
const app = express();

const uri = 'mongodb+srv://aromanzin:noSIgnal@cluster0.1ytvnd0.mongodb.net/?retryWrites=true&w=majority'

async function connect() {
  try {
    await mongoose.connect(uri);
    console.log("Connected to MongoDB");
  } catch (error) {
    console.error(error);
  }
}

connect();

app.listen(8000, () => {
  console.log("Server started on port 8000")
});

app.get("/test", function (req, res) {
  res.send("Hello World!");
});

app.get("/test/list", function (req, res) {
  //on se connecte à la DB MongoDB
  const dbConnect = dbo.getDb();
  //premier test permettant de récupérer mes pokemons !
  dbConnect
    .collection("test")
    .find({}) // permet de filtrer les résultats
    .toArray(function (err, result) {
      if (err) {
        res.status(400).send("Error fetching pokemons!");
      } else {
        res.json(result);
      }
    });   
});

app.get("/french/list", function (req, res) {
  //on se connecte à la DB MongoDB
  const dbConnect = dbo.getDb();
  //premier test permettant de récupérer mes pokemons !
  dbConnect
    .collection("french")
    .find({}) // permet de filtrer les résultats
    .toArray(function (err, result) {
      if (err) {
        res.status(400).send("Error fetching french data!");
      } else {
        res.json(result);
      }
    });
});


var cors = require('cors')
const dbo = require("./db/db");
const express = require("express");
const app = express();
app.use(cors())
const port = 4444;

app.get("/english/list", function (res) {
  //on se connecte à la DB MongoDB
  const dbConnect = dbo.getDb();
  //premier test permettant de récupérer mes pokemons !
  dbConnect
    .collection("english")
    .find({}) // permet de filtrer les résultats
    .toArray(function (err, result) {
      if (err) {
        res.status(400).send("Error fetching english data!");
      } else {
        res.json(result);
      }
    });
});*/