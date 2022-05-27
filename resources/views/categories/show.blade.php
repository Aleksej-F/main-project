
<p>Категории новостей</p>
<br />
<hr>
<?php foreach($categoriesList as $category): ?>
<div>

<a href="<?=route('categories.show', ['id' => $category['id']])?>"><?=$category['title']?></a>
    <br />
  
</div>

<?php endforeach; ?>