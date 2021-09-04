var click = document.getElementById("click");
var cube = document.getElementById("cube");

var count = 0;
var colorTab = ["red", "blue", "grey", "black"];

var letters = {
    elements: {
        Q: document.getElementById("q"),
        S: document.getElementById("s"),
        D: document.getElementById("d"),
        F: document.getElementById("f"),
        G: document.getElementById("g"),
        H: document.getElementById("h"),
        J: document.getElementById("j"),
        K: document.getElementById("k"),
        L: document.getElementById("l"),
        M: document.getElementById("m")
    },
    audios: {
        Q: new Audio("/piano/music/q.wav"),
        S: new Audio("/piano/music/s.wav"),
        D: new Audio("/piano/music/d.wav"),
        F: new Audio("/piano/music/f.wav"),
        G: new Audio("/piano/music/g.mp3"),
        H: new Audio("/piano/music/h.mp3"),
        J: new Audio("/piano/music/j.mp3"),
        K: new Audio("/piano/music/k.mp3"),
        L: new Audio("/piano/music/l.mp3"),
        M: new Audio("/piano/music/m.mp3")
    }
}

var element = letters.elements;
var audio = letters.audios;


click.addEventListener("mousedown", event => {
    count++;
    if (count === 4)
    {
        count = 0;
    }
    document.body.style.backgroundColor = colorTab[count];
})


cube.addEventListener("mousedown", event => {
    window.location.href = "/piano/pages/mid/middle.html";
})



document.addEventListener("keydown", event => {
    switch (event.key) {
        case "q":
            element.Q.classList.add("pressed");
            audio.Q.play();
            break;
        case "s":
            element.S.classList.add("pressed");
            audio.S.play();
            break;
        case "d":
            element.D.classList.add("pressed");
            audio.D.play();
            break;
        case "f":
            element.F.classList.add("pressed");
            audio.F.play();
            break;
        case "g":
            element.G.classList.add("pressed");
            audio.G.play();
            break;
        case "h":
            element.H.classList.add("pressed");
            audio.H.play();
            break;
        case "j":
            element.J.classList.add("pressed");
            audio.J.play();
            break;
        case "k":
            element.K.classList.add("pressed");
            audio.K.play();
            break;
        case "l":
            element.L.classList.add("pressed");
            audio.L.play();
            break;
        case "m":
            element.M.classList.add("pressed");
            audio.M.play();
            break;
    }
})

document.addEventListener("keyup", event => {
    switch (event.key) {
        case "q":
            element.Q.classList.remove("pressed");
            audio.Q.pause();
            audio.Q.currentTime = 0;
            break;
        case "s":
            element.S.classList.remove("pressed");
            audio.S.pause();
            audio.S.currentTime = 0;
            break;
        case "d":
            element.D.classList.remove("pressed");
            audio.D.pause();
            audio.D.currentTime = 0;
            break;
        case "f":
            element.F.classList.remove("pressed");
            audio.F.pause();
            audio.F.currentTime = 0;
            break;
        case "g":
            element.G.classList.remove("pressed");
            audio.G.pause();
            audio.G.currentTime = 0;
            break;
        case "h":
            element.H.classList.remove("pressed");
            audio.H.pause();
            audio.H.currentTime = 0;
            break;
        case "j":
            element.J.classList.remove("pressed");
            audio.J.pause();
            audio.J.currentTime = 0;
            break;
        case "k":
            element.K.classList.remove("pressed");
            audio.K.pause();
            audio.K.currentTime = 0;
            break;
        case "l":
            element.L.classList.remove("pressed");
            audio.L.pause();
            audio.L.currentTime = 0;
            break;
        case "m":
            element.M.classList.remove("pressed");
            audio.M.pause();
            audio.M.currentTime = 0;
            break;
    }
})
