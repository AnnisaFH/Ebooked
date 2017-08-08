<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/*function __construct(){
	parent::__construct();
	$this->load->library('M_pdf');
    $this->load->model('M_data');
	}*/

	public function index(){
		$data=$this->m_data->getlearning();
		$this->load->view('guru_materi',array('data'=>$data));
	}
	public function tambah(){
		$kelas = $_POST['kelas'];
		$pelajaran = $_POST['pelajaran'];
		$judul = $_POST['judul'];
		$penerbit = $_POST['penerbit'];
		$review = $_POST['review'];
		$tahun = $_POST['tahun'];
		$review = $_POST['review'];

		$tmp_gambar= $_FILES['gambar']['tmp_name'];
		$tmp_file= $_FILES['materi']['tmp_name'];
		
		$target = './upload/';
		$file= ($judul).$_FILES['materi']['name'];
		$nama_gmbr =md5($judul).$_FILES['gambar']['name'];
		
		$simpangambar = move_uploaded_file($tmp_gambar, $target.$nama_gmbr);
		$simpanfile = move_uploaded_file($tmp_file, $target.$file);

		$data_insert = array(
			'id_kelas' => $kelas,
			'nama_materi' => $pelajaran,
			'judul' => $judul,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'review' => $review,
			'materi' => $file,
			'gambar' => $nama_gmbr,

		);
		
		//var_dump($data_insert);
		 $res = $this->m_data->inputdata('materi',$data_insert);
		 if($res>=1){
		 	redirect('index.php/Guru/materi');
		 }else{
		 	echo "<h2> Data Gagal</h2>";
		 }


		}

		public function cetakdata(){
		$data= $this->m_data->GetLearning('materi','');
		 $this->load->view('cetak', $data, TRUE);
	/*	 $html = $sumber;


        $pdfFilePath = "data".".pdf";
        //lokasi file css yang akan di load
        //$css = $this->load->view('admin/css/bootstrap.min.css');
        //$stylesheet = file_get_contents($css);

        $pdf = $this->m_pdf->load();

        $pdf->AddPage('L');
        //$pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($html);
        
        $pdf->Output($pdfFilePath, "D");
        exit();*/
    }
	public function editdata($id_materi){
		$where = array('id_materi' => $id_materi);
		$data['materi']=$this->m_data->editdata('materi',$where)->result();
		$data['mapel']=$this->db->query("select * from mapel")->result();
		$this->load->view('guru_form_edit',$data);
	}

	public function updatedata(){
		$kelas = $_POST['kelas'];
		$pelajaran = $_POST['pelajaran'];
		$judul = $_POST['judul'];
		$penerbit = $_POST['penerbit'];
		$review = $_POST['review'];
		$tahun = $_POST['tahun'];
		$review = $_POST['review'];
		$id_materi=$_POST['id_materi'];
		


		//$materi = $_POST['materi'];
		//$gambar = $_POST['gambar'];

		$data_update = array(
			'id_kelas' => $kelas,
			'nama_materi' => $pelajaran,
			'judul' => $judul,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'review' => $review,
			'id_materi' => $id_materi,
			
			);
		$where = array('id_materi' => $id_materi);
		$res=$this->m_data->updatedata('materi',$data_update,$where);
		if($res>=1){
			echo"<script> alert('update data berhasil')</script>";
		}else{
			echo"<script> alert('update data gagal')</script>";
		}
		//var_dump($data_insert);
		 redirect('index.php/Guru/materi');
		 }


		public function indexa(){
		$data=$this->m_data->getlearning();
		$this->load->view('materiguru',array('data'=>$data));
	}

		public function tambahtamu(){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];
	
		$data_tamu = array(
			'nama_tamu' => $nama,
			'email_tamu' => $email,
			'pesan_tamu' => $pesan,
		);
		
		 $res = $this->m_data->inputdata('tamu',$data_tamu);
		 if($res>=1){
		 	redirect('index.php/');
		 }else{
		 	echo "<h2> Data Gagal</h2>";
		 }
		}
		public function tambahguru(){
		$nama_guru = $_POST['nama_guru'];
		$alamat_guru = $_POST['alamat_guru'];
		$jabatan_guru = $_POST['jabatan_guru'];
		$password = $_POST['password'];
	
		$data_guru = array(
			'nama_guru' => $nama_guru,
			'alamat_guru' => $alamat_guru,
			'jabatan_guru' => $jabatan_guru,
			'password_guru' => md5($password),
		);
		
		 $res = $this->m_data->inputdata('guru',$data_guru);
		 if($res>=1){
		 	redirect('index.php/Admin/daftar');
		 }else{
		 	echo "<h2> Data Gagal</h2>";
		 }
	}
	public function deletemateri($id_materi){
		 	$where = array ('id_materi' => $id_materi);
		 	$res = $this ->m_data->deletedata('materi',$where);
		 	if($res>=1){
		 		redirect('index.php/Guru/materi');
		 	}
		 }

	 public function deleteguru($id_guru){
		 	$where = array ('id_guru' => $id_guru);
		 	$res = $this ->m_data->deletedata('guru',$where);
		 	if($res>=1){
		 		redirect('index.php/Admin/daftar');
		 	}
		 }


	public function editguru($id_guru){
		$where = array('id_guru' => $id_guru);
		$data['guru']=$this->m_data->editdata('guru',$where)->result();
		$this->load->view('admin_edit_guru',$data);
	}

	public function updateguru(){
		$nama_guru = $_POST['nama_guru'];
		$alamat_guru = $_POST['alamat_guru'];
		$jabatan_guru = $_POST['jabatan_guru'];
		$password = $_POST['password'];
		$id_guru = $_POST['id_guru'];

		$data_updateguru = array(
			'nama_guru' => $nama_guru,
			'alamat_guru' => $alamat_guru,
			'jabatan_guru' => $jabatan_guru,
			'password_guru' => md5($password),
			'id_guru' => $id_guru,
		);
		 $where = array('id_guru' => $id_guru);
		$res=$this->m_data->updatedata('guru',$data_updateguru,$where);
		if($res>=1){
			echo"<script> alert('update data berhasil')</script>";
			
		}else{
			echo"<script> alert('update data gagal')</script>";
		}
		//var_dump($data_insert);
		redirect('index.php/Admin/daftar');
		
	}

	public function tambahmapel(){
		$nama_mapel = $_POST['nama_mapel'];
	
		$data_mapel = array(
			'nama_materi' => $nama_mapel,
		);
		
		 $res = $this->m_data->inputdata('mapel',$data_mapel);
		 if($res>=1){
		 	redirect('index.php/Admin/daftarmapel');
		 }else{
		 	echo "<h2> Tambah Data Gagal</h2>";
		 }

	}

	public function editmapel($id_mapel){
		$where = array('id_mapel' => $id_mapel);
		$data['mapel']=$this->m_data->editdata('mapel',$where)->result();
		$this->load->view('admin_edit_mapel',$data);
	}

	public function updatemapel(){
		$nama_mapel = $_POST['nama_mapel'];
		$id_mapel= $_POST['id_mapel'];
	
		$data_updatemapel = array(
			'nama_materi' => $nama_mapel,
			'id_mapel' => $id_mapel,
		);
		
		 $where = array('id_mapel' => $id_mapel);
		$res=$this->m_data->updatedata('mapel',$data_updatemapel,$where);
		if($res>=1){
			echo"<script> alert('update data berhasil')</script>";
			
		}else{
			echo"<script> alert('update data gagal')</script>";
		}
		//var_dump($data_insert);
		redirect('index.php/Admin/daftarmapel');
		
	}

	 public function deletemapel($id_mapel){
		 	$where = array ('id_mapel' => $id_mapel);
		 	$res = $this ->m_data->deletedata('mapel',$where);
		 	if($res>=1){
		 		redirect('index.php/Admin/daftarmapel');
		 }
	}
	
}