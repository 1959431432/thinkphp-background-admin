<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Think\Template\TagLib;
use Think\Template\TagLib;
/**
 * Mylabel标签库驱动
 */
class Mylabel extends TagLib{
    // 标签定义
    protected $tags   =  array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'select'    => array('attr'=>'id,name,options,values,fieldkey,fieldvalue,style,first','close'=>0),
    );

    public function _select( $tag )
    {
        $first      = $tag['first'];
        $name       = $tag['name'];
        $options    = $tag['options'];
        $values     = $tag['values'];
        $id         = $tag['id'];
        $selected   = $tag['selected'];
        $fieldkey   = $tag['fieldkey'];
        $fieldvalue = $tag['fieldvalue'];

        $parseStr = '<select id="'.$id.'" name="'.$name.'" class="'.$style.'" >';

        if(!empty($first)) {
            $parseStr .= '<option value="" >'.$first.'</option>';
        }

        $parseStr   .= '<?php  foreach($'.$options.' as $key=>$val) { ?>';
        $parseStr   .= '<?php if( '.$selected.' == $val['.$fieldvalue.']){ ?>';
        $parseStr   .= '<option value="<?php echo $val['.$fieldkey.']; ?>" selected="selected"><?php echo $val['.$fieldvalue.']; ?></option>';
        $parseStr   .= '<?php }else{ ?>';
        $parseStr   .= '<option value="<?php echo $val['.$fieldkey.']; ?>"><?php echo $val['.$fieldvalue.']; ?></option>';
        $parseStr   .= '<?php } } ?>';
        $parseStr   .= '</select>';
        return $parseStr;
    }

}