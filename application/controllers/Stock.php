<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends MX_Controller
{
	public function __construct() {
		parent::__construct();
	}

	public function index() {

	}


	function query_mt_cahaya(){
	// * Create Comment 22 Mei 2018
	// * Fungsi ini sebagai function query stock material CAHAYA
	
		$db_sql 	= $this->load->database('sql_cerm', true);
		
		$query = "select ROW_NUMBER() 
				OVER (order by ( SELECT TOP 1 omschr__ FROM artcat__ WHERE artc_ref=(SELECT TOP 1 artc_ref FROM artiky__ WHERE art__ref=artikd__.art__ref)),
				art__ref, artd_ref, vak__ref) as row,
				vak__ref,
				category = ( SELECT TOP 1 omschr__ FROM artcat__ WHERE artc_ref=(SELECT TOP 1 artc_ref FROM artiky__ WHERE art__ref=artikd__.art__ref)),
				art__ref,
				artd_ref,
				art_oms1 = (select art_oms1 from artiky__ where art__ref = artikd__.art__ref),
				art_oms2 = (select art_oms2 from artiky__ where art__ref = artikd__.art__ref),
				gramm___ = (select gramm___ from artiky__ where art__ref = artikd__.art__ref),
				ref_at = (SELECT TOP 1 zyn__ref FROM artiky__ WHERE art__ref=artikd__.art__ref),
				breedte_ = (select breedte_ from artiky__ where art__ref = artikd__.art__ref),
				in_stock,
				unit = case(art__srt) when '6' then 
					   'kg'
					   when '2' then 
					   'kg'
					   when '7' then 
					   'pcs'
					   when '3' then 
					   'pcs'
					   when '5' then 
					   'm'
					   when 'a' then 
					   'core'
				 else  
					   ''
					   
				 end,
				nakprijs as cost
				from artikd__ WHERE
				( SELECT TOP 1 artc_ref FROM artiky__ WHERE art__ref=artikd__.art__ref) in ('21',
				'09',
				'06',
				'81',
				'20',
				'18',
				'19',
				'22',
				'55',
				'8',
				'51',
				'5',
				'07',
				'56',
				'9',
				'25',
				'23',
				'34',
				'46',
				'54',
				'49',
				'50',
				'29',
				'73',
				'74',
				'33',
				'27',
				'26',
				'36',
				'47')
				AND  
				vak__ref not in ('05.A-1',
				'05.A-2',
				'05.A-3',
				'05.A-4',
				'05.A-5',
				'05.A-6',
				'05.A-7',
				'05.A-8',
				'05.ABG',
				'05.B-1',
				'05.B-2',
				'05.B-3',
				'05.B-4',
				'05.B-5',
				'05.B-6',
				'05.B-7',
				'05.B-8',
				'05.C-1',
				'05.C-2',
				'05.C-3',
				'05.C-4',
				'05.C-5',
				'05.C-6',
				'05.C-7',
				'05.C-8',
				'05.CHY-THE',
				'05.CSL',
				'05.DL',
				'05.FIN-WH',
				'05.GA',
				'05.GEN-OFC',
				'05.HPI-1',
				'05.HPI-2',
				'05.INK',
				'05.IT',
				'05.KARANTI',
				'05.KOP',
				'05.LP',
				'05.MGMT-01',
				'05.MGMT-02',
				'05.MKT',
				'05.MNC',
				'05.PRP',
				'05.PURC', 
				'05.QC',
				'05.RA-1',
				'05.RA-2',
				'05.RA-3',
				'05.RA-4',
				'05.RAW-1',
				'05.RAW-2',
				'05.RAW-3',
				'05.RAW-4',
				'05.RAW-5',
				'05.RAW-6',
				'05.RAW-7',
				'05.RAW-8',
				'05.RAW-9',
				'05.RB-1',
				'05.RB-2',
				'05.RB-3',
				'05.RB-4',
				'05.RC-1-1',
				'05.RC-1-2',
				'05.RC-2-1',
				'05.RC-2-2',
				'05.RC-3-1',
				'05.RC-3-2',
				'05.RD-1',
				'05.RD-2',
				'05.RD-3',
				'05.RD-4',
				'05.RD-5',
				'05.THE-CHY',
				'05.TZ-1',
				'05.TZ-2',
				'05.WH-FIN',
				'05.WH-OFC',
				'05_CHY-THE',
				'IN.1',
				'IN.2'
				)
				order by category , art__ref, artd_ref, vak__ref";
			
				return $db_sql->query($query);
	}
	
	
	
	function query_mt_theia(){
	// * Create Comment 22 Mei 2018
	// * Fungsi ini sebagai function query stock material THEIA
	
		$db_sql 	= $this->load->database('sql_cerm', true);
		
		$query = "select ROW_NUMBER() 
				OVER (order by ( SELECT TOP 1 omschr__ FROM artcat__ WHERE artc_ref=(SELECT TOP 1 artc_ref FROM artiky__ WHERE art__ref=artikd__.art__ref)),
				art__ref, artd_ref, vak__ref) as row,
				vak__ref,
				category = ( SELECT TOP 1 omschr__ FROM artcat__ WHERE artc_ref=(SELECT TOP 1 artc_ref FROM artiky__ WHERE art__ref=artikd__.art__ref)),
				art__ref,
				artd_ref,
				art_oms1 = (select art_oms1 from artiky__ where art__ref = artikd__.art__ref),
				art_oms2 = (select art_oms2 from artiky__ where art__ref = artikd__.art__ref),
				gramm___ = (select gramm___ from artiky__ where art__ref = artikd__.art__ref),
				ref_at = (SELECT TOP 1 zyn__ref FROM artiky__ WHERE art__ref=artikd__.art__ref),
				breedte_ = (select breedte_ from artiky__ where art__ref = artikd__.art__ref),
				in_stock,
				unit = case(art__srt) when '6' then 
					   'kg'
					   when '2' then 
					   'kg'
					   when '7' then 
					   'pcs'
					   when '3' then 
					   'pcs'
					   when '5' then 
					   'm'
					   when 'a' then 
					   'core'
				 else  
					   ''
					   
				 end,
				nakprijs as cost
				from artikd__ WHERE
				( SELECT TOP 1 artc_ref FROM artiky__ WHERE art__ref=artikd__.art__ref) in ('21',
				'09',
				'06',
				'81',
				'20',
				'18',
				'19',
				'22',
				'55',
				'8',
				'51',
				'5',
				'07',
				'56',
				'9',
				'25',
				'23',
				'34',
				'46',
				'54',
				'49',
				'50',
				'29',
				'73',
				'74',
				'33',
				'27',
				'26',
				'36',
				'47')
				AND  
				vak__ref in ('05.A-1',
				'05.A-2',
				'05.A-3',
				'05.A-4',
				'05.A-5',
				'05.A-6',
				'05.A-7',
				'05.A-8',
				'05.ABG',
				'05.B-1',
				'05.B-2',
				'05.B-3',
				'05.B-4',
				'05.B-5',
				'05.B-6',
				'05.B-7',
				'05.B-8',
				'05.C-1',
				'05.C-2',
				'05.C-3',
				'05.C-4',
				'05.C-5',
				'05.C-6',
				'05.C-7',
				'05.C-8',
				'05.CHY-THE',
				'05.CSL',
				'05.DL',
				'05.FIN-WH',
				'05.GA',
				'05.GEN-OFC',
				'05.HPI-1',
				'05.HPI-2',
				'05.INK',
				'05.IT',
				'05.KARANTI',
				'05.KOP',
				'05.LP',
				'05.MGMT-01',
				'05.MGMT-02',
				'05.MKT',
				'05.MNC',
				'05.PRP',
				'05.PURC', 
				'05.QC',
				'05.RA-1',
				'05.RA-2',
				'05.RA-3',
				'05.RA-4',
				'05.RAW-1',
				'05.RAW-2',
				'05.RAW-3',
				'05.RAW-4',
				'05.RAW-5',
				'05.RAW-6',
				'05.RAW-7',
				'05.RAW-8',
				'05.RAW-9',
				'05.RB-1',
				'05.RB-2',
				'05.RB-3',
				'05.RB-4',
				'05.RC-1-1',
				'05.RC-1-2',
				'05.RC-2-1',
				'05.RC-2-2',
				'05.RC-3-1',
				'05.RC-3-2',
				'05.RD-1',
				'05.RD-2',
				'05.RD-3',
				'05.RD-4',
				'05.RD-5',
				'05.THE-CHY',
				'05.TZ-1',
				'05.TZ-2',
				'05.WH-FIN',
				'05.WH-OFC',
				'05_CHY-THE',
				'IN.1',
				'IN.2'
				)
				order by category , art__ref, artd_ref, vak__ref";
			
				return $db_sql->query($query);
	}
	
	function query_fg_cahaya(){
	// * Create Comment 22 Mei 2018
	// * Fungsi ini sebagai function query stock FinishedGood CAHAYA
	
		$db_sql 	= $this->load->database('sql_cerm', true);
		
		$query = "select
					ROW_NUMBER() 
					OVER (order by afg__ref, vak__ref) as row,
					afg__ref,
					kla_rpn = (select kla__rpn from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					zynrefkl = (select zynrefkl from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					afg_oms1 = (select afg_oms1 from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					afg_oms2 = (select afg_oms2 from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					sku__ref,
					box__ref,
					ord__ref,
					inhoud01,
					komm_qrt,
					vrrkprys =  (SELECT TOP 1 vrrkprys FROM afgpry__ WHERE ord__ref=afgsku__.ord__ref),
					price = (SELECT TOP 1 pr_excl_ FROM bstlyn__ WHERE ord__ref=afgsku__.ord__ref),
					aant__ex,
					vak__ref,
					oms_aant = (select oms_aant from afgart__ WHERE afg__ref=afgsku__.afg__ref)
					from afgsku__
					where toestand in ('1','2')
					AND vak__ref not in ('05.A-1',
					'05.A-2',
					'05.A-3',
					'05.A-4',
					'05.A-5',
					'05.A-6',
					'05.A-7',
					'05.A-8',
					'05.ABG',
					'05.B-1',
					'05.B-2',
					'05.B-3',
					'05.B-4',
					'05.B-5',
					'05.B-6',
					'05.B-7',
					'05.B-8',
					'05.C-1',
					'05.C-2',
					'05.C-3',
					'05.C-4',
					'05.C-5',
					'05.C-6',
					'05.C-7',
					'05.C-8',
					'05.CHY-THE',
					'05.CSL',
					'05.DL',
					'05.FIN-WH',
					'05.GA',
					'05.GEN-OFC',
					'05.HPI-1',
					'05.HPI-2',
					'05.INK',
					'05.IT',
					'05.KARANTI',
					'05.KOP',
					'05.LP',
					'05.MGMT-01',
					'05.MGMT-02',
					'05.MKT',
					'05.MNC',
					'05.PRP',
					'05.PURC', 
					'05.QC',
					'05.RA-1',
					'05.RA-2',
					'05.RA-3',
					'05.RA-4',
					'05.RAW-1',
					'05.RAW-2',
					'05.RAW-3',
					'05.RAW-4',
					'05.RAW-5',
					'05.RAW-6',
					'05.RAW-7',
					'05.RAW-8',
					'05.RAW-9',
					'05.RB-1',
					'05.RB-2',
					'05.RB-3',
					'05.RB-4',
					'05.RC-1-1',
					'05.RC-1-2',
					'05.RC-2-1',
					'05.RC-2-2',
					'05.RC-3-1',
					'05.RC-3-2',
					'05.RD-1',
					'05.RD-2',
					'05.RD-3',
					'05.RD-4',
					'05.RD-5',
					'05.THE-CHY',
					'05.TZ-1',
					'05.TZ-2',
					'05.WH-FIN',
					'05.WH-OFC',
					'05_CHY-THE'
					)
					ORDER BY afg__ref, vak__ref";
					
			return $db_sql->query($query);
	}
	
	function query_fg_theia(){
	// * Create Comment 22 Mei 2018
	// * Fungsi ini sebagai function query stock FinishedGood THEIA
	
		$db_sql 	= $this->load->database('sql_cerm', true);
		
		$query = "select
					ROW_NUMBER() 
					OVER (order by afg__ref, vak__ref) as row,
					afg__ref,
					kla_rpn = (select kla__rpn from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					zynrefkl = (select zynrefkl from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					afg_oms1 = (select afg_oms1 from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					afg_oms2 = (select afg_oms2 from afgart__ WHERE afg__ref=afgsku__.afg__ref),
					sku__ref,
					box__ref,
					ord__ref,
					inhoud01,
					komm_qrt,
					vrrkprys =  (SELECT TOP 1 vrrkprys FROM afgpry__ WHERE ord__ref=afgsku__.ord__ref),
					price = (SELECT TOP 1 pr_excl_ FROM bstlyn__ WHERE ord__ref=afgsku__.ord__ref),
					aant__ex,
					vak__ref,
					oms_aant = (select oms_aant from afgart__ WHERE afg__ref=afgsku__.afg__ref)
					from afgsku__
					where toestand in ('1','2')
					AND vak__ref in ('05.A-1',
					'05.A-2',
					'05.A-3',
					'05.A-4',
					'05.A-5',
					'05.A-6',
					'05.A-7',
					'05.A-8',
					'05.ABG',
					'05.B-1',
					'05.B-2',
					'05.B-3',
					'05.B-4',
					'05.B-5',
					'05.B-6',
					'05.B-7',
					'05.B-8',
					'05.C-1',
					'05.C-2',
					'05.C-3',
					'05.C-4',
					'05.C-5',
					'05.C-6',
					'05.C-7',
					'05.C-8',
					'05.CHY-THE',
					'05.CSL',
					'05.DL',
					'05.FIN-WH',
					'05.GA',
					'05.GEN-OFC',
					'05.HPI-1',
					'05.HPI-2',
					'05.INK',
					'05.IT',
					'05.KARANTI',
					'05.KOP',
					'05.LP',
					'05.MGMT-01',
					'05.MGMT-02',
					'05.MKT',
					'05.MNC',
					'05.PRP',
					'05.PURC', 
					'05.QC',
					'05.RA-1',
					'05.RA-2',
					'05.RA-3',
					'05.RA-4',
					'05.RAW-1',
					'05.RAW-2',
					'05.RAW-3',
					'05.RAW-4',
					'05.RAW-5',
					'05.RAW-6',
					'05.RAW-7',
					'05.RAW-8',
					'05.RAW-9',
					'05.RB-1',
					'05.RB-2',
					'05.RB-3',
					'05.RB-4',
					'05.RC-1-1',
					'05.RC-1-2',
					'05.RC-2-1',
					'05.RC-2-2',
					'05.RC-3-1',
					'05.RC-3-2',
					'05.RD-1',
					'05.RD-2',
					'05.RD-3',
					'05.RD-4',
					'05.RD-5',
					'05.THE-CHY',
					'05.TZ-1',
					'05.TZ-2',
					'05.WH-FIN',
					'05.WH-OFC',
					'05_CHY-THE'
					)
					ORDER BY afg__ref, vak__ref";
					
			return $db_sql->query($query);
	}
	
	public function send_fg($site) {
	// * Create Comment 22 Mei 2018
	// * Fungsi ini untuk generate dari query finishedgood ( query_fg_cahaya() )menjadi excel	
	
		if ( $site == "cahaya" ) {
			$query = $this->query_fg_cahaya();
		} else {
			$query = $this->query_fg_theia();
		}
		
		// Starting the PHPExcel library
        $this->load->library('Excel/PHPExcel');
        $this->load->library('Excel/PHPExcel/IOFactory');
 
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
 
        $objPHPExcel->setActiveSheetIndex(0);
 
        // Field names in the first row
        $fields = $query->list_fields();
		$col = 0;
		
		
		// merubah style border pada cell yang aktif (cell yang terisi)
		$styleArray = array( 'borders' => 
			array( 'allborders' => 
				array( 'style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => '00000000'), 
					), 
				), 
			);
		// melakukan pengaturan pada header kolom
		$fontHeader = array( 
			'font' => array(
				'bold' => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
             	'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
             	'rotation'   => 0,
			),
			'fill' => array(
            	'type' => PHPExcel_Style_Fill::FILL_SOLID,
            	'color' => array('rgb' => '6CCECB')
        	)
		);
		
		//Header Excel
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'No');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Product');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Customer Keyword');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Ref. at customer');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'Product description 1');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Product description 2');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'SKU');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'BOX');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'Job ID');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'Structure comment1');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'Quarantine comment');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'Cost Price');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Sales Price');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'Quantity');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'Stock location');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'Unit');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'crea_dat');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'lyn__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'volgnr__');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'toestand');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, 1, 'crea_uur');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'crea_usr');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'vpk__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'pal__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, 1, 'dos__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, 1, 'vrs__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, 1, 'levr_vnr');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, 1, 'vrrd_dat');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, 1, 'vrrd_uur');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, 1, 'hlf__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, 1, 'hlf__pos');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, 1, 'vrrd_usr');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, 1, 'vrrd__wn');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, 1, 'uit__dat');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, 1, 'uit__uur');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, 1, 'uit__usr');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(38, 1, 'lev__dat');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(39, 1, 'lev__uur');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(40, 1, 'jobnrlev');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(41, 1, 'tst__qrt');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(42, 1, 'inhoud02');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(43, 1, 'inhoud03');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(44, 1, 'inhoud04');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(45, 1, 'smpl__ex');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(46, 1, 'versiref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(47, 1, 'kom__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(48, 1, 'kommen__');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(49, 1, 'ord2_ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(50, 1, 'pr_rowid');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(51, 1, 'afg__rpn');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(52, 1, 'kla__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(53, 1, 'off1_ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(54, 1, 'etiket_b');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(55, 1, 'etiket_h');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(56, 1, 'lev__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(57, 1, 'lev__rpn');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(58, 1, 'dossiervak');
		//Header Excel EOF
				
 
        // Fetching the table data
        $row = 2;
        foreach($query->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
				if ( $col == 6  OR  $col == 7 ) {
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "'".$data->$field, PHPExcel_Cell_DataType::TYPE_STRING);
				} else {
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field, PHPExcel_Cell_DataType::TYPE_STRING);	
				}
				
			$col++;
            }
 
            $row++;
        }
 
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);

        $objPHPExcel->setActiveSheetIndex(0);
 
 
		$objWorksheet = $objPHPExcel->getActiveSheet();
		// $objPHPExcel->getActiveSheet()->getStyle('G1:H'.$row)->getNumberFormat()->setFormatCode('#');
		
		$objWorksheet->getStyle('A1:P1')->applyFromArray($fontHeader);
		$objWorksheet->getStyle('A1:P'.$row)->applyFromArray($styleArray);
		$objWorksheet->getStyle('A1:P'.$row)->getFont()
                                ->setName('Tahoma')
                                ->setSize(8);
		$objWorksheet->getStyle('A1:P'.$row)
								->getAlignment()
								->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		
  
        $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
 
        // Sending headers to force the user to download the file
        // header('Content-Type: application/vnd.ms-excel');
        // header('Content-Disposition: attachment;filename="'.date('dmY').'.xls"');
        // header('Cache-Control: max-age=0');
 
        // $objWriter->save('php://output');
		
		if ( $site == "cahaya" ) {
			$objWriter->save('uploads/stock/FG_CAHAYA_'.date('dmY').'.xls');
		} else {
			$objWriter->save('uploads/stock/FG_THEIA_'.date('dmY').'.xls');
		}


	}
	
	
	
	public function send_mt($site) {
	// * Create Comment 22 Mei 2018
	// * Fungsi ini untuk generate dari query material ( query_mt_cahaya() ) menjadi excel	
	
		if ( $site == "cahaya" ) {
			$query = $this->query_mt_cahaya();
		} else {
			$query = $this->query_mt_theia();
		}
		
		
            // Starting the PHPExcel library
        $this->load->library('Excel/PHPExcel');
        $this->load->library('Excel/PHPExcel/IOFactory');
 
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
 
        $objPHPExcel->setActiveSheetIndex(0);
 
        // Field names in the first row
        $fields = $query->list_fields();
		$col = 0;
		
		// merubah style border pada cell yang aktif (cell yang terisi)
		$styleArray = array( 'borders' => 
			array( 'allborders' => 
				array( 'style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => '00000000'), 
					), 
				), 
			);
		// melakukan pengaturan pada header kolom
		$fontHeader = array( 
			'font' => array(
				'bold' => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
             	'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
             	'rotation'   => 0,
			),
			'fill' => array(
            	'type' => PHPExcel_Style_Fill::FILL_SOLID,
            	'color' => array('rgb' => '6CCECB')
        	)
		);
		
		//Header Excel
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'No');
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Stock location');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Category');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Material id');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'SKU ID');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Material description 1');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'Quality');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'Grammage');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'Ref. at sup');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'Width');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'In stock');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'Unit');
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Price');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'art__srt');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'zyn__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'in___qrt');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, 'vaks_ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 1, 'vak2_ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'tst__qrt');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'jobnr_vw');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'levr_vnr');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'levdat__');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, 1, 'levuur__');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'besteld_');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'komment_');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'komm_qrt');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, 1, 'jobnrlev');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, 1, 'ord__ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, 1, 'validdat');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, 1, 'grammage');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, 1, 'diktemic');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, 1, 'artc_ref');
			// $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, 1, 'artc_oms');
			
		//Header Excel EOF
				
 
        // Fetching the table data
        $row = 2;
        foreach($query->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
			   
			   if ( $col == 3 ) {
					$objPHPExcel->getActiveSheet()->setCellValueExplicit('D'.$row, $data->$field, PHPExcel_Cell_DataType::TYPE_STRING);
				} else {
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field, PHPExcel_Style_NumberFormat::FORMAT_TEXT);
				}
				
                $col++;
            }

            $row++;
        }
 
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(7);
		
		
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(50);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5,86);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(7,29);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $objPHPExcel->setActiveSheetIndex(0);
 
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$objWorksheet->getStyle('A1:M1')->applyFromArray($fontHeader);
		$objWorksheet->getStyle('A1:M'.$row)->applyFromArray($styleArray);
		$objWorksheet->getStyle('A1:M'.$row)->getFont()
                                ->setName('Tahoma')
                                ->setSize(8);
		
		$objWorksheet->getStyle('D1:D'.$row)->setQuotePrefix(true);
		$objWorksheet->getStyle('A1:M'.$row)
								->getAlignment()
								->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		
		
        $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
 
        // Sending headers to force the user to download the file
        // header('Content-Type: application/vnd.ms-excel');
        // header('Content-Disposition: attachment;filename="'.date('dmY').'.xls"');
        // header('Cache-Control: max-age=0');
 
        // $objWriter->save('php://output');
		// $objWriter->save('uploads/cost/'.date('dmY').'.xls');
		
		if ( $site == "cahaya" ) {
			$objWriter->save('uploads/stock/MATERIAL_CAHAYA_'.date('dmY').'.xls');
		} else {
			$objWriter->save('uploads/stock/MATERIAL_THEIA_'.date('dmY').'.xls');
		}
		


	}
	
	public function mail_mt() {
	// * Create Comment 22 Mei 2018
	// * Fungsi ini untuk memanggil function send_mt agar di generate menjadi excel dan di kirim ke email
	// * Untuk merubah list daftar email bisa ke Library -> Sendmail.php -> function mail_stock()
	
	// * Mengirim email dengan kondisi sebagai berikut :
	// * Jika akhir bulan tanggal 30/31 maka email ke khoe.theresia@cahayajakarta.com
	// * cc ke ewy.tjhin@cahayajakarta.com, lusiana.peni@cahayajakarta.com, andi.a@cahayajakarta.com, anggiyawan@cahayajakarta.com, anggietriejast@gmail.com
	
	// * Jika BUKAN akhir bulan tanggal 30/31 maka email ke andi.a@cahayajakarta.com, anggiyawan@cahayajakarta.com
	
	
		$log = array (
					'status'	=> 'Material',
					'date'		=> date('Y-m-d H:i:s')
		);

		$this->db->insert('log_send_stock', $log);
		
		$this->send_mt('cahaya');
		$this->send_mt('theia');
		
		$this->load->library('sendmail');
		$this->sendmail->mail_stock(
			array(
				'attach01' => 'MATERIAL_CAHAYA_'.date('dmY').'.xls',
				'attach02' => 'MATERIAL_THEIA_'.date('dmY').'.xls',
		));
		
		
		
	}
	
	
	public function mail_fg() {
	// * Create Comment 22 Mei 2018
	// * Fungsi ini untuk memanggil function send_fg agar di generate menjadi excel dan di kirim ke email
	// * Untuk merubah list daftar email bisa ke Library -> Sendmail.php -> function mail_stock_fg()
	// * Mengirim email ke khoe.theresia@cahayajakarta.com
	// * cc ke ewy.tjhin@cahayajakarta.com, lusiana.peni@cahayajakarta.com, andi.a@cahayajakarta.com, anggiyawan@cahayajakarta.com, anggietriejast@gmail.com
	
		$this->send_fg('cahaya');
		$this->send_fg('theia');
		
		$this->load->library('sendmail');
		$this->sendmail->mail_stock_fg(
			array(
				'attach01' => 'FG_CAHAYA_'.date('dmY').'.xls',
				'attach02' => 'FG_THEIA_'.date('dmY').'.xls',
		));

	}
	
	
	public function send(){
	// * Create Comment 22 Mei 2018
	// * Fungsi ini untuk cron job di SERVER
	// * di SET setiap hari jam 23.45 dan 23.50
	// * untuk mengganti schedule Cron Job perlu dilakukan perubahan pada function ini,
	// * dan pada Library -> sendmail.php -> function mail_stock dan mail_stock_fg
	
	
	
		// echo '<meta http-equiv="refresh" content="60">';

		if (date('d-m-Y H:i') >= date('d-m-Y 23:40') AND date('d-m-Y H:i') <= date('d-m-Y 23:48')) {
			$this->mail_mt();
		} else if (date('d-m-Y H:i') >= date('d-m-Y 23:40') AND date('d-m-Y H:i') <= date('d-m-Y 23:56') ) {
			$this->mail_fg();
		} else {
			echo date('d-m-Y H:i:s');
		}
	}
}
 /* End of file Stock.php */
 /* Location: ./application/controllers/Stock.php */