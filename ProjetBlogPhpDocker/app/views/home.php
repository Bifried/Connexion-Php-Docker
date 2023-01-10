<?php /** @var App\Entity\User $user */ ?>

<style>@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);


    body {
        background-color: lightcyan;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Raleway', Arial, sans-serif;
        font-weight: bold;
    }

    ul {
        margin: 0;
        padding: 0;
        display: flex;
    }

    li {
        list-style: none;
    }

    a {
        position: relative;
        display: block;
        margin: 0 10px;
        padding: 5px 10px;
        color: #333;
        background: lightcyan;
        transition: background 0.5s ease-in-out;
        font-size: 30px;
        text-decoration: none;
        text-transform: uppercase;
    }
    a:hover {
        background-color:orange;
    }


</style>
<br>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/login">Login</a>
        </li>
        <li>
            <a href="/register">Sign in</a>
        </li>
        <li>
            <a href="http://localhost:8081/">PhpMyAdmin</a>
        </li>
    </ul>
<?php
/** @var App\Entity\Post[] $posts */
foreach ($posts as $post) {
    echo $post->getContent();
}


