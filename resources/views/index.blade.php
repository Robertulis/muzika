<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio List</title>
    <style>


#form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 400px;
}
#form{
    display: none;
   margin-left: 70%;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
  font-weight: bold;
}

input,
button {
  margin-bottom: 16px;
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #4caf50;
  color: #fff;
  cursor: pointer;
  border: none;
}

button:hover {
  background-color: #45a049;
}

/* Optional: Add responsive styles */
@media screen and (max-width: 600px) {
  #form {
    width: 80%;
  }
}

      </style>
</head>
<body>
    
    <x-header>

    </x-header>

    @include('partials._search')
    <div id="form" >
<form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Nosaukums" >
    <input type="text" name="artist" placeholder="Izpildītājs">
    <label for="src">Mūzika</label>
    <input type="file" name="src" id="">
    <label for="cover"> Attēls</label>
    <input type="file" name="cover">

    <button type="submit">Iesniegt</button>

</form>
</div>

    <h1>Audio List</h1>
    <div class="Audio">
        @foreach($Songs as $Song)
            <div class="container">
                <div class="title">{{$Song->title}}</div>
                <img src="{{url($Song->cover)}}" alt="">
                <div>{{$Song->artist}}</div>
                <audio src="{{url($Song->src)}}" controls class="audio"></audio>
            </div>
        @endforeach
    </div>




    

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var audioElements = document.querySelectorAll(".audio");

            audioElements.forEach(function (audio) {
                audio.addEventListener("play", function () {
                    pauseOtherAudios(audio);
                });
            });

            function pauseOtherAudios(currentAudio) {
                audioElements.forEach(function (audio) {
                    if (audio !== currentAudio && !audio.paused) {
                        audio.pause();
                    }
                });
            }
        });
  
        const music = document.getElementById('music');
const form = document.getElementById('form');

music.addEventListener('click', function() {
    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
});
    </script>
</body>
</html>