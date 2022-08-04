<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="\socialmediacs\ui\style.css" rel="stylesheet">
<?php foreach (($result?:[]) as $item): ?>
    <div class="d-flex justify-content-around ">
        <div class="col-md-8 person whitelines">
            <div class='d-flex justify-content-center align-items-center my-5 person'>
                <span><?= ($item['date']) ?></span>
                <div class="flex-fill person">
                    <div class="d-flex flex-column container flex-fill person">
                        <span><?= ($item['title']) ?></span>
                        <span><?= ($item['content']) ?></span>
                        <span><?= ($item['author']) ?></span>
                        </p>
                    </div>
                    <a style="width:200px;" class="p-1">
                        <img class="post-profile person" src="<?= ($item['imageurl']) ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<script>
    function showTextBox(e) {
        box = e.parentElement.firstElementChild;
        console.log(box)
        if (box.style.display === "none") {
            box.style.display = "block";
        } else {
            box.style.display = "none";
        };
    };
</script>