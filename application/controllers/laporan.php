 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

            Class Laporan extends CI_Controller{
               function __construct() {
        parent::__construct();
        $this->load->library('M_pdf');
        $this->load->model('modelapp');
    }
          function cetakpdf(){
            $table="materi";
            $data['materi']=$this->modelapp->getalldata($tabelName);
            $this->load->view('cetak',$data);
            $sumber = $this->load->view('cetak', $data, TRUE);
            $html = $sumber;
 
 
            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('L');
            $pdf->WriteHTML($stylesheet, 1);
            $pdf->WriteHTML($html);
            
            $pdf->Output($pdfFilePath, "D");
            exit();
               }
          }
    ?>