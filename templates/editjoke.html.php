<div class="form-group">
<form action="" method="post">
    <input type="hidden" name="id" 
    value="<?=$joke['id'];?>">
    <label for="joketext">Type your joke here:
    </label>
    <textarea class="form-control" id="joketext" name="joketext" rows="3" 
    cols="40"><?=$joke['joketext']?></textarea>
    </div>
    <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Save">
</form>
</div>