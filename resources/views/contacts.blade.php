<!DOCTYPE html>
<html>
    <head>
        <title>contacts</title>
    </head>
    <body>
        <h1>here is the contacts</h1>
        <div class= "header">
        <a href=" {{ route('main') }} ">main</a>
        <a href=" {{ route('about') }} ">about</a>
        <a href=" {{ route('contacts') }} ">contacts</a>
        </div>

        <div class = "info">
         <h2>email: hr@micchips.com</h2>
         <h2>phone: +77061232123</h2>
         <h2>address: 9764 Howard St. New Orleans, LA 70115</h2>
        </div>
    </body>
    <style>

body{
	background-color: pink; 
	font-family: 'chalkduster';
}
.header{
	display: flex;
	justify-content: space-around;
	align-items: center;
	padding-top: 20px;
	font-size: 25px;
    padding-bottom: 100px;
}
.info{
    margin: auto;
  width: 50%;
  border: 3px solid blue;
  padding: 10px;
}
    

</style>
</html>