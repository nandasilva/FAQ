var express = require('express');
var router = express.Router();

/* Interna da solução */
router.get('/:id', function(req, res) {
  res.render('solucoes/internaSolucao', { title: 'Nome da solução' });
});

module.exports = router;
