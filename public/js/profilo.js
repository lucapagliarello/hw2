function fetchProducts() {
    fetch("/fetch-prodotti")
        .then(response => response.json())
        .then(displaySavedProducts)
        .catch(error => console.error("Errore nel fetch:", error));
}

function displaySavedProducts(products) {
    console.log("Prodotti salvati:", products);
    const container = document.getElementById('results');
    if (!container) return;

    container.innerHTML = '';

    if (!products.length) {
        const nores = document.createElement('div');
        nores.className = "nores";
        nores.textContent = "Nessun prodotto salvato.";
        container.appendChild(nores);
        return;
    }

    products.forEach(product => {
        const card = document.createElement("div");
        card.classList.add("saved-product-card");

        if (product.thumbnail) {
            const img = document.createElement("img");
            img.src = product.thumbnail;
            img.alt = product.title;
            card.appendChild(img);
        }

        const infoContainer = document.createElement("div");
        infoContainer.classList.add("infoContainer");
        card.appendChild(infoContainer);

        const title = document.createElement("strong");
        title.textContent = product.title;
        infoContainer.appendChild(title);

        const snippet = document.createElement("p");
        snippet.textContent = product.snippet;
        infoContainer.appendChild(snippet);

        const price = document.createElement("p");
        price.textContent = product.price;
        infoContainer.appendChild(price);

        container.appendChild(card);
    });
}

document.addEventListener("DOMContentLoaded", fetchProducts);
