// //Надо сделать связку с данными сервера

// var mysql = require('mysql2/promise');

// // Add the credentials to access your database
// var connection = mysql.createConnection({
//     host     : 'localhost',
//     user     : 'root',
//     password : 'root',
//     database : 'users'
// });

// // connect to mysql
// connection.connect(function(err) {
//     // in case of error
//     if(err){
//         console.log(err.code);
//         console.log(err.fatal);
//     }
// });
// var queryString = 'SELECT * FROM story';
// var stroka = "";
// connection.query(queryString, function(err, rows, fields){
//     if (err) throw err;
//     stroka = rows[1].id + " " + rows.name[1] + " " + rows.description;
// });

// document.body.append(stroka);

// Perform a query
// $query = 'SELECT * from MyTable LIMIT 10';

// connection.query($query, function(err, rows, fields) {
//     if(err){
//         console.log("An error ocurred performing the query.");
//         return;
//     }

//     console.log("Query succesfully executed: ", rows);
// });

// // Close the connection
// connection.end(function(){
//     // The connection has been closed
// });


for (var i=5; i > 0; i-- ){
let loadCards = document.createElement('div');//создаю основной блок где все будет
loadCards.className = "news";//даю название основного блока
let testimage = document.createElement('img');//создаю блок картинки
testimage.setAttribute("src", "upload/mitsuro.jpg"); //указываю что картинка И ДАЮ САМУ КАРТИНКУ!!!
testimage.className = "img-cont"; //ставлю класс с картинкой
let topictest = document.createElement("h5");//создаю блок заголовка
topictest.innerText = "ля тупо тест " + i + " загловка";//ДАЮ ТУТ ТЕКСТ ЗАГОЛОВКА!!!
let testDescription = document.createElement("p");//создаю блок описания
testDescription.innerText = "Тупо тест описания";//ДАЮ ЕМУ ТЕКСТ!!!

document.body.append(loadCards); //ставлю основной блок
loadCards.append(testimage); // вставляю в блок картинку
loadCards.append(topictest);//вставляю в блок заголовок
loadCards.append(testDescription);//вставляю в блок описание
}
