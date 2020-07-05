<?php 
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\ORM\TableRegistry;


class UploadImageComponent extends Component
{
    public function upload($name,$file,$folder,$model)
	{	   
	
	 
	    
					
		$max_size	= 0;
		$max_width	= 0;
		$max_height	= 0;
		$fileUploadType = 'image';
		$file_field		= "Filedata";
		$file_counter = 0;
		$upload_path	= WWW_ROOT."upload/".$folder."/";
		$array1_replace = array(' ','--','&quot;','!','@','#','$','%','^','&','*','(',')','_','+','{','}','|',':','"','<','>','?','[',']','\\',';',"'",',',DS,'*','+','~','`','=');
		$array2_replace = array('','','','','','','','','','','','','','','','','','','','','','','','','');
		
		$path_parts = pathinfo($file["name"]);
		$extension = $path_parts['extension'];
		$file_name	= str_replace($array1_replace, $array2_replace, $name).'_'.time().".".$extension;
			if($file['error']=='0')
		{   
			if(move_uploaded_file($file['tmp_name'], $upload_path.$file_name)){
				
				$uploaddir  			= $upload_path;
				$target_path      		= $upload_path.$file_name;

				$widthNew 				= 120;
				$heightNew 				= 90;
				$ext = ".".$extension;
				
				list($width, $height, $type, $attr) = getimagesize($target_path); 
				
				if(($max_width==0 && $max_height == 0)||($max_width==$width && $max_height==$height))
				{	
				
				}
				else{					
					@unlink($target_path);
					$returnstr =  "IMG_DIMENSION_ERROR:Please upload image of size ".$max_width." x ".$max_height." pixels";
				}
				
			}
		}
			
		
		return $file_name;

	}

	
}
