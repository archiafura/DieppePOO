<?php


class Inscription
{
	public $data;

	public function __construct($data = array())
	{
		$this->data = $data;
	}

	public function input($name)
	{
		echo'<input type="text" name="'. $name .'" ></input>';
		return $name;
	}

	public function select($choix)
    {
        echo'<select name="$choix">
    <option value="" selected>Homme</option>
    <option value="">Femme</option>
    <option value="">Autre</option>
  </select>';
        return $choix;

    }

	public function submit()
	{
		echo'<button type="submit">Envoyer</button>';
	}
}
