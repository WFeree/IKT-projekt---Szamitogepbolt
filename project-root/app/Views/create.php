<form action="/create" method="post" enctype='multipart/form-data'>
    <?= csrf_field(); ?>
    <label for="name">name</label>
    <input type="text" id="name" name="name"><br>
    <label for="brand">brand</label>
    <input type="text" id="brand" name="brand"><br>
    <label for="cat">Category</label>
    <select name="category" id="cat">
        <?php foreach($options as $option): ?>
            <option value="<?= $option; ?>"><?= $option; ?></option>
        <?php endforeach; ?>
    </select><br>
    <label for="price">Price</label>
    <input type="number" name="price" id="price"><br>

    <label for="details">Details</label>
    <textarea name="details" id="details"></textarea><br>

    <label for="rating">Rating</label>
    <input type="number" name="rating" id="rating" step="0.1", max="5", min="0">
    <input type="file" name="picture">
    <input type="submit" value="Send">

</form>
<?= isset(session()->ferror) ? var_dump(session()->ferror) : "" ?>