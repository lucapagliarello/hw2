document.getElementById("form-products").addEventListener("submit", searchProducts);

function searchProducts(event) {
  event.preventDefault();

  const input = document.getElementById("search-input-products");
  const query = input.value.trim();

  fetch("/search?q=" + encodeURIComponent(query))
    .then(response => response.json())
    .then(displayProducts);
}

function displayProducts(json) {
  const container = document.getElementById("results-products");
  container.innerHTML = ""; // pulisce risultati precedenti

  json.shopping_results.forEach(product => {
    const card = document.createElement("div");
    card.classList.add("product-card");

    // Immagine prodotto
    if (product.thumbnail) {
      const img = document.createElement("img");
      img.src = product.thumbnail;
      img.alt = product.title || "Immagine prodotto";
      card.appendChild(img);
    }

    const infoContainer = document.createElement("div");
    infoContainer.classList.add("infoContainer");
    card.appendChild(infoContainer);

    const title = document.createElement("strong");
    title.textContent = product.title || "Titolo non disponibile";
    infoContainer.appendChild(title);

    const snippet = document.createElement("p");
    snippet.textContent = product.snippet || "";
    infoContainer.appendChild(snippet);

    const price = document.createElement("p");
    price.textContent = product.price || "Prezzo non disponibile";
    infoContainer.appendChild(price);

    const saveForm = document.createElement("div");
    saveForm.classList.add("saveForm");
    card.appendChild(saveForm);

    const saveBtn = document.createElement("button");
    saveBtn.textContent = "Salva prodotto";
    saveBtn.type = "button";
    saveBtn.addEventListener("click", () => saveProduct(product));
    saveForm.appendChild(saveBtn);

    const cartBtn = document.createElement("button");
    cartBtn.textContent = "Aggiungi al carrello";
    cartBtn.type = "button";
    cartBtn.addEventListener("click", () => addToCarrello(product));
    saveForm.appendChild(cartBtn);

    container.appendChild(card);
  });
}

function saveProduct(product) {
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const formData = new FormData();
  formData.append("title", product.title || "");
  formData.append("snippet", product.snippet || "");
  formData.append("price", product.price || "");
  formData.append("thumbnail", product.thumbnail || "");

  fetch("/save-product", {
    method: "POST",
    body: formData,
    headers: {
      'X-CSRF-TOKEN': csrfToken
    }
  })
  .then(response => response.json())
  .then(data => {
    if (data.ok) alert("Prodotto salvato!");
    else alert("Errore nel salvataggio");
  })
  .catch(() => alert("Errore nel salvataggio"));
}

function addToCarrello(product) {
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const formData = new FormData();
  formData.append("title", product.title || "");
  formData.append("snippet", product.snippet || "");
  formData.append("price", product.price || "");
  formData.append("thumbnail", product.thumbnail || "");

  fetch("/add-to-cart", {
    method: "POST",
    body: formData,
    headers: {
      'X-CSRF-TOKEN': csrfToken
    }
  })
  .then(response => response.json())
  .then(data => {
    if (data.ok) alert("Prodotto aggiunto al carrello!");
    else alert("Errore nel carrello: " + (data.error || "errore sconosciuto"));
  })
  .catch(error => {
    console.error("Errore fetch carrello:", error);
    alert("Errore nel carrello");
  });
}
