<!DOCTYPE html>
<html>
<head>
    <title>Gestionale</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Gestionale</h1>

    <div id="cliente-form">
        <h2>Cliente</h2>
        <form id="form_cliente">
            <label for="nome_cliente">Nome:</label>
            <input type="text" id="nome_cliente" name="nome_cliente" required><br><br>

            <label for="cognome_cliente">Cognome:</label>
            <input type="text" id="cognome_cliente" name="cognome_cliente" required><br><br>

            <label for="email_cliente">Email:</label>
            <input type="email" id="email_cliente" name="email_cliente" required><br><br>

            <input type="button" value="Salva Cliente" onclick="salvaCliente()">
        </form>
    </div>

    <div id="fornitore-form">
        <h2>Fornitore</h2>
        <form id="form_fornitore">
            <label for="nome_fornitore">Nome:</label>
            <input type="text" id="nome_fornitore" name="nome_fornitore" required><br><br>

            <label for="cognome_fornitore">Cognome:</label>
            <input type="text" id="cognome_fornitore" name="cognome_fornitore" required><br><br>

            <label for="email_fornitore">Email:</label>
            <input type="email" id="email_fornitore" name="email_fornitore" required><br><br>

            <input type="button" value="Salva Fornitore" onclick="salvaFornitore()">
        </form>
    </div>

    <div id="ordine-form">
    <h2>Ordine</h2>
    <form id="form_ordine">
        <label for="id_ordine">ID Ordine:</label>
        <input type="text" id="id_ordine" name="id_ordine" required><br><br>

        <label for="prodotto">Prodotto:</label>
        <input type="text" id="prodotto" name="prodotto" required><br><br>

        <label for="quantità">Quantità:</label>
        <input type="text" id="quantità" name="quantità" required><br><br>

        <input type="button" value="Salva Ordine" onclick="salvaOrdine()">
    </form>
</div>


    <div id="output_cliente"></div>
    <div id="output_fornitore"></div>
    <div id="output_ordine"></div>
   


<script>
    function mostraPopup(testo) {
        var popupContainer = document.createElement('div');
        popupContainer.className = 'popup-container';

        var popupContent = document.createElement('div');
        popupContent.className = 'popup-content';
        popupContent.innerHTML = testo;

        var closeButton = document.createElement('span');
        closeButton.className = 'close-button';
        closeButton.innerHTML = '&times;'; 
        closeButton.onclick = function () {
            popupContainer.style.display = 'none';
        };

        popupContent.appendChild(closeButton);
        popupContainer.appendChild(popupContent);
        document.body.appendChild(popupContainer);
        popupContainer.style.display = 'flex';
    }

    function salvaCliente() {
        var formData = new FormData(document.getElementById("form_cliente"));

        fetch('salva_cliente.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            mostraPopup(data);
        })
        .catch(error => {
            console.error('Errore:', error);
        });
    }

    function salvaFornitore() {
        var formData = new FormData(document.getElementById("form_fornitore"));

        fetch('salva_fornitore.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            mostraPopup(data);
        })
        .catch(error => {
            console.error('Errore:', error);
        });
    }

    function salvaOrdine() {
        var formData = new FormData(document.getElementById("form_ordine"));

        fetch('salva_ordine.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            mostraPopup(data);
        })
        .catch(error => {
            console.error('Errore:', error);
        });
    }
</script>
</body>
</html>
