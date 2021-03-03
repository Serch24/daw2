const bt = document.querySelector(".bt");
const url = `http://localhost:3431/index.php`;

bt.addEventListener("click", (e) => {
        e.preventDefault();

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = () => {
                if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                                console.log(xhr.responseText);
                        }
                }
        };

        xhr.open("GET", url, true);
        xhr.send();
});
