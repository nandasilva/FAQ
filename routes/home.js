var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res) {
  res.render('home/indexHome', { title: 'Soluções recentes' });
});

module.exports = router;
