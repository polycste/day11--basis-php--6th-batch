<?php
class math 
{
  public function sin_m($value='0')
{
     echo "Sin ($value)";
     return sin ($value);
}
 public function cos_m($value='0')
{
     echo "Cos ($value)";
     return cos ($value);
}
 public function tan_m($value='0')
{
     echo "Tan ($value)";
     return tan ($value);
}
 public function cot_m($value='0')
{
     echo "Cot ($value)";
     return 1/ tan ($value);
}
protected function cot_m($value='90')
{
echo "Cot ($value)";
return 1/ tan($value);
}
 public function sqr_m($value='0')
{
echo "sqr($value)";
return $value * $value;
}


}

?>