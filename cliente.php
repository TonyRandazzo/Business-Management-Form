<?php
class Cliente {
    private $nome;
    private $cognome;
    private $email;

    public function __construct($nome, $cognome, $email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
    }

    public function visualizzaDatiSalvati() {
        $output = "<h2>Dati Cliente Salvati</h2>";
        $output .= "<p>Nome: " . $this->nome . "</p>";
        $output .= "<p>Cognome: " . $this->cognome . "</p>";
        $output .= "<p>Email: " . $this->email . "</p>";

        return $output;
    }
}
?>
