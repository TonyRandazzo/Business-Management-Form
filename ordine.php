<?php
class Ordine {
    private $id;
    private $prodotto;
    private $quantità;

    public function __construct($id, $prodotto, $quantità) {
        $this->id = $id;
        $this->prodotto = $prodotto;
        $this->quantità = $quantità;
    }

    public function visualizzaDatiSalvati() {
        $output = "<h2>Dati salvati Ordine</h2>";
        $output .= "<p>ID: " . $this->id . "</p>";
        $output .= "<p>Prodotto: " . $this->prodotto . "</p>";
        $output .= "<p>Quantità: " . $this->quantità . "</p>";

        return $output;
    }
}
?>