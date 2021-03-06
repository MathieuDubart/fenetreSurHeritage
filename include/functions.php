<?php 
    //create a function that create an html text bloc
    function create_text_bloc($text, $class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'"><p>'.$text.'</p></div>';
        return $html;
    }

    //create a function that create an image bloc
    function create_image_bloc($image, $class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'"><img src="'.$image.'" alt="image" /></div>';
        return $html;
    }
    function create_link_image_bloc($image, $class, $link, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'">
                    <a href="'.$link.'">
                        <img src="'.$image.'" alt="image" />
                    </a>
                </div>';
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
    function create_text_image_bloc($text, $classPara, $image, $classImg, $classDiv, $id, $aos) {
        $html = '<div class="'.$classDiv.'" id="'.$id.'"  data-aos="'.$aos.'">
                    <div class="'.$classPara.'"><p>'.$text.'</p></div>
                    <div class="'.$classImg.'"><img src="'.$image.'" alt="image" /></div>
                </div>';
        return $html;
    }

    //create a function that create an image and text bloc
    function create_image_text_bloc($image, $classImg, $text, $classPara, $classDiv, $id, $aos) {
        $html = '<div class="'.$classDiv.'" id="'.$id.'" data-aos="'.$aos.'">
                    <div class="'.$classImg.'"><img src="'.$image.'" alt="image" /></div>
                    <div class="'.$classPara.'"><p>'.$text.'</p></div>
                </div>';
        return $html;
    }
    function create_image_title_text_bloc($image, $classImg, $textTitle, $classH, $text, $classPara, $classDiv, $id, $aos) {
        $html = '<div class="'.$classDiv.'" id="'.$id.'" data-aos="'.$aos.'">
                    <div class="'.$classImg.'"><img src="'.$image.'" alt="image"></div>
                    <div class="flex-center flex-column">
                        <div class="'.$classH.'"><h1>'.$textTitle.'</h1></div>
                        <div class="'.$classPara.'"><p>'.$text.'</p></div>
                    </div>
                </div>';
        return $html;
    }
    function create_title_text_image_bloc($image, $classImg, $textTitle, $classH, $text, $classPara, $classDiv, $id, $aos) {
        $html = '<div class="'.$classDiv.'" id="'.$id.'" data-aos="'.$aos.'">
                    <div class="flex-center flex-column">
                        <div class="'.$classH.'"><h1>'.$textTitle.'</h1></div>
                        <div class="'.$classPara.'"><p>'.$text.'</p></div>
                    </div>
                    <div class="'.$classImg.'"><img src="'.$image.'" alt="image"></div>
                    
                </div>';
        return $html;
    }

    function create_image_link_text_bloc($image, $classImg, $link, $text, $classPara, $classDiv, $id, $aos) {
        $html = '<div class="'.$classDiv.'" id="'.$id.'" data-aos="'.$aos.'">
                    <a href="'.$link.'"> <img src="'.$image.'" class="'.$classImg.'" alt="image" /> </a>
                    <p class="'.$classPara.'">'.$text.
                '</p></div>';
        return $html;
    }
    function create_link_image_title_bloc($image, $classImg, $link, $classLink, $textTitle, $classH, $classDiv, $id, $aos) {
        $html = '<div class="'.$classDiv.'" id="'.$id.'" data-aos="'.$aos.'">
                    <div class="'.$classLink.'">
                        <a href="'.$link.'">
                            <img src="'.$image.'" class="'.$classImg.'" alt="image" />
                        </a>
                    </div>
                    <div class="'.$classH.'"><h1>'.$textTitle.'</h1></div>
                </div>';
        return $html;
    }

    // create a function that create a title text bloc
    function create_title_bloc($text, $class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'"><h1>'.$text.'</h1></div>';
        return $html;
    }

    //create a function that create an image with link bloc
    function create_image_link_bloc($image, $link, $class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'">
                    <a href="'.$link.'">
                        <img src="'.$image.'" alt="image" />
                    </a>
                </div>';
        return $html;
    }
    
    function create_image_link_download_bloc($image, $link, $dl_name, $class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'">
                    <a href="'.$link.'" download="'.$dl_name.'">
                        <img src="'.$image.'" alt="image" />
                    </a>
                </div>';
        return $html;
    }

    //create a function that create an empty html bloc
    function create_empty_bloc($class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'"></div>';
        return $html;
    }

    //create a function that create a gallery of images
    function create_gallery_bloc($images, $subtitles, $class, $id, $aos) {
        $html = '<div class="'.$class.'" id="'.$id.'" data-aos="'.$aos.'">';
        for ($i=0; $i < count($images); $i++) {
            $html .= '<div class="flex-center flex-column" data-aos="'.$aos.'">
                        <img src="'.$images[$i].'" alt="image" />
                        <p>'.$subtitles[$i].'</p>
                    </div>';
        }
        $html .= '</div>';
        return $html;
    }

?>