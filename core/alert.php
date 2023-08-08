<?php
class Alert
{
    private string $titre;
    private string $message;

    // Accesorios
    // Los setters
    public function setTitre(string $texte)
    {
        $this->titre = $texte;
    }

    public function setMessage(string $texte)
    {
        $this->message = $texte;
    }

    // Lsos getters
    public function getTitre()
    {
        return $this->titre;
    }
    public function getMessage()
    {
        return $this->message;
    }

    
    public function __toString()
    {
        $texte = "
            <div class='alert alert-danger' role='alert'>
                <h4>{$this->titre}</h4>
                {$this->message}
            </div>
            ";

        return $texte;
    }
}
