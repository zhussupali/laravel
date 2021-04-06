
<h1>{{__('upload.title')}}</h1>

<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf 
    <input type="text" placeholder="{{__('upload.name')}}" name="name">
    <input type="text" placeholder="{{__('upload.surname')}}" name="surname">
    <input type="email" placeholder="{{__('upload.email')}}" name="email">
    <input type="file" name="file"> <br><br>
    <button type="submit">{{__('upload.upload')}}</button>

</form>
