<?
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*$string = 'a:10:{s:3:"key";s:5:"GI567";s:9:"retry-key";s:32:"9baddaa63db0956a36a9739b7614e304";s:8:"chain_id";s:4:"1626";s:5:"store";a:27:{s:2:"id";s:4:"1626";s:8:"store_id";s:8:"00304206";s:10:"shared_key";s:12:"WPHYCRU6NQLG";s:10:"verify_url";s:57:"http://www.gudangimpor.com/modules/myshortcart/verify.php";s:12:"company_name";s:11:"GudangImpor";s:13:"business_name";s:11:"GudangImpor";s:16:"activated_status";s:1:"1";s:23:"internet_payment_status";s:1:"1";s:6:"status";s:1:"1";s:15:"contact_address";s:39:"Jl. Mawar Merah Raya No. 8
Duren Sawit";s:13:"contact_email";s:20:"dika@gudangimpor.com";s:13:"contact_phone";s:13:"+628158004039";s:18:"percentage_general";s:1:"0";s:24:"percentage_communication";s:1:"0";s:19:"percentage_shipping";s:1:"0";s:21:"percentage_idescribed";s:1:"0";s:16:"nb_rates_general";s:1:"0";s:19:"total_rates_general";s:1:"0";s:22:"nb_rates_communication";s:1:"0";s:25:"total_rates_communication";s:1:"0";s:17:"nb_rates_shipping";s:1:"0";s:20:"total_rates_shipping";s:1:"0";s:19:"nb_rates_idescribed";s:1:"0";s:22:"total_rates_idescribed";s:1:"0";s:16:"mverified_status";s:1:"1";s:3:"src";s:0:"";s:21:"store_payment_methods";s:5:";1;2;";}s:8:"customer";a:24:{s:4:"type";s:27:"saveMemberOrderTransactions";s:14:"paymentmenthod";s:1:"1";s:7:"country";s:3:"360";s:16:"shipping_country";s:3:"360";s:6:"c_name";s:18:"Reisa Kharismiawan";s:7:"c_email";s:23:"reyza_phoenix@yahoo.com";s:10:"birth_date";s:2:"15";s:11:"birth_month";s:2:"05";s:10:"birth_year";s:4:"1990";s:8:"ch_phone";s:12:"087857090999";s:8:"cm_phone";s:12:"087857090999";s:8:"cw_phone";s:12:"087857090999";s:9:"c_address";s:64:" Plaza Asia Office Park Unit 3 ,  Jl. Jenderal Sudirman Kav. 59 ";s:4:"city";s:7:"Jakarta";s:5:"state";s:7:"Jakarta";s:12:"country_name";s:9:"INDONESIA";s:7:"zipcode";s:5:"12190";s:19:"shippinginformation";s:1:"1";s:16:"shipping_address";s:64:" Plaza Asia Office Park Unit 3 ,  Jl. Jenderal Sudirman Kav. 59 ";s:13:"shipping_city";s:7:"Jakarta";s:14:"shipping_state";s:7:"Jakarta";s:21:"shipping_country_name";s:9:"INDONESIA";s:16:"shipping_zipcode";s:5:"12190";s:15:"additional_info";s:0:"";}s:9:"sessionid";s:0:"";s:6:"basket";s:104:"TaylorSwiftsREDKeds,890000.00,1,890000.00;ShippingCost,0.00,1,0.00;Service Charges,17800.00,1,17800.00";s:9:"words-ipg";s:40:"b018250cab8c282357cd5a97d958ff838cbf7da4";s:5:"total";s:9:"907800.00";s:13:"server-status";s:10:"PRODUCTION";}';
*/

$string = 'a:10:{s:3:"key";s:5:"GI567";s:9:"retry-key";s:32:"9baddaa63db0956a36a9739b7614e304";s:8:"chain_id";s:4:"1626";s:5:"store";a:27:{s:2:"id";s:4:"1626";s:8:"store_id";s:8:"00304206";s:10:"shared_key";s:12:"WPHYCRU6NQLG";s:10:"verify_url";s:57:"http://www.gudangimpor.com/modules/myshortcart/verify.php";s:12:"company_name";s:11:"GudangImpor";s:13:"business_name";s:11:"GudangImpor";s:16:"activated_status";s:1:"1";s:23:"internet_payment_status";s:1:"1";s:6:"status";s:1:"1";s:15:"contact_address";s:39:"Jl. Mawar Merah Raya No. 8 Duren Sawit";s:13:"contact_email";s:20:"dika@gudangimpor.com";s:13:"contact_phone";s:13:"+628158004039";s:18:"percentage_general";s:1:"0";s:24:"percentage_communication";s:1:"0";s:19:"percentage_shipping";s:1:"0";s:21:"percentage_idescribed";s:1:"0";s:16:"nb_rates_general";s:1:"0";s:19:"total_rates_general";s:1:"0";s:22:"nb_rates_communication";s:1:"0";s:25:"total_rates_communication";s:1:"0";s:17:"nb_rates_shipping";s:1:"0";s:20:"total_rates_shipping";s:1:"0";s:19:"nb_rates_idescribed";s:1:"0";s:22:"total_rates_idescribed";s:1:"0";s:16:"mverified_status";s:1:"1";s:3:"src";s:0:"";s:21:"store_payment_methods";s:5:";1;2;";}s:8:"customer";a:24:{s:4:"type";s:27:"saveMemberOrderTransactions";s:14:"paymentmenthod";s:1:"1";s:7:"country";s:3:"360";s:16:"shipping_country";s:3:"360";s:6:"c_name";s:18:"Reisa Kharismiawan";s:7:"c_email";s:23:"reyza_phoenix@yahoo.com";s:10:"birth_date";s:2:"15";s:11:"birth_month";s:2:"05";s:10:"birth_year";s:4:"1990";s:8:"ch_phone";s:12:"087857090999";s:8:"cm_phone";s:12:"087857090999";s:8:"cw_phone";s:12:"087857090999";s:9:"c_address";s:64:" Plaza Asia Office Park Unit 3 ,  Jl. Jenderal Sudirman Kav. 59 ";s:4:"city";s:7:"Jakarta";s:5:"state";s:7:"Jakarta";s:12:"country_name";s:9:"INDONESIA";s:7:"zipcode";s:5:"12190";s:19:"shippinginformation";s:1:"1";s:16:"shipping_address";s:64:" Plaza Asia Office Park Unit 3 ,  Jl. Jenderal Sudirman Kav. 59 ";s:13:"shipping_city";s:7:"Jakarta";s:14:"shipping_state";s:7:"Jakarta";s:21:"shipping_country_name";s:9:"INDONESIA";s:16:"shipping_zipcode";s:5:"12190";s:15:"additional_info";s:0:"";}s:9:"sessionid";s:0:"";s:6:"basket";s:104:"TaylorSwiftsREDKeds,890000.00,1,890000.00;ShippingCost,0.00,1,0.00;Service Charges,17800.00,1,17800.00";s:9:"words-ipg";s:40:"b018250cab8c282357cd5a97d958ff838cbf7da4";s:5:"total";s:9:"907800.00";s:13:"server-status";s:10:"PRODUCTION";}';
//$string = 'a:10:{s:3:"key";s:11:"brodo_93429";s:9:"retry-key";s:32:"20969fc7e98d0a59d096e2ba9b16ce39";s:8:"chain_id";s:3:"485";s:5:"store";a:27:{s:2:"id";s:3:"485";s:8:"store_id";s:8:"00150796";s:10:"shared_key";s:12:"8QB7SGCLY2UW";s:10:"verify_url";s:44:"http://bro.do/modules/myshortcart/verify.php";s:12:"company_name";s:28:"PT Harlanda Putera Indonesia";s:13:"business_name";s:5:"Brodo";s:16:"activated_status";s:1:"1";s:23:"internet_payment_status";s:1:"1";s:6:"status";s:1:"1";s:15:"contact_address";s:48:"Rawa Simprug 1A no.1Grogol SelatanKebayoran Lama";s:13:"contact_email";s:11:"info@bro.do";s:13:"contact_phone";s:12:"081224697199";s:18:"percentage_general";s:2:"18";s:24:"percentage_communication";s:1:"0";s:19:"percentage_shipping";s:1:"0";s:21:"percentage_idescribed";s:1:"0";s:16:"nb_rates_general";s:1:"1";s:19:"total_rates_general";s:2:"18";s:22:"nb_rates_communication";s:1:"0";s:25:"total_rates_communication";s:1:"0";s:17:"nb_rates_shipping";s:1:"0";s:20:"total_rates_shipping";s:1:"0";s:19:"nb_rates_idescribed";s:1:"0";s:22:"total_rates_idescribed";s:1:"0";s:16:"mverified_status";s:1:"1";s:3:"src";s:0:"";s:21:"store_payment_methods";s:5:";1;2;";}s:8:"customer";a:24:{s:4:"type";s:27:"saveMemberOrderTransactions";s:14:"paymentmenthod";s:1:"1";s:7:"country";s:3:"360";s:16:"shipping_country";s:3:"360";s:6:"c_name";s:13:"Murphy suheri";s:7:"c_email";s:22:"murphysuheri@gmail.com";s:10:"birth_date";s:0:"";s:11:"birth_month";s:0:"";s:10:"birth_year";s:0:"";s:8:"ch_phone";s:12:"085763444436";s:8:"cm_phone";s:12:"081370832886";s:8:"cw_phone";s:12:"081370832886";s:9:"c_address";s:58:"jl. Aluminium 1 no. 37 tanjung mulia (sebelah gg bahagia) ";s:4:"city";s:5:"medan";s:5:"state";s:14:"north sumatera";s:12:"country_name";s:9:"INDONESIA";s:7:"zipcode";s:5:"20241";s:19:"shippinginformation";s:1:"2";s:16:"shipping_address";s:58:"jl. Aluminium 1 no. 37 tanjung mulia (sebelah gg bahagia) ";s:13:"shipping_city";s:5:"medan";s:14:"shipping_state";s:14:"north sumatera";s:21:"shipping_country_name";s:9:"INDONESIA";s:16:"shipping_zipcode";s:5:"20241";s:15:"additional_info";s:0:"";}s:9:"sessionid";s:0:"";s:6:"basket";s:93:"Signore Low Vintage Brown Black Sole,485000.00,1,485000.00;Shipping Cost ,22000.00,1,22000.00";s:9:"words-ipg";s:40:"ff3a0b49086a36cb91e63823d4348178e6918f33";s:5:"total";s:9:"507000.00";s:13:"server-status";s:10:"PRODUCTION";}';

$data = unserialize($string);
print_r($data);

?>