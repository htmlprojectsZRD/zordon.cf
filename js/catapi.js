fetch('https://api.thecatapi.com/v1/images/search')
    .then(response => response.json())
    .then((data) => {
        let catImg = data[0].url

        let catsImgs = document.createElement("img")
        catsImgs.setAttribute('src', `${catImg}`)

        let catDiv = document.querySelector(".random-cat")
        catDiv.appendChild(catsImgs)
    })
    .catch(err => document.getElementById("error").innerHTML = err)