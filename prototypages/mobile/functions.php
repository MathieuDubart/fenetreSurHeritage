<?php 
//create a function that create an html text bloc
function create_text_bloc($text, $class, $id) {
    $html = '<div class="'.$class.'" id="'.$id.'">'.$text.'</div>';
    return $html;
}

//create a function that create an image bloc
function create_image_bloc($image, $class, $id) {
    $html = '<div class="'.$class.'" id="'.$id.'"><img src="'.$image.'" alt="image" /></div>';
    return $html;
}

//create a function that create a video bloc
function create_video_bloc($video, $class, $id) {
    $html = '<div class="'.$class.'" id="'.$id.'">
                <video src="'.$video.'" controls></video>
            </div>';
    return $html;
}

//create a function that create an html text bloc and image bloc
function create_text_image_bloc($text, $image, $class, $id) {
    $html = '<div class="'.$class.'" id="'.$id.'">
                <img src="'.$image.'" alt="image" />'.$text.'
            </div>';
    return $html;
}

//create a function that create an image and text bloc
function create_image_text_bloc($image, $text, $class, $id) {
    $html = '<div class="'.$class.'" id="'.$id.'">
                <img src="'.$image.'" alt="image" />'.$text.
            '</div>';
    return $html;
}

// create a function that create a title text bloc
function create_title_bloc($text, $class, $id) {
    $html = '<div class="'.$class.'" id="'.$id.'">'.$text.'</div>';
    return $html;
}


?>