var cubeTab = [
    [document.getElementById("1"), document.getElementById("2"), document.getElementById("3")],
    [document.getElementById("4"), document.getElementById("5"), document.getElementById("6")],
    [document.getElementById("7"), document.getElementById("8"), document.getElementById("9")]
]
var winContainer = document.getElementById("winner");


var winMsgX = "Les X ont gagnés";
var winMsgO = "les O ont gagnés";
var currentPlayer = "X";
var gameOver = 0;


// var checkDiag = function (row, col){
//     if (row === 0 && col === 0 && (cubeTab[row+1][col+1] === "X" && cubeTab[row+2][col+2] === "X"))
//     {
//         winContainer.innerHTML = winMsgX;
//         gameOver = 1;
//     }
//     if ( 
//         (cubeTab[row-1][col-1] === "X" && cubeTab[row-2][col-2] === "X") ||
//         (cubeTab[row-1][col+1] === "X" && cubeTab[row-2][col+2] === "X") ||
//         (cubeTab[row+1][col-1] === "X" && cubeTab[row+2][col-2] === "X"))
//     {
        
//     }
//     if ((cubeTab[row+1][col+1] === "O" && cubeTab[row+2][col+2] === "O") || 
//         (cubeTab[row-1][col-1] === "O" && cubeTab[row-2][col-2] === "O") && cubeTab[row][col] === "O")
//     {
//         winContainer.innerHTML = winMsgO;
//         gameOver = 1;
//     }
// }

// var checkVert = function (row, col){
//     if (cubeTab[row+1])
// }

var check = function (row, col){
    if ((cubeTab[0][0].innerHTML === "X" && cubeTab[0][1].innerHTML === "X" && cubeTab[0][2].innerHTML === "X")
        || (cubeTab[0][0].innerHTML === "O" && cubeTab[0][1].innerHTML === "O" && cubeTab[0][2].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[0][0].innerHTML === "X" && cubeTab[1][1].innerHTML === "X" && cubeTab[2][2].innerHTML === "X")
        || (cubeTab[0][0].innerHTML === "O" && cubeTab[1][1].innerHTML === "O" && cubeTab[2][2].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[2][0].innerHTML === "X" && cubeTab[1][1].innerHTML === "X" && cubeTab[0][2].innerHTML === "X")
        || (cubeTab[2][0].innerHTML === "O" && cubeTab[1][1].innerHTML === "O" && cubeTab[0][2].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[1][0].innerHTML === "X" && cubeTab[1][1].innerHTML === "X" && cubeTab[1][2].innerHTML === "X")
        || (cubeTab[1][0].innerHTML === "O" && cubeTab[1][1].innerHTML === "O" && cubeTab[1][2].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[2][0].innerHTML === "X" && cubeTab[2][1].innerHTML === "X" && cubeTab[2][2].innerHTML === "X")
        || (cubeTab[2][0].innerHTML === "O" && cubeTab[2][1].innerHTML === "O" && cubeTab[2][2].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[2][0].innerHTML === "X" && cubeTab[1][0].innerHTML === "X" && cubeTab[0][0].innerHTML === "X")
        || (cubeTab[2][0].innerHTML === "O" && cubeTab[1][0].innerHTML === "O" && cubeTab[0][0].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[2][1].innerHTML === "X" && cubeTab[1][1].innerHTML === "X" && cubeTab[0][1].innerHTML === "X")
        || (cubeTab[2][1].innerHTML === "O" && cubeTab[1][1].innerHTML === "O" && cubeTab[0][1].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
    if ((cubeTab[2][2].innerHTML === "X" && cubeTab[1][2].innerHTML === "X" && cubeTab[0][2].innerHTML === "X")
        || (cubeTab[2][2].innerHTML === "O" && cubeTab[1][2].innerHTML === "O" && cubeTab[0][2].innerHTML === "O"))
    {
        winContainer.innerHTML = "GAME OVER";
        gameOver = 1;
    }
}


for (let index = 0; index < cubeTab.length; index++) {
    cubeTab[0][index].addEventListener("mousedown", event => {
        if (cubeTab[0][index].innerHTML !== "X" && cubeTab[0][index].innerHTML !== "O" && gameOver !== 1)
        {
            cubeTab[0][index].innerHTML = currentPlayer;
            (currentPlayer === "X" ? currentPlayer = "O" : currentPlayer = "X")
            check(0, index);
        }
    })
    cubeTab[1][index].addEventListener("mousedown", event => {
        if (cubeTab[1][index].innerHTML !== "X" && cubeTab[1][index].innerHTML !== "O" && gameOver !== 1)
        {
            cubeTab[1][index].innerHTML = currentPlayer;
            (currentPlayer === "X" ? currentPlayer = "O" : currentPlayer = "X")
            check(1, index);
        }
    })
    cubeTab[2][index].addEventListener("mousedown", event => {
        if (cubeTab[2][index].innerHTML !== "X" && cubeTab[2][index].innerHTML !== "O" && gameOver !== 1)
        {
            cubeTab[2][index].innerHTML = currentPlayer;
            (currentPlayer === "X" ? currentPlayer = "O" : currentPlayer = "X")
            check(2, index);
        }
    })
}