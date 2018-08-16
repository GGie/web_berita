<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {
 
    public function ang()
    {
		a
	}
		
	public function index()
    {
        $data = [];
        //load the view and saved it into $html variable
        $html=$this->load->view('welcome_message', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "output_pdf_name.pdf";
 
        //load mPDF library
        $this->load->library('m_pdf');
 
		
       //generate the PDF from the given html
        $this->m_pdf->pdf->AddPage('P', // L - landscape, P - portrait
        '', '', '', '',
        0, // margin_left
        0, // margin right
        0, // margin top
        0, // margin bottom
        18, // margin header
        12); // margin footer
        $this->m_pdf->pdf->WriteHTML($html, 200);
 
        //download it.
        //$this->m_pdf->pdf->Output($pdfFilePath, "D");        
        $this->m_pdf->pdf->Output($pdfFilePath, "I");        
    }
	
	public function error(){
			echo $this->load->view('errors/html/error_404');
	}
	
	
	
	
	public function test()
	{
		echo $this->benchmark->elapsed_time();
	}

	function format_size($size) {
    $mod = 1024;

    $units = explode(' ','B KB MB GB TB PB');
    for ($i = 0; $size > $mod; $i++) {
        $size /= $mod;
    }

    return round($size, 2) . ' ' . $units[$i];
	}

	function NavImp( $nopo ){
		$Purchase = "&dollar;Purchase";
		$db_sql 	= $this->load->database('sql_nav', true);
		
		//$sql 		= "SELECT TOP 10 'Imported' as stimportNAV FROM [PT Cahaya Jakarta\$Purchase Header]";
		$sql 		= "SELECT 'Imported' as stimportNAV FROM Device WHERE [Invoice No_ (CHJ)]='" . $nopo . "'";
		//$sql 		= "SELECT * FROM INFORMATION_SCHEMA.TABLES";
		$sql 		.= " UNION ";
		$sql 		.= "SELECT 'Already Posted' as stimportNAV FROM [PT Cahaya Jakarta&dollar;Purch_ Inv_ Header] WHERE [Invoice No_ (CHJ)]='" . $nopo . "'";


		$query		= $db_sql->query( $sql );
		
		foreach ( $query->result() as $data ){
			//echo $data->TABLE_NAME;
			echo $data->stimportNAV;
		}
		
	}
	

	function nmjob( $ord__ref ) {

		$db_sql 	= $this->load->database('sql_cerm', true);
		$query 		= $db_sql->query("select TOP 1 omschr__ from order___ where ord__ref ='" . $ord__ref . "'");	
		foreach ( $query->result() as $data){
			$return = $data->omschr__;
		}
		
		return str_replace("'"," ", $return);
			
	}
	
	public function codeigniter(){
		$db_sql 	= $this->load->database('sql_cerm', true);
		
		$sql = "SELECT row_number() OVER (ORDER BY a.art__ref) as number,
		job = CAST((select TOP 1 omschr__ from order___ where ord__ref =a.off__ref) as varchar),
			a.art__ref, a.tssnaf_h, b.in_produ, a.min____b, b.afg__ref, b.vrs__ref, b.kla__oms,
			af__date = ( select max(af__date) proddat  from planning  where ord__ref=a.off__ref and toestand = '3' and aktie___ = '21'),
			ord__ref = ( select TOP 1 ord__ref from planning WHERE ord__ref=a.off__ref),
			a.etiket_b,a.etiket_h,a.eti_vorm,a.basisant,a.kpnafw_9, a.aantal_b,a.aantal_h,a.klcod_fr, a.klcod_lm,a.klcod_rg,a.omtrek__,a.ant__plw,a.ant_pltn,a.prs__ref,a.trm__ref,a.spdd____,a.stl____t,
			a.art_oms2,a.breedte_,a.tedrk_to,a.prcinsvo,a.inlinsvo,a.oflinsvo,a.prcpapto,a.bst__rol,
			(left(a.stel_tyd,3)*60 + right(a.stel_tyd,2)) stel_tyd,(left(a.druk_tyd,3)*60 + right(a.druk_tyd,2)) druk_tyd, (left(a.was__tyd,3)*60 + right(a.was__tyd,2))was__tyd,
			a.off__ref,a.tedrkd__,
			MR_meter = ((( a.tedrkd__/100 )* 5)+75)
			FROM v4eti___ as a, v4vrs___ as b
			WHERE a.off__ref=b.off__ref
			AND a.off__ref =( select TOP 1 ord__ref from planning WHERE ord__ref=a.off__ref)
AND ( select max(af__date) proddat  from planning  where ord__ref=a.off__ref and toestand = '3' and aktie___ = '21')= '2018-07-23'";
		
			// $sql .= "AND ( select max(af__date) proddat  from planning  where ord__ref=a.off__ref and toestand = '3' and aktie___ = '21') >= '2018-07-11'";
			// $sql .= "AND ( select max(af__date) proddat  from planning  where ord__ref=a.off__ref and toestand = '3' and aktie___ = '21') <= '2018-07-11'";
		
		
		
		$query = $db_sql->query( $sql );
		
		$result = array();
		$row = array();
		
		foreach($query->result() as $data)
		{
			 // return json_encode($result);
			echo htmlspecialchars($data->kla__oms, ENT_QUOTES, 'UTF-8');
		}		
	}
}