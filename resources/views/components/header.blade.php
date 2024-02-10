<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .Audio {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px;
    }

    .container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 10px;
        padding: 20px;
        text-align: center;
        height: 300px; 
        width: 350px;
    }

    .title {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    img {
        width: 200px;
        height: 150px;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    audio {
        width: 100%;
        margin-top: 10px;
    }

    .menu {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .home-container {
            margin-right: 20px;
        }

        .home, .home a{
            background-color: #555;
            color: #fff;
            border: none;
            padding: 8px 15px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .buttons {
            display: flex;
        }

        .menu_button {
            background-color: #555;
            color: #fff;
            border: none;
            padding: 8px 15px;
            margin-right: 10px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }


        .menu_button a {
            color: black;
            text-decoration: none;
        }

</style>

<section class="menu">
    <div class="home-container">
        <button class="home">
            <a href="/">Home</a>
        </button>
    </div>
    <div class="buttons">
        <button class="menu_button">
            <a href="/register">Reģistrēties</a>
        </button>

        <button class="menu_button" onclick="document.form.style= 'display:''block'" id="music">
            Pievieno Mūziku
        </button>
        
    </div>
   
</section>