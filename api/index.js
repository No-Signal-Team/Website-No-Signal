const express = require("express");
const dbo = require("./db/db");
const app = express();
const port = 4444;

app.get("/", function (req, res) {
  res.send("Hello World!");
});

dbo.connectToServer();

app.listen(port, function () {
  console.log(`App listening on port ${port}!`);
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

/*app.get("/french/list", function (req, res) {
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