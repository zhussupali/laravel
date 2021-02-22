<!DOCTYPE html>
<html>
    <head>
        <title>main</title>
    </head>
    <body>
    <h1>this is the main page</h1>
        <div class= "header">
        <a href=" {{ route('main') }} ">main</a>
        <a href=" {{ route('about') }} ">about</a>
        <a href=" {{ route('contacts') }} ">contacts</a>
        </div>

        <div class = "info">
            <img id="img" src="{{url('https://goldenlightsolutions.com/wp-content/uploads/2020/04/Microchip.png')}}", height = "300px">

        <div class="text" >
             <h1>The best compny in industry!</h1>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti optio distinctio molestias architecto quam aspernatur quaerat odit deleniti, corporis est dolorem doloremque, fuga praesentium ipsum ab, voluptate autem quisquam!
        </div>
        </div>
    </body>

    <style>

body{
	background-color: skyblue; 
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
	display: flex;
	justify-content: space-around;}
    
.text{
	padding-top: 36px;
	text-align: center;
	padding-left: 50px;
	padding-right: 30px;
	font-size: 20px;
	text-align: justify;
}
</style>
</html>