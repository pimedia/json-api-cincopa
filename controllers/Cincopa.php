<?php
/*
Controller name: Cincopa
Controller description: Cincopa Media RESTful Listing for any user
 Controller Author: Ali Qureshi
  Controller Author Twitter: @parorrey
  Controller Author Website: parorrey.com
  2019-05-25
*/

class JSON_API_Cincopa_Controller{
  
public function albums() {
   global $json_api, $wpdb;
   
    if (!$json_api->query->user_id) {
			$json_api->error(__('You must include a "user_id" var in your request.', 'json-api-cincopa'));
		}else $user_id = $json_api->query->user_id;

   if(!$json_api->query->sort) $order = ' ASC';
   else $order = ' DESC';

	$oReturn = new stdClass();
	//$cincopaId = get_site_option('bp_cp_uid');
	$table_name = $wpdb->base_prefix . 'bp_cp_galleries';
	
	
	$sql = "SELECT * FROM $table_name WHERE uID='$user_id' AND status='1' ORDER BY ID".$order;
    $results = $wpdb->get_results($sql);
	
	foreach($results as $k){
		 $aTemp = new stdClass();
   
            $aTemp->fid = $k->fID;
			$aTemp->title = $k->gal_title;   
			$aTemp->thumbnail = 'http://www.cincopa.com/media-platform/api/thumb.aspx?fid='.$k->fID;
            $aTemp->date_modified = $k->dateModified;  
			
			$oReturn->albums[] = $aTemp;
		
		}
   	
    return $oReturn;
  }
  
 
public function album_items() {
   global $json_api;
   
    if (!$json_api->query->fid) {
			$json_api->error(__('You must include a "fid" var in your request.', 'json-api-cincopa'));
		}else $fid = $json_api->query->fid;

	$oReturn = new stdClass();
	
 	if($json_api->query->format=='flv') $format = '';
	elseif($json_api->query->format=='mp4') $format = '&content=d:mp4_hd';
	else $format = '&content=d:original';
	 
 $url = 'http://www.cincopa.com/media-platform/runtime/xspf.aspx?fid='.$fid.$format; 

$xml = simplexml_load_file($url);
$namespaces = $xml->getNamespaces(true); // get namespaces

// iterate items and store in an array of objects
$items = array();
foreach ($xml->trackList->track as $item) {

  $tmp = new stdClass(); 
  $tmp->title = trim((string) $item->title);
  $tmp->description  = trim((string) $item->annotation);  
  $tmp->image  = trim((string) $item->image);
  $tmp->content  = trim((string) $item->location);
 
  // add parsed data to the array
  $oReturn->items[] = $tmp;
}
    
  
 
    return $oReturn;
  }
  
}