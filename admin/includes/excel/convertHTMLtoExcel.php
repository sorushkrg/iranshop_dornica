<?php 

define('TMP_FILES', "../../../test/");

$basePath = ''; // make sure path and dir's are correct.
include_once ($basePath . 'PHPExcel.php');
include_once ($basePath . 'PHPExcel/IOFactory.php');
include_once ($basePath . 'PHPExcel/Writer/Excel2007.php');


class convertHTMLtoExcel{
	
	public $fileName;
	public $htmlFile;
	
	/*
	*
	*/
	public function __construct(){
		$this->fileName = substr(md5(time().rand(1000,9999)), 0, 8);

		if(!is_dir( TMP_FILES )) { // check if temp folder not not exists
			mkdir( TMP_FILES, 0777 ); // create new temp dir for storing xlsx files.
		}
	
	}
	/*
	*	@param : stirng		$content 		// HTML content for convert to excel and PDF
	*	@param : array		$configExcel 	// Config attribute for excel file
	*	@param : array		$configPDF	 	// Config attribute for PDF file
	*
	*	@return : string	$fileName 		// Created file address: 
	*/
	public function generateExcelAndPDF($content,$configExcel,$configPDF){

		$content=str_replace("ي","ی",$content);
		$content=str_replace('ك','ک',$content);

		// Create HTML file
		$this->htmlFile = TMP_FILES . $this->fileName . '.html'; // create new html file under temp folder
		file_put_contents($this->htmlFile,$content); // copy the html contents into tmp created html file
		
		// Call excel function for generate excel file
		$excel = $this->excel($configExcel);
		$pdf = $excel ? $this->PDF($configPDF) : 'false';
		if($pdf)
			return( TMP_FILES . $this->fileName );
	}
	
	/*
	*	@param : stirng		$content 		// HTML content convert to excel
	*	@param : array		$configExcel 	// Config attribute for excel file
	*
	*	@return : string	$fileName 		// Created file address: 
	*/
	public function generateExcel($content,$configExcel){
		
		// Create HTML file
		$this->htmlFile = TMP_FILES . $this->fileName . '.html'; // create new html file under temp folder
		file_put_contents($this->htmlFile,$content); // copy the html contents into tmp created html file
		
		// Call excel function for generate excel file
		$excel = $this->excel($configExcel);
		
		return( TMP_FILES . $this->fileName . '.xlsx' );
	}
	
	/*
	*	@param : stirng		$content 		// HTML content convert to PDF
	*	@param : array		$configPDF	 	// Config attribute for PDF file
	*
	*	@return : string	$fileName 		// Created file address: 
	*/
	public function generatePDF($content,$configPDF){

		$content=str_replace("ي","ی",$content);
		$content=str_replace('ك','ک',$content);
		
		// Create HTML file
		$this->htmlFile = TMP_FILES . $this->fileName . '.html'; // create new html file under temp folder
		file_put_contents($this->htmlFile,$content); // copy the html contents into tmp created html file
		
		// Call excel function for generate PDF file
		
		$pdf = $this->PDF($configPDF);
		
		return( TMP_FILES . $this->fileName . '.pdf' );
	}
	
	/*
	*	@param : array 		$configExcel	// Config Excel attribute, For more reade line : ....
	*
	*	$return : bool		if Excel file is created
	*/
	public function excel($configExcel){
		$objReader = new PHPExcel_Reader_HTML; // new loader
		$objPHPExcel = $objReader->load($this->htmlFile); // load .html file that generated under temp folder

		// Set properties
		foreach($configExcel['properties'] as $key=>$value){
			$setProperties = 'set' . $key;
			$objPHPExcel->getProperties()->{$setProperties}($value);
		}
		
		// right-to-left worksheet
		$objPHPExcel->getActiveSheet()->setRightToLeft(true);
		
		// Text-wrap headre
		foreach($configExcel['wrapCell'] as $wrap){
			$objPHPExcel->getActiveSheet()->getStyle($wrap.$objPHPExcel->getActiveSheet()->getHighestRow())
    				->getAlignment()->setWrapText(true); 	
		}
    
	   /* simple style to make sure all cell's text have HORIZONTAL_LEFT alignment */
		$headerStyle = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
				'wrap' => true,
		     ),
			'font'  => array(
				'name'  => 'Tahoma',
				'bold'  => true,
				'color' => array('rgb' => '000000'),
				'size'  => 14,
			),
			
		);
		

		$style = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		     ),
			'font'  => array(
				'name'  => 'B Titr',
				'bold'  => false,
				'color' => array('rgb' => '000000'),
				'size'  => 12,
			)
		);
		
	

		//Apply the style
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($style);
		// Apply style for header cell
		foreach( $configExcel['headerCell'] as $header ){
			$objPHPExcel->getActiveSheet()->getStyle($header)->applyFromArray($headerStyle);		
		}
		// Example : Apply style for header cell exapmle
    	//	$objPHPExcel->getActiveSheet()->getStyle("A1:U4")->applyFromArray($headerStyle);	
		
		// Create excel file name in temp
		$excelFile = TMP_FILES . $this->fileName . '.xlsx'; // create excel file under temp folder.
		
		// Creates a writer to output the $objPHPExcel's content
	 	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save($excelFile); // saving the excel file
		
		return(true);
	}
	
	/*
	*	@param : array 		$configPDF	// Config Excel attribute, For more reade line : ....
	*
	*	$return : bool		if Excel file is created
	*/
	public function PDF($configPDF){
		
		$objReader = new PHPExcel_Reader_HTML; // new loader
		$objPHPExcel = $objReader->load($this->htmlFile); // load .html file that generated under temp folder		
		
		$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
		$rendererLibrary = 'tcpdf';
		$rendererLibraryPath = dirname(__FILE__) . '/PHPExcel/Shared/PDF';
		
		// Set properties
		foreach($configPDF['properties'] as $key=>$value){
			$setProperties = 'set' . $key;
			$objPHPExcel->getProperties()->{$setProperties}($value);
		}

		// right-to-left worksheet
		$objPHPExcel->getActiveSheet()->setRightToLeft(true);
		
		// Set Column
		foreach($configPDF['ColumnDimension'] as $key=>$value){
			$columns = (explode('-',$key));
			foreach($columns as $columnName){
				for($columnName;$columnName<=end($columns);$columnName++){
					$objPHPExcel->getActiveSheet()->getColumnDimension($columnName)->setWidth($value);
				}

			}
			
				
		}

		$objPHPExcel->getActiveSheet()->getPageSetup()
					->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// Set paper size
		if(isset($configPDF['paper_size'])){
			switch ($configPDF['paper_size']){
			case 'c':
					$objPHPExcel->getActiveSheet()->getPageSetup()
								->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_C);
					break;
			case 'd':
					$objPHPExcel->getActiveSheet()->getPageSetup()
								->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_D);
					break;
			case 'e':
					$objPHPExcel->getActiveSheet()->getPageSetup()
								->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_E);
					break;
			case 'a2':
					$objPHPExcel->getActiveSheet()->getPageSetup()
								->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A2_PAPER);
				break;
			case 'a3':
					$objPHPExcel->getActiveSheet()->getPageSetup()
						->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A3_EXTRA_TRANSVERSE_PAPER);
				break;
			case 'a4':
					$objPHPExcel->getActiveSheet()->getPageSetup()
								->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
				break;
			default:
				$objPHPExcel->getActiveSheet()->getPageSetup()
						->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A3_EXTRA_TRANSVERSE_PAPER);
				break;
			}	
		}else{
			$objPHPExcel->getActiveSheet()->getPageSetup()
						->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A3_EXTRA_TRANSVERSE_PAPER);
		}

		// Page margin
		if(!isset($configPDF['margin'])){
			$configPDF['margin'] = [
					'top' 		=> '0.75',
					'right' 	=> '0.25',
					'left' 		=> '0.25',
					'bottom' 	=> '0.75'
				];
		}
		
		foreach($configPDF['margin'] as $key=>$value){
				$setMargin = 'set'.ucfirst($key);
				$objPHPExcel->getActiveSheet()->getPageMargins()->{$setMargin}($value);
			}
		
		// Page setup
		$objPHPExcel->getActiveSheet()->getPageSetup()
									->setFitToPage(true)
									->setHorizontalCentered(true)
									->setVerticalCentered(true);
		
		//$style = array('font' => array('size' => 14,'bold' => true,'color' => array('rgb' => 'ff0000')));
		$style = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		     ),
			'font'  => array(
				'name' => 'zarbold',
				'bold'  => true,
				'color' => array('rgb' => '000000'),
				'size'  => 10,
			)
		);
		
		$numberStyle = array(
			'font' => array(
				'name' => 'zarbold',
			'size'  => 8,
			),
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('rgb' => 'FFFFFF')
        	)
		);
		$colorStyle = array(
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('rgb' => 'E7E7e7')
        	)
		);
		// Get row information
		$row = $configPDF['row'];
		$header_row = $configPDF['header_row'];
		$footer_row = $configPDF['footer_row'];
		// config number cell
 		if(isset($configPDF['numberCell'])){
			foreach($configPDF['numberCell'] as $number){
				$cell = explode(':',$number);
				if($cell[0]==$cell[1])
					$configPDF['number'] .= $cell[0].($header_row+1).':'.$cell[1].($header_row+$row);	
				else
					$configPDF['number'] .= $cell[0].($header_row+1).':'.$cell[1].($header_row+$row+$footer_row);
				$configPDF['number'] .= '-';
			}
		}
		// Set number style 
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($style);
			if(isset($configPDF['number'])){
				$configPDF['number']= explode('-',$configPDF['number']);
				foreach( $configPDF['number'] as $number ){
					if($number=='')
						break;
				$objPHPExcel->getActiveSheet()->getStyle($number)->applyFromArray($numberStyle);
				}	
			}
		// Set column for header and footer
		if(isset($configPDF['headerCell'])){
			$headerCell = explode(':',$configPDF['headerCell']);
			$configPDF['colorCell'][] = $headerCell[0].'1'.":".$headerCell[1].($header_row);
			$configPDF['colorCell'][] = $headerCell[0].($row+$header_row+1).':'.$headerCell[1].($row+$header_row+$footer_row);
		}
		// Set Color
		if(isset($configPDF['colorCell'])){
				foreach( $configPDF['colorCell'] as $color){
				$objPHPExcel->getActiveSheet()->getStyle($color)->applyFromArray($colorStyle);
				}	
			}


		if (!PHPExcel_Settings::setPdfRenderer(
				$rendererName,
				$rendererLibraryPath
			)) {
			die(
				'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
				'<br />' .
				'at the top of this script as appropriate for your directory structure'
			);
		}

		$PDFfile = TMP_FILES . $this->fileName . '.pdf';
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');

		$objWriter->save($PDFfile);
		return(true);
	}
	

	// Test
	private function generateRandomName() {
		$randName = substr(md5(date('m/d/y h:i:s:u')), 0, 8);
		if(file_exists(TMP_FILES . $randName . '.html')) {
			return $this -> generateRandomName();
		}
		return $randName;
	}
	
	public function generateExceltest($content) { 
		
		$filename = substr(md5(date('m/d/y h:i:s:u')), 0, 8);
		
		if(!is_dir( TMP_FILES )) { // check if temp folder not not exists
			mkdir( TMP_FILES, 0777 ); // create new temp dir for storing xlsx files.
		}

		$htmlfile = $filename . '.html'; // create new html file under temp folder
		file_put_contents($htmlfile,$content); // copy the html contents into tmp created html file
		
		$objReader = new PHPExcel_Reader_HTML; // new loader
		$objPHPExcel = $objReader->load($htmlfile); // load .html file that generated under temp folder
		
		// Set properties
		$objPHPExcel->getProperties()->setCreator("Setad Bazsazi");
		$objPHPExcel->getProperties()->setLastModifiedBy("User_name");
		$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Document");
		$objPHPExcel->getProperties()->setSubject("XLSX Report");
		$objPHPExcel->getProperties()->setDescription("XLSX report document for Office 2007");
		
		// right-to-left worksheet
		$objPHPExcel->getActiveSheet()->setRightToLeft(true);
		
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(10);
		// Text-wrap headre
		$objPHPExcel->getActiveSheet()->getStyle('B1:B'.$objPHPExcel->getActiveSheet()->getHighestRow())
    				->getAlignment()->setWrapText(true); 
    
	   /* simple style to make sure all cell's text have HORIZONTAL_LEFT alignment */
		$headerStyle = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
				'wrap' => true,
		     ),
			'font'  => array(
				'name'  => 'Tahoma',
				'bold'  => true,
				'color' => array('rgb' => '000000'),
				'size'  => 14,
			),
			
		);
		

		$style = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		     ),
			'font'  => array(
				'name'  => 'B Titr',
				'bold'  => false,
				'color' => array('rgb' => '000000'),
				'size'  => 12,
			)
		);
		
	

		//Apply the style
	        $objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($style);
    		$objPHPExcel->getActiveSheet()->getStyle("A1:U4")->applyFromArray($headerStyle);	
	        $excelFile = $filename . '.xlsx'; // create excel file under temp folder.
		
		header('Content-disposition: attachment; filename="'. $excelFile .'"');
	    
		// Creates a writer to output the $objPHPExcel's content
	 	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save($excelFile); // saving the excel file
		$objWriter->save('php://output'); // Download the excel file
		var_dump($objReader);
		
		exit();
	}
	// End test excel
	////////////////////////
	
	///////////////////////// Generate Excel /////////////////////
	
	public function generateExcel1($content) { // $content <- html_content
		
		$filename = substr(md5(date('m/d/y h:i:s:u')), 0, 8);
		
		if(!is_dir( TMP_FILES )) { // check if temp folder not not exists
			mkdir( TMP_FILES, 0777 ); // create new temp dir for storing xlsx files.
		}

		$htmlfile = TMP_FILES . $filename . '.html'; // create new html file under temp folder
		file_put_contents($htmlfile,$content); // copy the html contents into tmp created html file
		
		$objReader = new PHPExcel_Reader_HTML; // new loader
		$objPHPExcel = $objReader->load($htmlfile); // load .html file that generated under temp folder
		
		// Set properties
		$objPHPExcel->getProperties()->setCreator("Setad Bazsazi");
		$objPHPExcel->getProperties()->setLastModifiedBy("User_name");
		$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Document");
		$objPHPExcel->getProperties()->setSubject("XLSX Report");
		$objPHPExcel->getProperties()->setDescription("XLSX report document for Office 2007");
		
		// right-to-left worksheet
		$objPHPExcel->getActiveSheet()->setRightToLeft(true);
		// Text-wrap headre
//		$objPHPExcel->getActiveSheet()->getStyle('A1:Z3')->getAlignment()->setWrapText(true); 
		// Text-wrap B column
		$objPHPExcel->getActiveSheet()->getStyle('B1:B'.$objPHPExcel->getActiveSheet()->getHighestRow())
    				->getAlignment()->setWrapText(true); 
    
	   /* simple style to make sure all cell's text have HORIZONTAL_LEFT alignment */
		$headerStyle = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
				'wrap' => true,
		     ),
			'font'  => array(
				'name'  => 'Tahoma',
				'bold'  => true,
				'color' => array('rgb' => '000000'),
				'size'  => 14,
			),
			
		);
		

		$style = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		     ),
			'font'  => array(
				'name'  => 'B Titr',
				'bold'  => false,
				'color' => array('rgb' => '000000'),
				'size'  => 12,
			)
		);
		
	

		//Apply the style
	        $objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($style);
    		$objPHPExcel->getActiveSheet()->getStyle("A1:U4")->applyFromArray($headerStyle);	
	        $excelFile = TMP_FILES . $filename . '.xlsx'; // create excel file under temp folder.
		
	   
		// Creates a writer to output the $objPHPExcel's content
	 	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save($excelFile); // saving the excel file
		
		unlink($htmlfile); // delete .html file
		return($excelFile);
//		exit();
	}


	public function generatePDFtest($content){
		
		$filename = $content;
		$objPHPExcel = new PHPExcel();
		
		$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
		$rendererLibrary = 'tcpdf';
//		$rendererLibraryPath = 'PDF/' . $rendererLibrary;
		$rendererLibraryPath = dirname(__FILE__) . '/PDF';
		
		$inputFile = $content ;
		
		$inputFileType = PHPExcel_IOFactory::identify($inputFile);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFile);
		
		$objPHPExcel->setActiveSheetIndex(0);

		if (!PHPExcel_Settings::setPdfRenderer(
		  $rendererName,
		  $rendererLibraryPath
		 )) {
		 die(
		  'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
		  '<br />' .
		  'at the top of this script as appropriate for your directory structure'
		 );
		}
		
		$PDFFile = $filename . '.pdf';
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
		try{
			$objWriter->save($PDFFile);
		}catch(Exception $e){
			// echo $error;
		}
		
	}
	
	//////////// End test create PDF //////////////////////////////////////
	
	//////////// Generate PDF ////////////////////////////////
	public function generatePDF1($content){
		
		//$objPHPExcel = new PHPExcel();
		
		$filename = substr(md5(date('m/d/y h:i:s:u')), 0, 8);
		
		if(!is_dir( TMP_FILES )) { // check if temp folder not not exists
			mkdir( TMP_FILES, 0777 ); // create new temp dir for storing xlsx files.
		}
		
		$htmlfile = TMP_FILES . $filename . '.html'; // create new html file under temp folder
		file_put_contents($htmlfile,$content); // copy the html contents into tmp created html file
		
		$objReader = new PHPExcel_Reader_HTML; // new loader
		$objPHPExcel = $objReader->load($htmlfile); // load .html file that generated under temp folder		
		
		$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
		$rendererLibrary = 'tcpdf';
//		$rendererLibraryPath = 'PDF/' . $rendererLibrary;
		$rendererLibraryPath = dirname(__FILE__) . '/PHPExcel/Shared/PDF';

		// Set document properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
									 ->setLastModifiedBy("Maarten Balliauw")
									 ->setTitle("PDF Test Document")
									 ->setSubject("PDF Test Document")
									 ->setDescription("Test document for PDF, generated using PHP classes.")
									 ->setKeywords("pdf php")
									 ->setCategory("Test result file");
		// right-to-left worksheet
		$objPHPExcel->getActiveSheet()->setRightToLeft(true);
		
		// Set Row && column dimension
//		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
		
		// Set Column
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(20);
		// Set defualt dimension but not working
		$objPHPExcel->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
		
		
		$objPHPExcel->getActiveSheet()->getPageSetup()
					->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	
		// A4 paper
		$objPHPExcel->getActiveSheet()->getPageSetup()
					->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A3_EXTRA_TRANSVERSE_PAPER);
//		
		// Page margin
		$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.25);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.25);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(0.75);
		// right-to-left worksheet
		$objPHPExcel->getActiveSheet()->getPageSetup()
									->setFitToPage(true)
									->setHorizontalCentered(true)
									->setVerticalCentered(true);
		
		$style = array(
		    'alignment' => array(
		        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		     ),
			'font'  => array(
				'name' => 'freeserif',
				'bold'  => true,
				'color' => array('rgb' => '000000'),
				'size'  => 12,
			)
		);
		// Persian Font ; aefurat && dejavusans
		
		$numberStyle = array(
			'font' => array(
				'name' => 'hiwebmitra',
			'size'  => 14,
			)
		);
		
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle("C5:U18")->applyFromArray($numberStyle);

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);


		if (!PHPExcel_Settings::setPdfRenderer(
				$rendererName,
				$rendererLibraryPath
			)) {
			die(
				'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
				'<br />' .
				'at the top of this script as appropriate for your directory structure'
			);
		}

		$PDFfile = TMP_FILES . $filename . '.pdf';
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
		$objWriter->save($PDFfile);
		return($PDFfile);

		
	}
	
	//////////// End of Generate PDF ////////////////////////////
	
	////////////////// Test //////////////////////////////////////
	public function downloadFile() {
		$fields = array("fileName");
		
		$fileName = TMP_FILES . $_GET['fileName'];
		$fileNamePieces = explode( '.', $fileName);
		if(count($fileNamePieces) > 1) {
			$fileType = array_pop($fileNamePieces);
		}

		if(file_exists($fileName) && ($fileType == 'html' || $fileType == 'xlsx')) {
			if($fileType == 'xlsx') {
				header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				header('Pragma: ');
				header('Cache-Control: ');
				header('Content-disposition: attachment; filename="'. $_GET['fileName'] .'"');
			}
			else {
				header('Content-Type: text/html');
			}

			readfile($fileName);
			unlink($fileName); // each asset can only be accessed once, delete after access
			exit();
		}
	}	
	public function downloadFile1() {
		
		$fileName = $_POST['fileName'];

		$fileNamePieces = explode( '.', $fileName);
		if(count($fileNamePieces) > 1) {
			$fileType = array_pop($fileNamePieces);
			
		}
		var_dump($fileName);
		
		if(file_exists($fileName) && ($fileType == 'html' || $fileType == 'xlsx')) {
			if($fileType == 'xlsx') {
				
				$fileName = $_POST['fileName'];
				header("location: $fileName");
				
			}
			else {
				// dl HTML
			}
			
		}
		
	}	
	
}

?>