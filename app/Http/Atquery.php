<?php
namespace App\Http;
class Atquery {
public function real($query){
    $re = array();
    foreach ($query as $key => $value) {
        if(!is_array($value)){
    $$key = str_replace("<script","&lt;script",$value);
    $$key = str_replace("script>","script&gt;",$$key);
    $$key = addslashes($$key);

    $re[$key] = $$key;
        }else{
            $re[$key] = $this->real($value);
        }
    }
    return $re;
        addslashes();
}
}