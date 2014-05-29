var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res) {
  res.render('busca/indexBusca', { title: 'Resultado da busca por "Termo da busca"' });
});

module.exports = router;
