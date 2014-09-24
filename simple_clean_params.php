<?
ini_set('display_errors', 1);
error_reporting(E_ALL);
$test = array("B"=>"test't","C"=>"<script>asdf's</script>");
function doCleanParams($data) {
    Lib(array('class.inputfilter_clean'));
    
    $arr = array();
    foreach ($data as $key => $value) {
        $post = stripslashes(mysql_real_escape_string($value));
        $tags = array('br','img','div');
        $attr = array('goods','style');
        $tag_method = 1;
        $attr_method = 0;
        $xss_auto = 1;

        $myFilter = new InputFilter($tags, $attr, $tag_method, $attr_method, $xss_auto);
        // process input
        $clean = $myFilter->process($post);         
        $arr[$key] = $clean; 
    }
    return $arr;
}

$data = doCleanParams($test);
print_r($data);

?>