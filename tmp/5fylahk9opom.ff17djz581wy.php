<?php foreach (($result?:[]) as $item): ?>
    <div class="d-flex justify-content-around ">
        <div class="col-md-8 person whitelines">
            <div class='d-flex justify-content-center align-items-center my-5 person'>
                <a href=# style="width:200px;" class="p-1">
                    <img class="post-profile person" src=#>
                    Image
                </a>
                <div class="flex-fill person">
                    <div class="d-flex flex-column container flex-fill person">
                        <p class="post-content person">Title</p>
                        <p class="post-content person">Content</p>
                        <p class="post-created person">Author and Date
                        </p>
                    </div>
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