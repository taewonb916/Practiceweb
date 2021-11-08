const express = require('express');
const app = express();
var path = require('path');
app.use(express.static(path.join(__dirname,'public')));

const server = app.listen(30325, () =>{
    console.log('Start Server : localhost:30325')
});

app.use('/static', express.static(__dirname + '/public'));
app.set('views',__dirname+'/views');
app.set('view engine','ejs');
app.engine('html',require('ejs').renderFile);

app.get('/', function(req, res) {
    res.render('index.html');
  });
app.get('/index.html', function(req, res) {
    res.render('index.html');
  });
app.get('/1-1-0.html', function(req, res) {
    res.render('1-1-0.html');
  });

app.get('/1-1-1.html', function(req, res) {
    res.render('1-1-1.html');
  });

app.get('/1-1-2.html', function(req, res) {
    res.render('1-1-2.html');
  });

app.get('/2-0.html', function(req, res) {
    res.render('2-0.html');
  });

app.get('/2-1-0.html', function(req, res) {
    res.render('2-1-0.html');
  });

app.get('/3-0.html', function(req, res) {
    res.render('3-0.html');
  });

app.get('/3-1-0.html', function(req, res) {
    res.render('3-1-0.html');
  });

app.get('/3-2-0.html', function(req, res) {
    res.render('3-2-0.html');
  });
app.get('/3-3-0.html', function(req, res) {
    res.render('3-3-0.html');
  });
app.get('/4-1-0.html', function(req, res) {
    res.render('4-1-0.html');
  });
app.get('/4-2-0.html', function(req, res) {
    res.render('4-2-0.html');
  });

  