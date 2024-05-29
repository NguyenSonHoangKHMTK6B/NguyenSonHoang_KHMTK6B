<?php
    abstract class lopCha{

        abstract protected function prefixname2($name);
        

    }

    class lopCon extends lopCha{
        public function prefixname2($name){
            if($name == "Son Hoang"){
                $prefix = "mr.";
            }elseif($name == "Cam Hieu"){
                $prefix = "mrs.";
            }else{
                $prefix = "";
            }
            return "{$prefix} {$name}";
        }
    }

?>