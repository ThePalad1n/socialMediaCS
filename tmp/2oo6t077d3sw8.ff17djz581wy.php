<div class='d-flex justify-content-center align-items-center my-5'>
    <div class="col-md-8">
        <p class=>Make a Post:</p>
        <label for="author">Name:
        </label>
        <br>
            <input type="text" id="a" name="author">
                <br>
                    <label for="title">Title:
                    </label>
                    <br>
                        <input type="text" id="t" name="title">
                            <br>
                                <label for="content">Post:
                                </label>
                                <br>
                                    <textarea class="posting d-flex flex-column align-items-center" id="con" row='10' col='100' name="feed" minlength="1" placeholder="Whats On Your Mind?"></textarea>
                                    <label for="imgurl">Image URL:
                                    </label>
                                    <br>
                                        <input type="text" id="i" name="imgurl">
                                            <button class="btn btn-light mx-5" type="submit" onclick="getValueInput()">
                                                Post
                                            </button>
                                        </div>
                                    </div>
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
                                            const getValueInput = () => {
                                                let t = document.querySelector(`#t`).value
                                                console.log(t)
                                                let con = document.querySelector(`#con`).value
                                                console.log(con)
                                                let a = document.querySelector(`#a`).value
                                                console.log(a)
                                                let i = document.querySelector(`#i`).value
                                                console.log(i)

                                                data = {
                                                    id: 1,
                                                    created: Date.now(),
                                                    title: t,
                                                    content: con,
                                                    author: a,
                                                    imageurl: i
                                                }
                                                console.log(data)

                                                jsonbody = JSON.stringify(data)
                                                fetch('http://192.168.0.109:6969/', {
                                                    method: 'POST',
                                                    body: jsonbody
                                                });
                                                console.log(jsonbody)
                                                loation.reload()
                                            }
                                            


                                            function index(aa) {
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
