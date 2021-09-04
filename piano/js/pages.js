var pages = [["/piano/pages/top/left.html", "/piano/pages/top/middle.html","/piano/pages/top/right.html"],
    ["/piano/pages/mid/left.html","/piano/pages/mid/middle.html","/piano/pages/mid/right.html"],
    ["/piano/pages/bot/left.html", "/piano/pages/bot/middle.html", "/piano/pages/bot/right.html"]];

var pageNbCol = document.getElementById("col").innerHTML;
var pageNbRow = document.getElementById("row").innerHTML;





document.addEventListener("keydown", event => {
    if (event.key === "ArrowLeft")
    {
        pageNbCol--;
        if (pageNbCol == -1)
            pageNbCol = 2;

        window.location.href = pages[pageNbRow][pageNbCol];
    }
    if (event.key === "ArrowRight")
    {
        pageNbCol++;
        if (pageNbCol == 3)
            pageNbCol = 0;

        console.log(pageNbCol);
        window.location.href = pages[pageNbRow][pageNbCol];
    }
    if (event.key === "ArrowUp")
    {
        pageNbRow--;
        if (pageNbRow == -1)
            pageNbRow = 2;

        window.location.href = pages[pageNbRow][pageNbCol];
    }
    if (event.key === "ArrowDown")
    {
        pageNbRow++;
        if (pageNbRow == 3)
            pageNbRow = 0;

        window.location.href = pages[pageNbRow][pageNbCol];
    }
})