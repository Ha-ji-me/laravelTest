<h1>{{$msg}}</h1>


<form method="post" action="submitted.blade.php">
@csrf
    <input type="text" name="nickname">
    <br/>
    <input type="text" name="email">
    <br/>

    <input type="submit">
</form>

