
<div  class="widget" style="margin: 0px; min-height: 0px; background-color: blue;">
    <p style="background-color: blue;">Danh mục sản phẩm</p>
</div>
<style>
   .list-menu li a {
    color: #685e52;
    line-height: 34px;
    padding: 0px 11px 0px 15px;
    display: block;
    width: 100%;
    font-size: 15px;
    text-decoration: none;

    
}
.list-menu li a:hover
{
    border: none;
    color:blue;
}

.list-menu ul {
    margin-bottom: 0;
    background-color: white;
}
</style>
<?php
$listcat = $this->Mcategory->category_menu(0);
$html_menu='<ul class="main-ul">';
foreach ($listcat as $menu) {
    $parentid = $menu['id'];
    $submenu = $this->Mcategory->category_menu($parentid);
    $html_menu.='<li>';
    $html_menu.="<a href='san-pham/".$menu['link']." ' title=' ".$menu['name']."'>";
    $html_menu.=$menu['name'];
    if(!empty($submenu)){
        $html_menu.='<i class="fa fa-angle-right pull-right" aria-hidden="true">';
    }
    $html_menu.='</i>';
    $html_menu.="</a>";
    if(count($submenu))
    {
        $html_menu.='<ul class="sub">';
        foreach ($submenu as $menu1){
            $html_menu.='<li>';
            $html_menu.="<a href='san-pham/".$menu1['link']." ' title=' ".$menu1['name']." '> ".$menu1['name']."</a>";
            $html_menu.="</li>";    
        }
        $html_menu.="</ul>";
    }
    $html_menu.="</li>";
}
$html_menu.="</ul>";
echo $html_menu;
?>  