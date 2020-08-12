function longTimeWork(workFine = true, errorMessage = "default-message") {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            (workFine) ? resolve(200) : reject(errorMessage);
        }, 1000);
    })
}

function usingLongTimeWork() {
    longTimeWork(false, "error-messsage")  // try true/false
    .then(function (e) {
        console.log(e) ;
    })
    .catch(function (e) {
        console.log(e) ;
    })
}

usingLongTimeWork();
