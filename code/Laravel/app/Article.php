<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use cebe\markdown\Markdown as Markdown;

class Article extends Model
{
    public function parse() 
    {
        //newでインスタンスを作る
        $parser = new Markdown();
        //bodyをパースする
        return $parser->parse($this->blog_text);
    }
    
    public function getMarkBodyAttribute() 
    {
        return $this->parse();
    }
}
