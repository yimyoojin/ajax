<?php
    $data='[
        {"id":"1","name":"Cholodcroft":,"email":"dcroft0@hibu.com"},
        {"id":"2","name":"Levi","email":"wlevi1@blogger.com"},
        {"id":"3","name":"Axcell","email":"laxcell@ebay.co.uk"}
    ]';
    each $_GET["callback"]."(".$data.")";
?>