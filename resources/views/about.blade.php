<!DOCTYPE html>
<html>
    <head>
        <title>about</title>
    </head>
    <body>
        <h1>here should be some info</h1>
        <div class= "header">
        <a href=" {{ route('main') }} ">main</a>
        <a href=" {{ route('about') }} ">about</a>
        <a href=" {{ route('contacts') }} ">contacts</a>
        </div>

        <div class = "info">
            <img id="img" src="{{url('https://www.avocor.com/wp-content/uploads/2018/09/7-examples-of-teamwork-collaboration-in-the-workplace-featured-image.png')}}", height = "300px">

        <div class="text" >
             <h1>Team work #1 priority</h1>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit modi facilis ut aut obcaecati sit ad voluptates inventore, quam nisi laboriosam. Ab provident reiciendis quaerat placeat minus excepturi a quos!
        </div>
        </div>
    </body>

    <style>

body{
	background-color: gold; 
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