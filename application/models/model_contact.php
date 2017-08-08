<?php

class Model_Contact extends Model
{
	
	public function loadList()
	{	
		$fc = fopen(APP_ROOT.'/data/contacts.csv', 'rt'); 
		if ($fc) {	
			$contacts = array ();
			while (!feof($fc))
			{
				$st=fgets($fc);
				if ($st<>''){
					list($id,$name,$email,$phone)=explode(';',$st);
					$contacts[]= [
						'id'=>$id,
						'name'=>$name,
						'email'=>$email,
						'phone'=>$phone
					];
				}
			}
		}
		else echo "Ошибка при открытии файла";
		fclose($fc);
		return $contacts;
	}
	
	public function getNextId()
	{	
		$fc = fopen(APP_ROOT.'/data/contacts.csv', 'rt'); 
		if ($fc) {	
			$contacts = array ();
			while (!feof($fc))
			{
				$st=fgets($fc);
				if ($st<>''){
					list($id,$name,$email,$phone)=explode(';',$st);
					$contacts[]= [
						'id'=>$id,
						'name'=>$name,
						'email'=>$email,
						'phone'=>$phone
					];
				}
			}
		}
		else echo "Ошибка при открытии файла";
		fclose($fc);
		
		if (count($contacts)===0) {
			$new_id = 1;
		} else {
			$c = count($contacts)-1;
			$new_id = ($contacts[$c]['id'])+1;	
		}
		return $new_id;
	}
	
	public function load($id)
	{	
		
	}
	 
	public function add($formData)
	{	
	
		$fp = fopen(APP_ROOT.'/data/contacts.csv', 'at'); // Текстовый режим
		if ($fp) {		
				$Id = $this->getNextId();
				$st = $Id.';'.$formData["name"].';'.$formData['email'].';'.$formData['phone'].';'."\n";
				fwrite($fp, $st);
		}
		else echo "Ошибка при открытии файла";
		fclose($fp);
		//include 'index.php';
		
	}
	
	public function delete($id)
	{	
		$fc = fopen(APP_ROOT.'/data/contacts.csv', 'rt'); 
		if ($fc) {	
			$contacts = array ();
			while (!feof($fc))
			{
				$st=fgets($fc);
				if ($st<>''){
					list($id,$name,$email,$phone)=explode(';',$st);
					$contacts[]= [
						'id'=>$id,
						'name'=>$name,
						'email'=>$email,
						'phone'=>$phone
					];
				}
			}
		}
		else echo "Ошибка при открытии файла";
		fclose($fc);
		
		$c = count($contacts)-1;	
		//if (isset($id)){
			for($i = 0; $i <= $c; $i++) {
			  if($contacts[$i]['id'] == $id) {
					//var_dump($contacts[$i]);
					unset($contacts[$i]); 
					break;
				}
			};
		//}
		//var_dump($contacts);
		$c = count($contacts)-1;
		$file = fopen(APP_ROOT.'/data/contacts.csv', "w");
		$st='';
		var_dump($c);
		if (file) {	
			for($i = 0; $i <= $c; $i++) {
				$st = $st.$contacts[$i]['id'].';'.$contacts[$i]["name"].';'.$contacts[$i]['email'].';'.$contacts[$i]['phone']."\n";
			};
			//var_dump($st);
		}
		else echo "Ошибка при открытии файла";
		fwrite($file, $st);
		fclose($file);
	}
}
