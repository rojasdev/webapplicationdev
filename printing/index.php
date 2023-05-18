<?php
			$fp = fopen(date("Y-m-d").'-data.txt', 'w');
			if (!$fp){
			  die('no connection');
			}

			$data = PHP_EOL . PHP_EOL . 
			str_pad('NEW VENTURE SUPERMART',30," ",STR_PAD_BOTH) . PHP_EOL . 
			str_pad('LASALLE AVENUE, BACOLOD CITY',30," ",STR_PAD_BOTH) . PHP_EOL . 
			str_pad('Tel No: (034) 4321187 TIN# 138-906-917-XXX',30," ",STR_PAD_BOTH) . PHP_EOL .
			str_pad('Operated by: New Venture Inc.',30," ",STR_PAD_BOTH) . PHP_EOL .
			str_pad('Date: '.date('M d, Y').'   Time: '.date('H:ia'),24," ",STR_PAD_BOTH). PHP_EOL . PHP_EOL .
			'Cashier: '.'getCasher()'. PHP_EOL . PHP_EOL;
			$data .= 'Sales # '. PHP_EOL;
			$data .= '------------------------------'. PHP_EOL;
			$data .= 'Description             Amount'. PHP_EOL;
			$data .= '------------------------------'. PHP_EOL;
			$count = 0;
			$total = 0;
			// datahere
			$data .= 'Product AV           1@210.25'. PHP_EOL ;
			$data .= '                       210.25'. PHP_EOL ;
			$data .= 'Product B             2@10.50'. PHP_EOL ;
			$data .= '                        21.00'. PHP_EOL ;
			// end data
			$data .= '------------------------------'. PHP_EOL .
					'Total Items: '. $count. PHP_EOL;
			$data .='Sub Total '. str_pad(number_format($total,2),20," ", STR_PAD_LEFT). PHP_EOL;	
			$data .='Disc. % '. str_pad('0.00',20," ", STR_PAD_LEFT) . PHP_EOL;	
			$data .='Net Total '. str_pad(number_format($total,2),20," ", STR_PAD_LEFT) . PHP_EOL;	
			$data .='C.Tend. '. str_pad('0.00',20," ", STR_PAD_LEFT) . PHP_EOL;
			$data .='Change '. str_pad('0.00',20," ", STR_PAD_LEFT) . PHP_EOL;
			
			$data .= '------------------------------'. PHP_EOL;
			$data .= "VATTABLE Sales ". str_pad(number_format($total,2),16," ", STR_PAD_LEFT) . PHP_EOL;
			$data .= "VAT 12% ". str_pad(number_format(($total * .12),2),20," ", STR_PAD_LEFT) . PHP_EOL;
			$data .= "Net Sales ". str_pad(number_format(($total - ($total * .12)),2),20," ",STR_PAD_LEFT) . PHP_EOL;
			$data .= '------------------------------'. PHP_EOL ;
			
			$data .= PHP_EOL . PHP_EOL .
			str_pad('THANK YOU FOR SHOPPING WITH US!',24," ",STR_PAD_BOTH) . PHP_EOL .
			str_pad('THIS SERVES AS YOUR OFFICIAL RECEIPT',24," ",STR_PAD_BOTH) . PHP_EOL .
			PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL ;

			// Cut Paper
			//$data .= "\x00\x1Bi\x00";

			if(!fwrite($fp,$data)){
				die('writing failed');
			}
			
			fclose($fp);
			?>
			<a href="test.php">Print</a>
			