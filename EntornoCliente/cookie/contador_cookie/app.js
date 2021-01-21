const conta = document.querySelector(".contador");
if (document.cookie.length > 0) {
        let tmp = document.cookie;
        tmp = parseInt(
                tmp
                        .split("=")
                        .filter((v) => parseInt(v) > 0)
                        .join()
        );
        conta.innerHTML = document.cookie = `contador=${tmp + 1}`;
} else {
        conta.innerHTML = document.cookie = "contador=1";
}
