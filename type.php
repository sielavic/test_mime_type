foreach ($new_images as $key => $commentFile) {
                $name = $commentFile['name'];
                    if(preg_match('/^.*\.(png|jpg|jpeg)$/i', $name)){
                    $new_images[$key]['type'] = 'image';
                } else {
                    $new_images[$key]['type'] = 'document';
                        if(preg_match('/^.*\.(doc|docx|jpeg|xls|xlsx)$/i', $name)){
                        $new_images[$key]['type'] = 'msdocument';
                    }
                        if(preg_match('/^.*\.(pdf)$/i', $name)){
                        $new_images[$key]['type'] = 'pdf';
                    }
                }
            }
