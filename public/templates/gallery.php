<?php foreach ($images as $image):?>

<a href="/img/<?=$image?>">
    <img width="200" src="/img/<?=$image?>" alt="">
</a>

<?php endforeach;?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit"/>

</form>
