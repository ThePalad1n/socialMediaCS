<?php foreach (($result?:[]) as $idx=>$item): ?>
    <div class="card mb-4 d-flex justify-content-center align-items-center my-5">
        <img id="imageurl<?= ($idx) ?>" src="<?= ($item['imageurl']) ?>" class="card-img-top" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">
                <span id="title<?= ($idx) ?>"><?= ($item['title']) ?></span>
            </h5>
            <p class="card-text">
                <span id="content<?= ($idx) ?>"><?= ($item['content']) ?></span>
            </p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Share
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <button type="submit" class="dropdown-item" onclick="test(<?= ($idx) ?>)">Repost</button>
                    </li>
                    <li>
                        <button type="submit" class="dropdown-item" onclick="sendT(<?= ($idx) ?>)">Tom</button>
                    </li>
                    <li>
                        <button type="submit" class="dropdown-item" onclick="sendJ(<?= ($idx) ?>)">Jordan</a>
                    </li>
                    <li>
                        <button type="submit" class="dropdown-item" onclick="sendK(<?= ($idx) ?>)">Krzysztof</a>
                    </li>
                    <li>
                        <button type="submit" class="dropdown-item" onclick="sendR(<?= ($idx) ?>)">Ray</a>
                    </li>
                </ul>
            </div>
            <p class="card-text">
                <small class="text-muted">Posted by
                    <span id="author<?= ($idx) ?>"><?= ($item['author']) ?></span>
                    on
                    <span id="created<?= ($idx) ?>"><?= ($item['created']) ?></span>
                </small>
            </p>
        </div>
    </div>
<?php endforeach; ?>

    <script>
        function index(aa){
            let created = document.querySelector(`#created${aa}`)
            let title = document.querySelector(`#title${aa}`)
            let content = document.querySelector(`#content${aa}`)
            let author = document.querySelector(`#author${aa}`)
            let imageurl = document.querySelector(`#imageurl${aa}`)

        data = {
            id: 1,
            created: created.textContent,
            title: title.textContent,
            content: content.textContent,
            author: author.textContent,
            imageurl: imageurl.src
        }
        console.log(data)
        return data;
    }
        function test(x) {
                    data = index(x);
                    jsonbody = JSON.stringify(data)
                    fetch('http://192.168.0.109:6969/', {
                        method: 'POST',
                        body: jsonbody
                    });
                    console.log(jsonbody)
                }

        function sendT(x) {
            data = index(x);
            jsonbody = JSON.stringify(data)
            fetch("http://192.168.0.244/socialapp/share", {
                method: 'POST',
                body: jsonbody
            })
            console.log("Sent boi")
        }



        function sendJ(x) {
            data = index(x)
            jsonbody = JSON.stringify(data)
            fetch('http://192.168.0.0', {
                method: 'POST',
                body: jsonbody
            });
            console.log(jsonbody)
        }


        function sendK(x) {
            data = index(x);
            jsonbody = JSON.stringify(data)
            fetch('http://192.168.0.221:8080/', {
                method: 'POST',
                body: jsonbody
            });
            console.log(jsonbody)
        }



        function sendR(x) {
            data = index(x);
            jsonbody = JSON.stringify(data)
            fetch('http://192.168.0.195/Group-Awareness/others', {
                method: 'POST',
                body: jsonbody
            });
            console.log(jsonbody)
        }
    </script>



