
<h1>Upload Page</h1>

<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf 
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Surname" name="surname">
    <input type="email" placeholder="Email" name="email">
    <input type="file" name="file"> <br><br>
    <button type="submit">Upload</button>

</form>
