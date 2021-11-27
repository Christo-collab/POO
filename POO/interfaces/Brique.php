<?php

class Brique implements Texture, Volume
{

    public function getMatiere(): string
    {
        return 'Terre';
    }

    public function getCouleur(): string
    {
        return 'Rouge';
    }


    public function getForme():string
    {
        return 'Parallélépipèdique';
    }

    


}
